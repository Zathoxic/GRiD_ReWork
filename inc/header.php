<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/ico" href="favicon.ico">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(function () {
            $('#news_object').slimScroll({
                height: '250px'
            });
        });
    </script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GRID IMO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                    <li><a href="../admin.php">Admin Login</a></li>
                    <li><a href="../projecten.php">Projecten</a></li>
                    <li><a href="../diensten.php">Diensten</a></li>
                    <li><a href="../aanvragen.php">Aanvragen</a></li>
                </ul>
                <?php
               if(!empty( $_SESSION["username"])){


                    echo "<ul class='nav navbar-nav'>
                      <li><a href='../add_news.php'' >Add news<span class='sr-only'>(current)</span></a></li>
                     <li><a href='../add_project.php''>Add project</a></li>

                    </ul>";
                       echo "<p style='float:right; margin:0;'>ingelogd als: ".$_SESSION['username']."</p> <br><a style='float:right' href='logout.php'>logout</a>";
         } ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</body>

</html>