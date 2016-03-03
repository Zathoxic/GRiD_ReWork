<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/ico" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <script src="../js/jquery-2.2.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="libs/jquery.slimscroll.min.js"></script>


</head>

<body>


<div class="container">
    <div class="panel-group" id="accordion">
        <!-- START BLOCK : project -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{id}">{title}</a>
                </h4>
            </div>
            <div id="collapse{id}" class="panel-collapse collapse">
                <div class="panel-body">{content}</div>
                <a class="btn btn-primary" href="detail.php?id={id}" role="button">More</a>
            </div>
        </div>
        <!-- END BLOCK : project -->
        <!-- START BLOCK : no_found -->
        {no_found}
        <!-- END BLOCK : no_found -->
    </div>
</div>
</body>

</html>