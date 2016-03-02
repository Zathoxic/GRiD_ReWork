<?php
    require 'inc/header.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" type="image/ico" href="favicon.ico">
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

        <script type="text/javascript" src="libs/jquery.slimscroll.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <div class="container">
            <div class="TableContent">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading" style="text-align:center; font-size: 200%;">Projecten</div>

                    <!-- Table -->
                    <table class="table">
                        <tr>
                            <td><span class="badge">+</span>Voorbeeld 1<span class="right"><a href="detail.php/?....">Details</a></span></td>
                        </tr>
                        <tr>
                            <td>Voorbeeld 2<span class="right"><a href="detail.php/?....">Details</a></span></td>
                        </tr>
                        <tr>
                            <td>Voorbeeld 3<span class="right"><a href="detail.php/?....">Details</a></span></td>
                        </tr>
                        <tr>
                            <td>Voorbeeld 4<span class="right"><a href="detail.php/?....">Details</a></span></td>
                        </tr>
                        <tr>
                            <td>Voorbeeld 5<span class="right"><a href="detail.php/?....">Details</a></span></td>
                        </tr>
                        <tr>
                            <td>Voorbeeld 6<span class="right"><a href="detail.php/?....">Details</a></span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>

    </html>