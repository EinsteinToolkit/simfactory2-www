<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="Robots" content="index,follow" />
<link rel="stylesheet" type="text/css" href="/global/layout.css" />
<link rel="stylesheet" type="text/css" href="/global/style.css" />
<title><?php echo $title; ?></title>
</head>
<body>


<div id="wrap">
<div id="header">
</div><!--header-->
<div id="sidebar">
<p id="swe"><a href="/"><img width=220 src="/global/images/factory.png" alt="swe" /></a></p>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/global/navigation.php'); ?>
</div><!--sidebar-->
<div id="main">
<?php //<p id="logo"><a href="/"><img src="/global/images/logo.png" alt="The Simulation Factory" /></a></p> ?>
<p id="logo"><h1>The Simulation Factory</h1></p>
<?php //include_once($_SERVER['DOCUMENT_ROOT'].'/global/breadcrumbs.php'); ?>
<h2><?php echo $title; ?></h2>
