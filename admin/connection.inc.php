<?php
session_start();
$con=mysqli_connect("sql206.infinityfree.com","if0_35963361","agtFrQfUUViU","if0_35963361_test56");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/phpeComPart42/');
define('SITE_PATH','http://127.0.0.1/phpeComPart42/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

define('BANNER_SERVER_PATH',SERVER_PATH.'media/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'media/banner/');

define('SHIPROCKET_TOKEN_EMAIL','gmail');
define('SHIPROCKET_TOKEN_PASSWORD','password');

?>