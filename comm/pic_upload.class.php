<?php  //小安

/*
+--------------------------------------------------------------------------
|   Invision Power Board
|   =============================================
|   by Matthew Mecham
|   (c) 2001 - 2006 Invision Power Services, Inc.
|   http://www.invisionpower.com
|   Download by http://www.codefans.net
|   =============================================
|   Web: http://www.invisionboard.com
|   Licence Info: http://www.invisionboard.com/?license
+---------------------------------------------------------------------------
|   > $Date: 2005-10-10 14:03:20 +0100 (Mon, 10 Oct 2005) $
|   > $Revision: 22 $
|   > $Author: matt $
+---------------------------------------------------------------------------
|
|   > UPLOAD handling methods (KERNEL)
|   > Module written by Matt Mecham
|   > Date started: 15th March 2004
|
|	> Module Version Number: 1.0.0
+--------------------------------------------------------------------------
| ERRORS:
| 1: No upload
| 2: Not valid upload type
| 3: Upload exceeds $max_file_size
| 4: Could not move uploaded file, upload deleted
| 5: File pretending to be an image but isn't (poss XSS attack)
+--------------------------------------------------------------------------
*/

/**
* IPS Kernel Pages: Upload
*
* This class contains all generic functions to handle
* the parsing of $_FILE data.
*
* Example Usage:
* <code>
* $upload = new class_upload();
* $upload->out_file_dir     = './uploads';
* $upload->max_file_size    = '10000000';
* $upload->make_script_safe = 1;
* $upload->allowed_file_ext = array( 'gif', 'jpg', 'jpeg', 'png' );
* $upload->upload_process();
*
* if ( $upload->error_no )
* {
*	  switch( $upload->error_no )
*	  {
*		  case 1:
*			  // No upload
*			  print "No upload"; exit();
*		  case 2:
*		  case 5:
*			  // Invalid file ext
*			   print "Invalid File Extension"; exit();
*		  case 3:
*			  // Too big...
*			   print "File too big"; exit();
*         case 4:
*			  // Cannot move uploaded file
*			   print "Move failed"; exit();
*	  }
*  }
* print $upload->saved_upload_name . " uploaded!";
* </code>
* ERRORS:
* 1: No upload
* 2: Not valid upload type
* 3: Upload exceeds $max_file_size
* 4: Could not move uploaded file, upload deleted
* 5: File pretending to be an image but isn't (poss XSS attack)
*
* @package		IPS_KERNEL
* @author		Matt Mecham
* @copyright	Invision Power Services, Inc.
* @version		2.1
*/

/**
*
*/

/**
* Upload Class
*
* Methods and functions for handling file uploads
*
* @package	IPS_KERNEL
* @author   Matt Mecham
* @version	2.1
*/
class pic_upload
{
	/**
	* Name of upload form field
	*
	* @var string
	*/
	//var $upload_form_field = 'file';

	/**
	* Out filename *without* extension
	* (Leave blank to retain user filename)
	*
	* @var string
	*/
	var $out_file_name    = '';

	/**
	* Out dir (./upload) - no trailing slash
	*
	* @var string
	*/
	var $out_file_dir     = 'upload';

	/**
	* maximum file size of this upload
	*
	* @var integer
	*/
	var $max_file_size    = 10000000;

	/**
	* Forces PHP, CGI, etc to text
	*
	* @var integer
	*/
	var $make_script_safe = 0;

	/**
	* Force non-img file extenstion (leave blank if not) (ex: 'ibf' makes upload.doc => upload.ibf)
	*
	* @var string
	*/
	var $force_data_ext   = '';

	/**
	* Allowed file extensions array( 'gif', 'jpg', 'jpeg'..)
	*
	* @var array
	*/
	var $allowed_file_ext = array( 'gif', 'jpg', 'jpeg', 'png','ipa','apk' );

	/**
	* Array of IMAGE file extensions
	*
	* @var array
	*/
	var $image_ext        = array( 'gif', 'jpeg', 'jpg', 'jpe', 'png' );

	/**
	* Check to make sure an image is an image
	*
	* @var boolean flag
	*/
	var $image_check      = 1;

	/**
	* Returns current file extension
	*
	* @var string
	*/
	var $file_extension   = '';

	/**
	* If force_data_ext == 1, this will return the 'real' extension
	* and $file_extension will return the 'force_data_ext'
	*
	* @var string
	*/
	var $real_file_extension = '';

	/**
	* Returns error number
	*
	* @var integer
	*/
	var $error_no         = 0;

	/**
	* Returns if upload is img or not
	*
	* @var integer
	*/
	var $is_image         = 0;

	/**
	* Returns file name as was uploaded by user
	*
	* @var string
	*/
	var $original_file_name = "";

	/**
	* Returns final file name as is saved on disk. (no path info)
	*
	* @var string
	*/
	var $parsed_file_name = "";

