<?php 

define("TOKEN","chenxing");
define("APPID","wxd07ac3b8ad2c014e");//测试账号APPID
define("APPSECRET","aef4f02595998eadbac397ca1236fede"); //测试账号APP secret
define("ACCESS_TOKEN_URL","https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s");
define("MENU_URL","https://api.weixin.qq.com/cgi-bin/menu/create?access_token=%s");
define("MENU_CREAT","https://api.weixin.qq.com/cgi-bin/menu/create?access_token=%s");

    
define("ACCESS_TOKEN_SUCCESS","7200");
define("ACCESS_TOKEN_FAIL","40013");

define("MENU_BUTTON1","关于我们");
define("MENU_SUBBUTTON11","科室简介");
define("MENU_SUBBUTTON12","联系我们");
define("MENU_BUTTON2","最新文章");
define("MENU_SUBMENU21","白血病");
define("MENU_SUBMENU22","淋巴瘤");
define("MENU_SUBMENU23","再生障碍性贫血");
define("MENU_SUBMENU24","MDS");
define("MENU_SUBMENU25","止血和血栓");
define("MENU_TEST_URL","http://www.soso.com/");

?>