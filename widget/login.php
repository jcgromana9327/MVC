
<?php
include_once("config.php");

$results = $db->myaccount_col->find();


if (isset($_POST['submit'])) {   // it checks whether the user clicked login button or not
    $user = $_POST['username'];
    $pass = md5($_POST['password']. "papi");

    foreach ($results as $row) {
        if ($pass == $row['password'] && $user == $row['username']) {

            $_SESSION['user'] = $user;
            // echo $pass;
            echo '<script type="text/javascript">
            window.top.location = window.top.location;
            </script>';
        } else {
            // echo "invalid UserName or Password";
            header("Location: myaccount.php?error=1");
        }
    }
}

if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])) { // If session is not set then redirect to Login Page
    ?>
    <div class="wrapper">
        <form class="form-signin" action= "" method="post">

            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo '<span style="color:red">Invalid username or password</span>';
            }
            ?>

            <h2 class="form-signin-heading">Please login</h2>
            <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
            <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
        </form>
    </div>
    <?php
}
?>
