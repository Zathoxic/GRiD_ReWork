<?php
session_start();
include("inc/header.php");
include_once("inc/class.TemplatePower.inc.php");
$tpl = new TemplatePower( "tpl/manage_project.tpl" );
$tpl->prepare();
$tpl->printToScreen();