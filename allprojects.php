<?php
include_once "common/base.php";
$pageTitle = "All Experiments";
require 'common/header.php';
define('PATH', dirname(__FILE__));

?>
<div class="container min">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <p class="lead">Categories</p>
                    <div class="list-group">
                        <a href="allprojects.php" class="list-group-item">All Experiments</a>
                        <a href="#" class="list-group-item">Recent Experiments</a>
                        <a href="#" class="list-group-item">Previous Experiments</a>
                        <a href="#" class="list-group-item">Lab Safety</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <a href="experiment.php">
                            <div class="col-md-4">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Experiment One</div>
                                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipis</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="experiment.php">
                            <div class="col-md-4">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Experiment One</div>
                                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipis</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="experiment.php">
                            <div class="col-md-4">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Experiment One</div>
                                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipis</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <a href="experiment.php">
                            <div class="col-md-4">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Experiment One</div>
                                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipis</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="experiment.php">
                            <div class="col-md-4">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Experiment One</div>
                                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipis</div>
                                    </div>
                                </div>
                            </div>
                        </a>
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
