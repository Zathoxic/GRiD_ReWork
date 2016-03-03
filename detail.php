<?php
session_start();
include("inc/header.php");
include_once("inc/class.TemplatePower.inc.php");

$tpl = new TemplatePower( "tpl/detail.tpl" );
$tpl->prepare();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grid_imo";
$id = $_GET["id"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM projects WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


    while($row = $result->fetch_assoc()) {
        $tpl->newBlock( "project" );
        $title = $row["title"];
        $content = $row["content"];
        $tpl->assign( "title", "$title" );
        $tpl->assign( "content", "$content" );
        $tpl->assign("id", "$id");
        $tpl->gotoBlock( "_ROOT" );
    }
}
$tpl->printToScreen();
$conn->close();
?>
