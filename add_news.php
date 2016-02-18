<?php
include("inc/header.php");
include_once("inc/class.TemplatePower.inc.php");

$tpl = new TemplatePower( "tpl/add_news.tpl" );
$tpl->prepare();
$tpl->printToScreen();

 ?>
