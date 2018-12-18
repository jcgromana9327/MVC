<?php

date_default_timezone_set('UTC');

class Feedbackdisplay {

    //  public $sku = array();
    public function displayFeedback() {
        if (isset($_POST['submit'])) {
            // echo "<pre>";
            $m = new MongoClient();
            $db = $m->sdet_jromana;
            $col = $db->feedback_col;

            $categoryType = $_POST['categoryType'];
            $message = $_POST['message'];
            $satisfied = $_POST['satisfied'];
            $message1 = $_POST['message1'];
            $recommend = $_POST['recommend'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $status = "active";
            $action = "new";
            $date = date('l jS \of F Y h:i:s A');


            $querArr = array(
                "feedback_id" => 1,
                "category" => "$categoryType",
                "message" => "$message",
                "satisfied" => "$satisfied",
                "s_message" => "$message1",
                "recommended" => "$recommend",
                "email" => "$email",
                "contact" => "$contact",
                "date" => "$date",
                "status" => "active",
                "action" => "new",
            );

            if ($action == "new") {
                $col->insert($querArr);
                // echo "<b>Thanks for sending your Feedback</b>";
                echo '<script type="text/javascript">
              // var url: "http://jromana-lion.perfectfitgroup.local/bitbucket/jromana/feedback.php";
              // alert("Thanks for feedback!");
              window.top.location = window.top.location;
              // alert("Thanks for the feedback");
              </script>';
            }
        }
    }

}

?>
