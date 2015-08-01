<?php
include_once "common/base.php";
$pageTitle = "Login";
include_once "common/header.php";

if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username'])):
    ?>

    <p>You are currently <strong>logged in.</strong></p>
    <p><a href="logout.php">Log out</a></p>
    <?php
elseif(!empty($_POST['username']) && !empty($_POST['password'])):
    include_once 'inc/class.users.php';
    $users = new Users($db);
    if($users->accountLogin()===TRUE):
        echo "<meta http-equiv='refresh' content='0;index.php'>";
        exit;
    else:
        ?>

        <div class="container">
            <div class='alert alert-warning'><h2>Login Failed&mdash;Try Again?</h2></div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <form class="form-horizontal" action="login.php" method="POST" name="loginform" id="loginform">
                        <fieldset>
                            <div id="legend">
                                <legend class="">Login</legend>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="username">E-mail</label>
                                <div class="controls">
                                    <input type="email" id="username" name="username" placeholder="" class="form-control input-lg">
                                    <p class="help-block">Please Enter your E-mail</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="password">Password</label>
                                <div class="controls">
                                    <input type="password" id="password" name="password" placeholder="" class="form-control input-lg">
                                    <p class="help-block">Password should be at least 6 characters</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <!-- Button -->
                                <div class="controls">
                                    <button class="btn btn-success" type="submit" name="login" id="login" value="Login">Login</button>
                                </div>
                            </div>
                        </fieldset>

                    </form>

                </div>
            </div>
        </div>
        <p><a href="password.php">Did you forget your password?</a></p>
        <?php
    endif;
else:
    ?>

    <div class="container">
        <div class='alert alert-info'><h2>Your account awaits...</h2></div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <form class="form-horizontal" action="login.php" method="POST" name="loginform" id="loginform">
                    <fieldset>
                        <div id="legend">
                            <legend class="">Login</legend>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="username">E-mail</label>
                            <div class="controls">
                                <input type="email" id="username" name="username" placeholder="" class="form-control input-lg">
                                <p class="help-block">Please Enter your E-mail</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                                <input type="password" id="password" name="password" placeholder="" class="form-control input-lg">
                                <p class="help-block">Password should be at least 6 characters</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success pull-right btn-lg" type="submit" name="login" id="login" value="Login">Login</button>
                            </div>
                        </div>
                    </fieldset>

                </form>

            </div>
        </div>
        <p><a href="password.php">Did you forget your password?</a></p>
    </div>
    <br /><br />
    <?php
endif;
?>

    <div style="clear:both;"></div>
    <br><br>
<?php
include_once "common/footer.php";
?>