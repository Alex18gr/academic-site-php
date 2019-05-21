<?php
$title = 'My Academic Page';
include(realpath(__DIR__).'\templates\header.php'); 
?>
  

    <!-- Begin page content -->
    <div class="container">
      <h1>My Academic Home Page</h1>
      <div class="row">
          <div class="col-lg-8 professor-details-page-box">
              <h1>Professor Name</h1>
              <p>Assistant Professor</p>
              <a href="https://www.uom.gr/en/dai">Department of Applied Informatics, University of Macedonia</a>
          </div>
          <div class="col-lg-2">
              <img src="images/img_avatar3.png" alt="professor photo" class="img-fluid rounded">
          </div>
      </div>

    </div>

    <?php include(realpath(__DIR__).'\templates\footer.php'); ?>