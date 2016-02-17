<?php
session_start();
include("inc/header.php");
include_once( "inc/class.TemplatePower.inc.php" );

$tpl = new TemplatePower( "tpl/index.tpl" );
$tpl->prepare();



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grid_imo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row


    while($row = $result->fetch_assoc()) {
        $tpl->newBlock( "News" );
        $title = $row["title"];
        $news_content = $row["text"];
        $tpl->assign( "news_title", "$title" );
        $tpl->assign( "news_content", "$news_content" );
        $tpl->gotoBlock( "_ROOT" );
    }
} else {
    $tpl->newBlock( "News" );
    $tpl->assign( "news_title", "Geen nieuws beschikbaar." );
    $tpl->assign( "news_content", "Er is op dit moment geen nieuws aanwezig." );
    $tpl->gotoBlock( "_ROOT" );
}
$tpl->printToScreen();
$conn->close();
?>
