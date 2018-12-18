<?php

class UpdateVehicle {

    //  public $sku = array();
    public function validateUpdate() {

      $m = new MongoClient();
      $db = $m->sdet_jromana;

        if (isset($_POST['update'])) {
          $id = $_POST['id'];
          $vehicle = array(
            'year' => intval($_POST['year']),
            'make' => $_POST['make'],
            'model' => $_POST['model'],
            'price' => $_POST['price'],
            'image' => $_POST['image'],
            'description' => $_POST['desc']
          );


          $db->ymmse_col->update(
              array('_id' => new MongoId($id)), array('$set' => $vehicle)
            );

            // header("Location: myaccount.php");
            echo '<script type="text/javascript">
            window.top.location = window.top.location;
            </script>';
        }
    }
}
?>
