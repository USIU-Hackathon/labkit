<?php
include_once "common/base.php";
$pageTitle = "Register";
include_once "common/header.php";

define('PATH', dirname(__FILE__));

if(!empty($_POST['username'])):
    include_once "inc/class.users.php";
    $users = new Users($db);
    echo $users->createAccount();
else:
    ?>
    <!--Registration form-->
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <form class="form-horizontal" action="signup.php" method="POST" id="registerform">
                    <fieldset>
                        <div id="legend">
                            <legend class="">Register</legend>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="username">E-mail</label>
                            <div class="controls">
                                <input type="email" id="username" name="username" placeholder="" class="form-control input-lg">
                                <p class="help-block">Please provide your E-mail</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success pull-right" type="submit" name="signup" id="signup" value="Login">Register</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
    <div style="clear: both;"></div>
    <div class="push"></div>

    <?php
endif;
include_once 'common/footer.php';
?>