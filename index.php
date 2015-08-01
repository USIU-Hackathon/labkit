<?php
$pageTitle = "Home";
require 'common/header.php';
define('PATH', dirname(__FILE__));

?>

<div class="container">
    <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <p class="lead">Categories</p>
                    <div class="list-group">
                        <a href="#" class="list-group-item">All Projects</a>
                        <a href="#" class="list-group-item">Recent Projects</a>
                        <a href="#" class="list-group-item">Previous Projects</a>
                        <a href="#" class="list-group-item"></a>
                    </div>
                </div>
            </div>
    </div>
</div>



<?php
require 'common/footer.php';
?>