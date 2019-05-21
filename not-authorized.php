<?php
$title = 'My Academic Page - Management';
include(realpath(__DIR__) . '/templates/header.php');
?>
  

    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <h1>You are not authorized to access this page!</h1>
                <h3><a href="login.php" class="btn btn-primary">Go to login page</a></h3>
            </div>
        </div>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

    <?php include(realpath(__DIR__) . '/templates/footer.php'); ?>