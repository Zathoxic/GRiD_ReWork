<?php
session_start();
include("inc/header.php");
include_once("inc/class.TemplatePower.inc.php");

$tpl = new TemplatePower( "tpl/add_project.tpl" );
$tpl->prepare();

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
    $summary=$_POST['summary'];
    $summary = mysqli_real_escape_string($conn,$summary);
    $text = mysqli_real_escape_string($conn,$text);

    $sql="INSERT INTO projects (title, content,summary)VALUES ('$title', '$text','$summary')";
    mysqli_query($conn,$sql);
    header("Location: /");
}
$sql2 = "SELECT * FROM projects";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    // output data of each row


    while($row = $result->fetch_assoc()) {
        $enabled = $row["enabled"];
        if (isset($_POST["submit2"])) {
            $id = $row['id'];
            if (isset($_POST['project'.$id])) {
                $sql = "UPDATE projects SET enabled='1' WHERE id=$id";
                // Prepare statement
                $stmt = $conn->prepare($sql);
                $enabled = 1;
                // execute the query
                $stmt->execute();

            }else{
                $sql = "UPDATE projects SET enabled='0' WHERE id=$id";
                // Prepare statement
                $stmt = $conn->prepare($sql);
                $enabled = 0;
                // execute the query
                $stmt->execute();

            }
        }

        $tpl->newBlock( "project" );
        $title = $row["title"];
        $content = $row["content"];
        $id = $row["id"];
        $tpl->assign( "enabled", "$enabled" );
        $tpl->assign( "title", "$title" );
        $tpl->assign( "content", "$content" );
        $tpl->assign("id", "$id");
        if ($enabled == 1){
            $tpl->assign("checked", "checked");
        }else{
            $tpl->assign("checked", "");
        }

        $tpl->gotoBlock( "_ROOT" );

    }
}
$tpl->printToScreen();
$conn->close();