	/**
	* Returns final file name with path info
	*
	* @var string
	*/
	var $saved_upload_name = "";

	/*-------------------------------------------------------------------------*/
	// CONSTRUCTOR
	/*-------------------------------------------------------------------------*/

	function class_upload()
	{

	}


	/*-------------------------------------------------------------------------*/
	// PROCESS THE UPLOAD
	/*-------------------------------------------------------------------------*/

	/**
	* Processes the upload
	*
	*/

	function upload_process()
	{
		$this->_clean_paths();

		//-------------------------------------------------
		// Check for getimagesize
		//-------------------------------------------------

		if ( ! function_exists( 'getimagesize' ) )
		{
			$this->image_check = 0;
		}

		//-------------------------------------------------
		// Set up some variables to stop carpals developing
		//-------------------------------------------------

		$FILE_NAME = isset($_FILES[ $this->upload_form_field ]['name']) ? $_FILES[ $this->upload_form_field ]['name'] : '';
		$FILE_SIZE = isset($_FILES[ $this->upload_form_field ]['size']) ? $_FILES[ $this->upload_form_field ]['size'] : '';
		$FILE_TYPE = isset($_FILES[ $this->upload_form_field ]['type']) ? $_FILES[ $this->upload_form_field ]['type'] : '';

		//-------------------------------------------------
		// Naughty Opera adds the filename on the end of the
		// mime type - we don't want this.
		//-------------------------------------------------

		$FILE_TYPE = preg_replace( "/^(.+?);.*$/", "\\1", $FILE_TYPE );

		//-------------------------------------------------
		// Naughty Mozilla likes to use "none" to indicate an empty upload field.
		// I love universal languages that aren't universal.
		//-------------------------------------------------

		if ( !isset($_FILES[ $this->upload_form_field ]['name'])
		or $_FILES[ $this->upload_form_field ]['name'] == ""
		or !$_FILES[ $this->upload_form_field ]['name']
		or !$_FILES[ $this->upload_form_field ]['size']
		or ($_FILES[ $this->upload_form_field ]['name'] == "none") )
		{
			$this->error_no = 1;
			return;
		}

		if( !is_uploaded_file($_FILES[ $this->upload_form_field ]['tmp_name']) )
		{
			$this->error_no = 1;
			return;
		}

		//-------------------------------------------------
		// De we have allowed file_extensions?
		//-------------------------------------------------

		if ( ! is_array( $this->allowed_file_ext ) or ! count( $this->allowed_file_ext ) )
		{
			$this->error_no = 2;
			return;
		}

		//-------------------------------------------------
		// Get file extension
		//-------------------------------------------------

		$this->file_extension = $this->_get_file_extension( $FILE_NAME );

		if ( ! $this->file_extension )
		{
			$this->error_no = 2;
			return;
		}

		$this->real_file_extension = $this->file_extension;

		//-------------------------------------------------
		// Valid extension?
		//-------------------------------------------------

		if ( ! in_array( $this->file_extension, $this->allowed_file_ext ) )
		{
			$this->error_no = 2;
			return;
		}

		//-------------------------------------------------
		// Check the file size
		//-------------------------------------------------

		if ( ( $this->max_file_size ) and ( $FILE_SIZE > $this->max_file_size ) )
		{
			$this->error_no = 3;
			return;
		}

		//-------------------------------------------------
		// Make the uploaded file safe
		//-------------------------------------------------

		$FILE_NAME = preg_replace( "/[^\w\.]/", "_", $FILE_NAME );


		$this->original_file_name = $FILE_NAME;

		//-------------------------------------------------
		// Convert file name?
		// In any case, file name is WITHOUT extension
		//-------------------------------------------------

		if ( $this->out_file_name )
		{
			$this->parsed_file_name = $this->out_file_name;
		}
		else
		{
			$this->parsed_file_name = str_replace( '.'.$this->file_extension, "", $FILE_NAME );
		}

		//-------------------------------------------------
		// Make safe?
		//-------------------------------------------------

		$renamed = 0;

		if ( $this->make_script_safe )
		{
			if ( preg_match( "/\.(cgi|pl|js|asp|php|html|htm|jsp|jar)(\.|$)/i", $FILE_NAME ) )
			{
				$FILE_TYPE                 = 'text/plain';
				$this->file_extension      = 'txt';
				$this->parsed_file_name	   = preg_replace( "/\.(cgi|pl|js|asp|php|html|htm|jsp|jar)(\.|$)/i", "$2", $this->parsed_file_name );

				$renamed = 1;
			}
		}

		//-------------------------------------------------
		// Is it an image?
		//-------------------------------------------------

		if ( is_array( $this->image_ext ) and count( $this->image_ext ) )
		{
			if ( in_array( $this->file_extension, $this->image_ext ) )
			{
				$this->is_image = 1;
			}
		}

		//-------------------------------------------------
		// Add on the extension...
		//-------------------------------------------------

		if ( $this->force_data_ext and ! $this->is_image )
		{
			$this->file_extension = str_replace( ".", "", $this->force_data_ext );
		}

		$this->parsed_file_name .= '.'.$this->file_extension;

		//-------------------------------------------------
		// Copy the upload to the uploads directory
		// ^^ We need to do this before checking the img
		//    size for the openbasedir restriction peeps
		//    We'll just unlink if it doesn't checkout
		//-------------------------------------------------


        $this->out_file_dir=$this->out_file_dir.'/'.date('Y').'/'.date('md');
        $this->create($this->out_file_dir);
		if($this->saved_upload_name==''){
			$this->saved_upload_name = $this->out_file_dir.'/'.$this->resetname($this->parsed_file_name);
		}
		else{
			//$this->saved_upload_name.=$this->resetname($this->parsed_file_name);
		}
		
		if ( ! @move_uploaded_file( $_FILES[ $this->upload_form_field ]['tmp_name'], $this->saved_upload_name) )
		{
			$this->error_no = 4;
			return;
		}
		else
		{
			@chmod( $this->saved_upload_name, 0777 );
		}

		//-------------------------------------------------
		// Is it an image?
		//-------------------------------------------------

		if ( $this->is_image )
		{
			//-------------------------------------------------
			// Are we making sure its an image?
			//-------------------------------------------------

			if ( $this->image_check )
			{
				$img_attributes = @getimagesize( $this->saved_upload_name );

				if ( ! is_array( $img_attributes ) or ! count( $img_attributes ) )
				{
					// Unlink the file first
					@unlink( $this->saved_upload_name );
					$this->error_no = 5;
					return;
				}
				else if ( ! $img_attributes[2] )
				{
					// Unlink the file first
					@unlink( $this->saved_upload_name );
					$this->error_no = 5;
					return;
				}
				else if ( $img_attributes[2] == 1 AND ( $this->file_extension == 'jpg' OR $this->file_extension == 'jpeg' ) )
				{
					// Potential XSS attack with a fake GIF header in a JPEG
					@unlink( $this->saved_upload_name );
					$this->error_no = 5;
					return;
				}
			}
		}
		
		if( !$renamed )
		{
			$this->check_xss_infile();

			if( $this->error_no )
			{
				return;
			}
		}

		//-------------------------------------------------
		// If filesize and $_FILES['size'] don't match then
		// either file is corrupt, or there was funny
		// business between when it hit tmp and was moved
		//-------------------------------------------------

		if( filesize($this->saved_upload_name) != $_FILES[$this->upload_form_field ]['size'] )
		{
			@unlink( $this->saved_upload_name );

			$this->error_no = 1;
			return;
		}
	}

