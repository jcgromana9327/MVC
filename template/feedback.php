<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>MBP CARS</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/thumbnail-gallery.css" rel="stylesheet">
        <script type="text/javascript" src="js/myJs.js"></script>
    </head>

    <body>
        <!-- Header -->
        <?php require_once 'widget/header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <?php require_once 'widget/feedbackLeftNav.php'; ?>
                    <!-- Vehicle Selector -->
                </div>

                <div class="col-md-10">
                    <?php
                    require_once 'widget/search.php';
                    require_once 'widget/feedback.php';
                    ?> </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <div class="container">
        <hr>
        <!-- Footer -->
        <?php require_once 'widget/footer.php'; ?> </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
