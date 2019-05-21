<?php
$title = 'My Academic Page - Teaching';
include(realpath(__DIR__).'\templates\header.php'); 
?>
  

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1>My Teaching Page</h1>
        <hr>
        <div class="row">
            <div class="col-lg-10 teaching-box">
                <h1>Lecturing</h1>
                <ul>
                    <li><a href="#">Introduction to OOP</a></li>
                    <li><a href="#">Java Web Technologies</a></li>
                    <li><a href="#">Web Programming</a></li>
                    <li><a href="#">Introduction to Web Security</a></li>
                </ul>

            </div>
            <div class="col-lg-10 teaching-box">
                <h1>Teaching Assistant</h1>
                <ul>
                    <li><a href="#">Web Services</a></li>
                    <li><a href="#">Data Structures</a></li>
                </ul>
            </div>
        </div>
    </main>


    <?php include(realpath(__DIR__).'\templates\footer.php'); ?>