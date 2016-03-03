<?php
session_start();
include("inc/header.php");
include_once("inc/class.TemplatePower.inc.php");

$tpl = new TemplatePower( "tpl/add_news.tpl" );
$tpl->prepare();
$tpl->printToScreen();
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "grid_imo";
// Create connection
$conn = new mysqli($servername, $username, $password , $db_name);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST["submit"])) {
 $title=$_POST['title'];
 $text=$_POST['text'];
 $sql="INSERT INTO news (title, text)VALUES ('$title', '$text')";
 $result=mysqli_query($conn,$sql);
 header("Location: /");
}



 ?>