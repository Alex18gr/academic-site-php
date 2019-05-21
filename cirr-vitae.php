<?php 
$title = 'My Academic Page - Cirriculum Vitae';
include(realpath(__DIR__).'\templates\header.php'); ?>
  

    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>My Academic Curriculum Vitae Page</h1>
                <hr>
                <div class="cirr-vitae-studies-box">
                    <h3 class="text-primary">Studies</h3>
                    <hr>
                    <ul>
                        <li><b>2005 - 2009</b> - University of Macedonia - Applied Informatics <br> <i>Bachelor Degree</i></li>
                        <li><b>2010 - 2012</b> - International Hellenic University - Cyber Security </li>
                    </ul>
                </div>
                <div class="cirr-vitae-work-box">
                    <h3 style="color: #ef9610;">
                        Work Experience
                    </h3>
                    <hr>
                    <ul>
                        <li><b>2010 - 2014</b> - Software Engineer at Apifon </li>
                        <li><b>2014 - 2016</b> - Web Developer at Intrasoft International</li>
                        <li><b>2016 - 2019</b> - System Designer at Google Amsterdam</li>
                    </ul>
                </div>
            </div>
        </div>

    </main>

<?php include(realpath(__DIR__).'\templates\footer.php'); ?>