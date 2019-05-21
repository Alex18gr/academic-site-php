<?php
$title = 'My Academic Page - Contract';
include(realpath(__DIR__).'\templates\header.php'); 
?>
  

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1>My Contract Page</h1>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <h4>University of Macedonia
                    Egnatia 156, Thessaloniki 546 36, Greece</h4>
                <h4>Tel: 2310######</h4>
                <h4>Email: <a href="mailto:main@uom.edu.gr">mail@uom.edu.gr</a></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uom&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
            </div>
        </div>
    </main>


    <?php include(realpath(__DIR__).'\templates\footer.php'); ?>