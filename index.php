<?php
include_once "common/base.php";
$pageTitle = "Home";
require 'common/header.php';
define('PATH', dirname(__FILE__));

?>

<div class="container max">
            <div class="row">
                <div class="col-md-3">
                    <p class="lead">Categories</p>
                    <div class="list-group">
                        <a href="allprojects.php" class="list-group-item">Experiments</a>
                        <a href="#" class="list-group-item">Recent Experiments</a>
                        <a href="#" class="list-group-item">Past Experiments</a>
                        <a href="#" class="list-group-item">Lab Safety</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="images/physics.jpg" alt="">
                                <div class="caption">
                                    <h4><a href="#">Physics</a>
                                    </h4>
                                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
                                <img src="images/chem.jpg" alt="">
                                <div class="caption">
                                    <h4><a href="#">Chemistry</a>
                                    </h4>
                                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>



<?php
require 'common/footer.php';
?>