<?php
 session_start();
 include("inc/header.php");
 include_once( "inc/class.TemplatePower.inc.php" );
 $tpl = new TemplatePower( "tpl/admin.tpl" );
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
     $myusername=$_POST['username'];
     $mypassword=$_POST['password'];
     $mypassword=md5($mypassword);
     $sql="SELECT * FROM `login` WHERE PASSWORD = '$mypassword' and username = '$myusername'";
     $result=mysqli_query($conn,$sql);

 $count=$result->num_rows;

 // If result matched $myusername and $mypassword, table row must be 1 row
 if($count==1){
     $_SESSION["username"] = $myusername;
     header("location:index.php");
 }
 else {
 echo "Wrong Username or Password";
 }
 }

 ?>