	function create($dir) {
	    if (!is_dir($dir)) {
		    $temp = explode('/', $dir);
		    $cur_dir = '';
		    for ($i = 0; $i < count($temp); $i++) {
			    $cur_dir .= $temp[$i] . '/';
			    if (!is_dir($cur_dir)) {
				    @ mkdir($cur_dir);
			    }
		    }
	    }
    }

    function resetname($name){
    	$arr=explode('.',$name);
    	return date('His').rand(10000,99999).'.'.$arr[1];
    }


	/*-------------------------------------------------------------------------*/
	// INTERNAL: Check for XSS inside file
	/*-------------------------------------------------------------------------*/

	/**
	* Checks for XSS inside file.  If found, sets error_no to 5 and returns
	*
	* @param void
	*/

	function check_xss_infile()
	{
		// HTML added inside an inline file is not good in IE...
		
		$a=file_get_contents($this->saved_upload_name);
        $b=preg_match('#<script|eval|<html|<head|<title|<body|<pre|<table|<a\s+href|<img|<plaintext#si',$a);
        if($b==1){
        	@unlink( $this->saved_upload_name );
			$this->error_no = 5;
			return;
        }

		if($a=='')
		{
			@unlink( $this->saved_upload_name );
			$this->error_no = 5;
			return;
		}

		# Thanks to Nicolas Grekas from comments at www.splitbrain.org for helping to identify all vulnerable HTML tags
	}

	/*-------------------------------------------------------------------------*/
	// INTERNAL: Get file extension
	/*-------------------------------------------------------------------------*/

	/**
	* Returns the file extension of the current filename
	*
	* @param string Filename
	*/

	function _get_file_extension($file)
	{
		return strtolower( str_replace( ".", "", substr( $file, strrpos( $file, '.' ) ) ) );
	}

	/*-------------------------------------------------------------------------*/
	// INTERNAL: Clean paths
	/*-------------------------------------------------------------------------*/

	/**
	* Trims off trailing slashes
	*
	*/

	function _clean_paths()
	{
		$this->out_file_dir = preg_replace( "#/$#", "", $this->out_file_dir );
	}
}