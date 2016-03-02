<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css" media="screen" title="no title" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php
include("inc/header.php");
include_once( "inc/class.TemplatePower.inc.php" );
    ?>
        <div class="container">
            <div class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!--   <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div> -->
                        </div>
                        <form role="form" action="" method="post">
                            <div class="col-lg-6">
                                <div class="well well-sm"><strong><i style="text-align:left;" class="glyphicon glyphicon-ok form-control-feedback"></i> Required Field</strong></div>
                                <div class="form-group">
                                    <label for="InputName">Your FirstName</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter FirstName" required>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                                </div>
                                <div class="form-group">
                                    <label for="InputName">Your LastName</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter LastName" required>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">Your Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                                </div>
                                <div class="form-group">
                                    <label for="InputEmail">Your Phone Number</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Enter Phone number" required>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                                </div>
                                <div class="form-group">
                                    <label for="InputMessage">Message</label>
                                    <div class="input-group">
                                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
                                </div>
                                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
                            </div>
                        </form>
                        <hr class="featurette-divider hidden-lg">
                        <div class="col-lg-5 col-md-push-1">
                            <address>
    <h3>Office Location</h3>
    <p class="lead"><a href="https://www.google.com/maps/place/Burgemeester+van+der+Schansstraat,+4281+Andel,+Nederland/@51.7829037,5.056766,17z/data=!3m1!4b1!4m2!3m1!1s0x47c68e617336cb07:0xc43f5f209c810763">GRiD-imo<br>
Andel, Burgemeester van der Schansstraat 36</a><br>
      Phone: +31 6 53 25 11 10<br>
    </p>
    </address>
                        </div>
                    </div>

                </div>
            </div>
        </div>










        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "sakulkh@gmail.com";
 
    $email_subject = "Contact form from GRiD-IMO.nl";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
       !isset($_POST['telephone']) ||
 
        !isset($_POST['InputMessage'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['InputMessage']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
mail($email_to, $email_subject, $email_message, $headers);  
 



?>
    <!-- include your own success html here -->



    <?php echo "<div class='alert alert-success'><strong><span class='glyphicon glyphicon-send'></span> Success! Message sent. (If form ok!)</strong></div>" ?>


        <?php
 
}
 
?>