<?php session_start();

if (!isset($_SESSION['agent']) || ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']))) {
    header('Location: not-authorized.php');
}



$title = 'My Academic Page - Management';
include(realpath(__DIR__) . '/templates/header.php');
?>
  

    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-10">
                <h1>Admin Page, Welcome <?php echo $_SESSION['username'] ?></h1>

                <div class="container" style="border: cornflowerblue 1px solid;
                                      border-radius: 5px;
                                      padding: 10px;">
                    <a href="edit-student-grades.php" class="btn btn-primary">
                        Edit Grades
                    </a>
                    <hr>

                </div>
            </div>
        </div>

    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

    <?php include(realpath(__DIR__) . '/templates/footer.php'); ?>