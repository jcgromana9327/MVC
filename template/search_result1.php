<?php
session_start();
require_once 'config.php';
require_once 'func.php';
?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#wait_1').hide();
                $('#drop_1').change(function () {
                    $('#wait_1').show();
                    $('#result_1').hide();
                    $.get("func.php", {
                        func: "drop_1",
                        drop_var: $('#drop_1').val()
                    }, function (response) {
                        $('#result_1').fadeOut();
                        setTimeout("finishAjax('result_1', '" + escape(response) + "')", 400);
                    });
                    return false;
                });
                $('#wait_2').hide();
                $('#drop_2').change(function () {
                    $('#wait_2').show();
                    $('#result_2').hide();
                    $.get("func.php", {
                        func: "drop_2",
                        drop_var: $('#drop_2').val()
                    }, function (response) {
                        $('#result_2').fadeOut();
                        setTimeout("finishAjax2('result_2', '" + escape(response) + "')", 400);
                    });
                    return false;
                });
            });

            function finishAjax(id, response) {
                $('#wait_1').hide();
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }
            function finishAjax2(id, response) {
                $('#wait_2').hide();
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }

            function finishAjax_tier_three(id, response) {
                $('#wait_2').hide();
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }
            function finishAjax_tier_four(id, response) {
                $('#wait_3').hide();
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }
        </script>
    </head>

    <body>
        <!-- Header -->
        <?php require_once 'widget/header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <!-- Vehicle Selector -->
                    <?php require_once 'widget/vehicleSelector.php'; ?> </div>
                <!-- Thumbmail -->
                <div class="col-md-10">
                    <?php
                    require_once 'widget/search.php';
                    $databaseObj = new Database();
                    $databaseObj->connectDb();
                    // $databaseObj->searchKeywordWildCardMultipleFieldsCaseIns($_GET["keyword"]);
                    $databaseObj->searchKeywordWildCardMultipleFields($_GET["drop_1"], $_GET["drop_2"], $_GET["drop_3"]);
                    ?>
                </div>
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
