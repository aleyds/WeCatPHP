<?php
/**
  * wechat php test
  */
include_once('wechat.php');
include_once('message.php');

if(false/*!isset($_GET["echostr"])*/)
{
	$wechatObj = new wechatCallbackapiTest();
	$wechatObj->valid();
}
else
{
	$MsgObj = new Message();
	$MsgObj->responseMsg();
}


?>