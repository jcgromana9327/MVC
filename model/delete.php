<?php

class DeleteVehicle {

    //  public $sku = array();
    public function validateDelete() {

      // include("../config.php");
      $m = new MongoClient();
      $db = $m->sdet_jromana;


      $id = $_GET['id'];


      $db->ymmse_col->remove(array('_id' => new MongoId($id)));


      // header("Location:myaccount.php");
      echo '<script type="text/javascript">
      history.back();
      </script>';
    }
}
?>
