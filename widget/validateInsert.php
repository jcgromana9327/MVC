<?php

include_once("../config.php");
// $m = new MongoClient();
// $db = $m->mydb;

if (isset($_POST['insert'])) {

    $vehicle = array(
        'year' => $_POST['year'],
        'make' => $_POST['make'],
        'model' => $_POST['model'],
        'price' => $_POST['price'],
        'image' => $_POST['image'],
        'description' => $_POST['desc']
    );


    $errorMessage = '';
    foreach ($vehicle as $key => $value) {
        if (empty($value)) {
            $errorMessage .= $key . ' field is empty<br />';
        }
    }

    if ($errorMessage) {

        echo '<span style="color:red">' . $errorMessage . '</span>';
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {

        $db->ymmse_col->insert($vehicle);

        header("Location: ../myaccount.php");
    }
}
?>
