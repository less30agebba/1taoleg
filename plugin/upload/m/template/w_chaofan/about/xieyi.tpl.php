<?php
if (!defined('INDEX')) {
	exit ('Access Denied');
}
$parameter=act_about_xieyi();
extract($parameter);
?>
<!doctype html>
<html class="um landscape min-width-240px min-width-320px min-width-480px min-width-768px min-width-1024px">
<head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<title>用户协议</title>
</head>
<style>
*{
	margin:0;
	padding:0;
}
body{
	font-family:'微软雅黑';
	font-size:1.6em
}
.clearfloat:after{display:block;clear:both;content:"";visibility:hidden;height:0} 
.clearfloat{zoom:1} 
.afl_xy{
	width:94%;
	margin:1em auto 0;
}
.afl_xy p{
	margin-bottom:1em;
}
</style>
<body style="background:#fff;">
<div class="afl_xy">
    加入和使用<?=$site_info['title']?>表明您已经阅读并同意本使用条款，您的会员活动会遵从本使用条款。鉴于<?=$site_info['title']?>并非是关乎国计民生或者垄断的行业及企业，因此您对本使用协议不认同的，完全可以选择不加入和使用本网站。
本协议由您与本网站共同缔结，具有合同效力。
本协议中协议双方合称协议方，<?=$site_info['title']?>提供购物返利、促销信息、活动导购、广告等服务，域名为<?=$site_info['url']?>。
<br />
<br />
<p>一、协议内容及签署</p>
<p>1、本协议内容包括协议正文及所有<?=$site_info['title']?>已经发布的或将来可能发布的各类规则。所有规则为本协议不可分割的组成部分，与协议正文具有同等法律效力。除另行明确声明外，任何<?=$site_info['title']?>及其关联公司提供的服务均受本协议约束。但法律法规另有强制性规定的，依其规定。</p>
<p>2、您在注册<?=$site_info['title']?>账户时点击提交"我已阅读并且同意<?=$site_info['title']?>的使用协议"即视为您接受本协议及各类规则，并同意受其约束。您应当在使用<?=$site_info['title']?>服务之前认真阅读全部协议内容并确保完全理解协议内容，如您对协议有任何疑问的，应向<?=$site_info['title']?>咨询。但无论您事实上是否在使用<?=$site_info['title']?>服务之前认真阅读了本协议内容，只要您注册、正在或者继续使用<?=$site_info['title']?>服务，则视为接受本协议。</p>
<p>3、您承诺接受并遵守本协议的约定。如果您不同意本协议的约定，您应立即停止注册程序或停止使用<?=$site_info['title']?>服务。</p>
<p>4、<?=$site_info['title']?>有权根据需要不时地制订、修改本协议及/或各类规则，并以网站公示的方式进行公告。变更后的协议和规则一经在网站公布后，立即自动生效。<?=$site_info['title']?>的最新的协议和规则以及网站公告可供您随时登陆查阅，您也应当经常性的登陆查阅最新的协议和规则以及网站公告以了解<?=$site_info['title']?>最新动态。如您不同意相关变更，应当立即停止使用<?=$site_info['title']?>服务。您继续使用服务的，即表示您接受经修订的协议和规则。本协议和规则（及其各自的不时修订）条款具有可分割性，任一条款被视为违法、无效、被撤销、变更或因任何理由不可执行，并不影响其他条款的合法性、有效性和可执行性。</p>
<p>二、协议终止</p>
<p>1、您同意，<?=$site_info['title']?>有权依据本协议决定中止、终止向您提供部分或全部<?=$site_info['title']?>平台服务，暂时冻结或永久冻结（注销）您的账户，且无须为此向您或任何第三方承担任何责任，但本协议或法律法规另有明确要求的除外。</p>
<p>2、出现以下情况时，<?=$site_info['title']?>有权直接以注销账户的方式终止本协议：</p>
<p>a)会员超过两年无登陆记录；</p>
<p>b)<?=$site_info['title']?>终止向您提供服务后，您涉嫌再一次直接或间接或以他人名义注册为<?=$site_info['title']?>用户的；</p>
<p>c)您提供的电子邮箱不存在或无法接收电子邮件，且没有其他方式可以与您进行联系，或<?=$site_info['title']?>以其它联系方式通知您更改电子邮件信息，而您在<?=$site_info['title']?>通知后七个工作日内仍未更改为有效的电子邮箱的；</p>
<p>d)您注册信息中的主要内容不真实或不准确或不及时或不完整；</p>
<p>e)本协议（含规则）变更时，您明示并通知<?=$site_info['title']?>不愿接受新的服务协议的；</p>
<p>f)其它<?=$site_info['title']?>认为应当终止服务的情况。</p>
<p>3、您有权向<?=$site_info['title']?>要求注销您的账户，经<?=$site_info['title']?>审核同意的，<?=$site_info['title']?>注销（永久冻结）您的账户，届时，您与<?=$site_info['title']?>基于本协议的合同关系即终止。您的账户被注销（永久冻结）后，返利网没有义务为您保留或向您披露您账户中的任何信息，也没有义务向您或第三方转发任何您未曾阅读或发送过的信息。</p>
<p>4、您同意，您与<?=$site_info['title']?>的合同关系终止后，<?=$site_info['title']?>及其关联公司或者其合作组织仍享有下列权利</p>
<p>a)继续保存并使用您的注册、登记信息、数据及您使用<?=$site_info['title']?>服务期间的所有交易数据。</p>
<p>b)您在使用<?=$site_info['title']?>服务期间存在违法行为或违反本协议和/或规则的行为的，<?=$site_info['title']?>仍可依据本协议向您主张权利。</p>
<p>5、<?=$site_info['title']?>中止或终止向您提供服务后，对于您在服务中止或终止之前的交易行为依下列原则处理，您应独力处理并完全承担进行以下处理所产生的任何争议、损失或增加的任何费用，并应确保<?=$site_info['title']?>免于因此产生任何损失或承担任何费用：</p>
<p>a)您在服务中止或终止之前已经上传至<?=$site_info['title']?>的物品尚未交易的，<?=$site_info['title']?>有权在中止或终止服务的同时删除此项物品的相关信息；</p>
<p>b)您在服务中止或终止之前已经与其他会员达成买卖合同，但合同尚未实际履行的，<?=$site_info['title']?>有权删除该买卖合同及其交易物品的相关信息；</p>
<p>c)您在服务中止或终止之前已经与其他会员达成买卖合同且已部分履行的，<?=$site_info['title']?>可以不删除该项交易，但<?=$site_info['title']?>有权在中止或终止服务的同时将相关情形通知您的交易对方。</p>
<p>三、隐私权政策</p>
<p>1、<?=$site_info['title']?>对希望成为会员的用户没有任何限制，但18岁以下的用户使用<?=$site_info['title']?>服务必须取得监护人的同意；</p>
<p>2、一个帐号仅限一个会员使用，会员必须向<?=$site_info['title']?>提供真实确实的信息，对于由于资料提供不正确导致汇款无法收到等后果，<?=$site_info['title']?>不承担责任；</p>
<p>3、会员资料修改后必须及时通知<?=$site_info['title']?>做出相应变更；</p>
<p>4、<?=$site_info['title']?>及其关联公司承诺不向其它第三方机构透露会员涉及隐私的信息；</p>
<p>5、会员必须遵守<?=$site_info['title']?>（及合作组织）的使用条款及隐私政策。</p>
<p>四、法律适用、管辖与其他</p>
<p>1、本协议之效力、解释、变更、执行与争议解决均适用中华人民共和国法律，如无相关法律规定的，则应参照通用国际商业惯例和（或）行业惯例。</p>
<p>2、因本协议产生之争议，应依照中华人民共和国法律予以处理。双方对于争议协商不成的，应当提交<?=$site_info['title']?>营业地所在地人民法院诉讼解决。</p>
</div>
</body>
</html>
