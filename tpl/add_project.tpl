<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="css/style.css" rel="stylesheet">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>



    <div class="container">
        <div>
            <div class="form-area">
                <form role="form" method="post">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Voeg een project toe</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="title" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" name="text" id="text" placeholder="text" style="height: 450px;"></textarea>

                    </div>

                    <button type="submit" value="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>