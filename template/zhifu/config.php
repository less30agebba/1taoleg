<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2019062065620567",

		//商户私钥
		'merchant_private_key' => "MIIEogIBAAKCAQEAwLoqrmW1xvGTMLKquOjOpvbI3j9VntUC1hONcHnb4LN7M9PwxQbEIIndC8VDZ1u9GnencOZ8LXEjPQlUNvveah+HUfFkgML8mBCFimng1IgGvu981r5cv6mg0mah857mG8Mt2oOhZmw2nVqngLq8eIX/IrHiof5EmrzfGmjGlS81Cf+sVLIHgtuUGgyESU/g0E1QOlZW5kzeepIZ3tjbqkmerKSci6vU/8b5Lk9RUDQ78dMH6PRMjerPGuxIHoMwBIvb9gPyoz02ByUVvFzlBQ0dZtivD2ZM69qGvOU9HxyKzgQIlRdqW0M2fCJvpzZoliP5iXB52v3sjjfNxAGqtQIDAQABAoIBAAfekieU15tL+eqfIQFz4BxJL2KDy4c0w2ziV4AkOaovKfSvzsD8yb1aY8A7SclKoaoXAKtHfgKNABdZ7ipglnBW4TujU6s+SvoakplYQWnsM/pP5RUPqNHap0pwDmTYNCUmDxVBErIP8RrzvKsw9MknD4fnI43hyANZevKlHJayyJOl7cWoIF1aR+6EGO11leM/gWNhDRJ7LfujvMXSoVfz9Q/mSpGYE3wZ9HY6Uu5oeC8ugqm2qH0QQ4qqs48WxJv0+FfcZA5+/4nOFxkKerM9GwjlB7FQc4eQN+1YKVs32Cym70brPz8aD/ghGv4lw3LdV+lwGgyXq1+S5r6AXYECgYEA7tsiPnKQrAWazV7yg13pi6sDjvnER3pYfV4TqUT2AtgUqTB3f7zXsUniBQ+Uc2+xaYgW1oOzCpiwfDIlX5eXmTt1tMYWtV2Yq9mOZWhFYQmci1movwliS5b4tMZTJTTJrIWunuA1DRMYvluYO7TTSAKOl+19H7iTB/qWvyqstSkCgYEAzo9wPC1VNLL0gQKoBiC7WIKGJ4eDF+KOKh8CCSIrodqAPvg4WzFNVvhW7r7MW7PMC3Z84KH4uV/rDiH2JTLlHNa2E5eOuuQnmQZmxRNFdajNuOQ8glu3xmaCNChO3pNYSJ1emoKDo9lzpXQ9X0JKe/jprwXyQM/7KMM+fdGrDq0CgYBK/rC8zLnR2RymuNYKGxV2DebbIF7ZVnesPTqNHiLj97Zc/OO4TrGmb50wm5ivufUJPnp1NfqkLBbVl+UWI4Gs0fd+H+gHX/DMnE1SV6/Y7Oyi8C7EdIzRUQCbud1nRDDCI2MVbS4bAdD2C8o7jOX9qRfeaemsaQZ5Ldvg/+QkKQKBgDuY/TwPpF7xJ0S13H7wIL3X4xcyrStODdCvY6n49vfbEFeazL/bCMKIIqT93f6zcLL5++vgL+BkgXBxchCnj51zgdNDTkY0IAyx4SMJfWgGTV0EVUUTa4HN/9FGtALaJoXFCg+wioTS7+AUGsUKXm1IkzwRjiUPHRtUwgoRXbZ9AoGAX+2YQYmILSDt3XCBH80xdKWQ57ZK1EYZ6LG+gObRXCHsPqvozHx15Q9qeOKxbIuXeKTr/HbxoTyBfNMDTueQRxgYKAmunvJWzbNyYOSIcN2RoKEf5e1CbkNROg9sNx2ikHZwxfMZKsnKA2qEyJv7RJRO3y4puVv04Wsc9KGF9L8=",
		
		//异步通知地址
		'notify_url' => "http://www.1taoleg.com/zhifu/notify_url.php",
		
		//同步跳转
		'return_url' => "http://www.1taoleg.com/zhifu/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAldwhloVzaV4yGzz0r0d9te7C81DUR+96A/RxY0W4FcMoPuhutBPVAwZpPQv4UX5+tyQ44kjlwqx79ukqVok4NzoEPuqe4lurlj9niiyI9CdRtyZLtnau5es/n+8YjL+YGEk+TDQqmK8bEY93y6/5PyMWRlpvmeFM/N3PoiUChfji2Nt+mvZRVs8vBuYh808QPGqv0TTj2iwwumLyvMCZYnqItbGKslAT27cq0xMF6mIO6ZN2HpSA7j3H3D0thTfIrZ8DtQqgGVyguWncn4Rnscau2DJjBJccoG2Ws65SU58xn5aijpJWJABZEELLMAnBFdcXPb+4xGATerrsUIDENQIDAQAB",
);