<?php

if(!isset($page_title))
{
$page_title ="Staff area";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PO - <?php echo $page_title; ?> </title>
<link rel="stylesheet" mdeia="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
</head>
<body>
<header>
<h1>Product Online staff area</h1>
</header>
<navigation>
  <ul>
    <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>

  </ul>
</navigation>
