<div class="col-md-5">
    <?php
    require_once 'config.php';
    $result = $db->myaccount_col->find();

    foreach ($result as $res) {
        echo '<form action="myaccount.php" method="post" onsubmit="return validatePassword(this);" id="myForm"><fieldset>
        <legend>Change Password</legend>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Current Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" value="' . $res['password'] . '" disabled >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Retype Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="confirm_password" name="retype" required>
    </div>
  </div>
  <input type="hidden" name="id" value="' . $res['_id'] . '">
  <button class="btn btn-default" type="submit" name="submit" value="submit">Submit changes</button><p class="newline"><p class="newline"></fieldset>
</form>';
    }
    ?>
</div>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $query = array(
        'password' => md5($_POST['password'] . "papi"),
    );


    $db->myaccount_col->update(
            array('_id' => new MongoId($id)), array('$set' => $query)
    );

    // header("Location: myaccount.php");
}
?>
