<?php

define("PRIVATE_PATH", dirname(__FILE__));
//dirname — Returns a parent directory's path
//output of this dirname(__FILE__)
//C:\xampp\htdocs\PHP-works\productsOnline\private
define("PROJECT_PATH", dirname(PRIVATE_PATH));
//echo PROJECT_PATH;
//output of this C:\xampp\htdocs\PHP-works\productsOnline
define("PUBLIC_PATH", PROJECT_PATH . '/public');
//echo PUBLIC_PATH;
//output is C:\xampp\htdocs\PHP-works\productsOnline/public

define("SHARED_PATH", PRIVATE_PATH . '/shared');
//echo SHARED_PATH;
//output is C:\xampp\htdocs\PHP-works\productsOnline\private/shared

$public_end = strpos($_SERVER['SCRIPT_NAME'] , '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT" , $doc_root);

//echo WWW_ROOT;
//echo $public_end;
require_once('functions.php');



 ?>
