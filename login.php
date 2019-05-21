<?php
session_start();



if (isset($_POST['login'])) {
    require realpath(__DIR__).'\common\config.php';
    require_once('common/validate.php');
    require_once('common/login.php');

    var_dump($_POST);

    $username = clean_input($_POST['username']);
    $password = clean_input($_POST['password']);

    $errors = validate_login_form($username, $password);

    if (empty($errors)) {
        list ($check, $data) = make_login($username, $password);
        if ($check) {
            $_SESSION['user_id'] = $data['user_id'];
            $_SESSION['username'] = $data['username'];

            // TODO comment here
            $_SESSION['agent'] = md5($_SERVER['HTTP_USER_AGENT']);
            var_dump($data);

            header('Location: admin.php');
        }
    } else {
        var_dump($errors);

    }




}

?>
<?php
$title = 'My Academic Page - Management Login';
include(realpath(__DIR__) . '/templates/header.php');
?>
  

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1>My Management Home Page</h1>
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

    <?php include(realpath(__DIR__) . '/templates/footer.php'); ?>