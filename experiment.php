<?php
include_once "common/base.php";
$pageTitle = "Experiment";
require 'common/header.php';
define('PATH', dirname(__FILE__));

?>
<div class="container max">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <p class="lead">Categories</p>
                    <div class="list-group">
                        <a href="allprojects.php" class="list-group-item">All Experiments</a>
                        <a href="#" class="list-group-item">Recent Experiments</a>
                        <a href="#" class="list-group-item">Past Experiments</a>
                        <a href="#" class="list-group-item">Lab Safety</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="content">
                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                            <li class="active"><a href="#qst" data-toggle="tab">Question</a></li>
                            <li><a href="#sol" data-toggle="tab">Solution</a></li>
                        </ul>
                        <div id="my-tab-content" class="tab-content">
                            <div class="tab-pane active" id="qst">
                                <h1>Question</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nisi optio quae saepe vero!</p>
                            </div>
                            <div class="tab-pane" id="sol">
                                <h1>Solution</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nisi optio quae saepe vero!</p>


                                <table class="table table-hover table-bordered table-striped">
                                    <caption>Products</caption>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Voltage (V)</th>
                                            <th>Current (A)</th>
                                            <th>Distance (M)</th>
                                            <th>Time (H)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>1.5</td>
                                            <td>0.3</td>
                                            <td>0.4</td>
                                            <td>09.20</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>1.5</td>
                                            <td>0.3</td>
                                            <td>0.4</td>
                                            <td>09.20</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>1.5</td>
                                            <td>0.3</td>
                                            <td>0.4</td>
                                            <td>09.20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            <div class="chart">
                                <figure style="width: 400px; height: 300px;" id="myChart"></figure>
                            </div>
                            </div>
                        </div>
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
