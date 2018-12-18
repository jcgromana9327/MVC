<?php

class ChangePassword {

    //  public $sku = array();
    public function validatePassword() {

      // require_once './config.php';
      $m = new MongoClient();
      $db = $m->sdet_jromana;
      $result = $db->myaccount_col->find();
      if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $query = array(
          'password' => md5($_POST['password'] . "papi"),
        );


        $db->myaccount_col->update(
            array('_id' => new MongoId($id)), array('$set' => $query)
          );

          // header("Location: myaccount.php");
          echo '<script type="text/javascript">
          window.top.location = window.top.location;
          </script>';
      }
    }
}
?>
