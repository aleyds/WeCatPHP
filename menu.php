<?php 

include_once('config.php');
include_once('httpcurl.php');

function MenuJson(){
	
	$myArray=array("button"=>array(array("name"=>MENU_BUTTON1,"sub_button"=>array(array("type"=>"view","name"=>MENU_SUBBUTTON11,"url"=>MENU_TEST_URL),array("type"=>"view","name"=>MENU_SUBBUTTON12,"url"=>MENU_TEST_URL))),
                               array("name"=>MENU_BUTTON2,"sub_button"=>array(array("type"=>"view","name"=>MENU_SUBMENU21,"url"=>MENU_TEST_URL),array("type"=>"view","name"=>MENU_SUBMENU22,"url"=>MENU_TEST_URL),
									array("type"=>"view","name"=>MENU_SUBMENU23,"url"=>MENU_TEST_URL),array("type"=>"view","name"=>MENU_SUBMENU24,"url"=>MENU_TEST_URL),array("type"=>"view","name"=>MENU_SUBMENU25,"url"=>MENU_TEST_URL)))
	));
	$jsonData = json_encode($myArray,JSON_UNESCAPED_UNICODE);
	return $jsonData;
}

$curlPost = new HttpCurl();
$token = $curlPost->getAccessToken();
$MenuPost = sprintf(MENU_CREAT,$token);
$curlPost->HttpPost($MenuPost, MenuJson());

?>