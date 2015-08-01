<?php
include_once "common/base.php";

if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn']==1):
    $pageTitle = "Your Account";
    include_once "common/header.php";
    include_once 'inc/class.users.php';
    $users = new Users($db);

    if(isset($_GET['email']) && $_GET['email']=="changed")
    {
        echo "<div class='alert alert-success' role='alert'>Your email address has been changed.</div>";
    }
    else if(isset($_GET['email']) && $_GET['email']=="failed")
    {
        echo "<div class='alert alert-danger' role='alert'>There was an error changing your email address.</div>";
    }

    if(isset($_GET['password']) && $_GET['password']=="changed")
    {
        echo "<div class='alert alert-success' role='alert'>Your password has been changed.</div>";
    }
    elseif(isset($_GET['password']) && $_GET['password']=="nomatch")
    {
        echo "<div class='alert alert-danger' role='alert'>The two passwords did not match. Try again!</div>";
    }

    if(isset($_GET['delete']) && $_GET['delete']=="failed")
    {
        echo "<div class='alert alert-danger' role='alert'>There was an error deleting your account.</div>";
    }

    list($userID, $v) = $users->retrieveAccountInfo();
    ?>

    <h2>Your Account</h2>

    <!--    Change Email-->
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <form class="form-horizontal" action="db-interaction/users.php" method="POST">
                    <fieldset>
                        <div id="legend">
                            <legend class="">Change Email</legend>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input type="hidden" name="userid" value="<?php echo $userID ?>" class="form-control input-lg">
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input type="hidden" name="action" value="changeemail" class="form-control input-lg">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="username">Enter New E-mail</label>
                            <div class="controls">
                                <input type="email" id="username" name="username" placeholder="" class="form-control input-lg">
                                <p class="help-block">Change E-mail Address</p>
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success" type="submit" name="change-email-submit"
                                        id="change-email-submit" value="Change Email">Change Email</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>

    <br /><br />

    <!--    Change Password-->
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <form class="form-horizontal" id="change-password-form" action="db-interaction/users.php" method="POST">
                    <fieldset>
                        <div id="legend">
                            <legend class="">Change Password</legend>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input type="hidden" name="user-id" value="<?php echo $userID ?>" />
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input type="hidden" name="v" value="<?php echo $v ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input type="hidden" name="action" value="changepassword" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="password">New Password</label>
                            <div class="controls">
                                <input type="password" name="p" id="new-password"  class="form-control input-lg">
                                <p class="help-block">Change Password</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="password">Repeat New Password</label>
                            <div class="controls">
                                <input type="password" name="r" id="repeat-new-password"  class="form-control input-lg">
                                <p class="help-block">Repeat password</p>
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success" type="submit" name="change-password-submit"
                                        id="change-password-submit" value="Change Password">Change Password</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
    <hr />

    <!--    Delete Account -->
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <form class="form-horizontal" action="deleteaccount.php" id="delete-account-form" method="POST">
                    <fieldset>
                        <div id="legend">
                            <legend class="">Delete Your Account</legend>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input type="hidden" name="user-id" value="<?php echo $userID ?>" class="form-control input-lg">
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-danger" type="submit" name="delete-account-submit" id="delete-account-submit"
                                        value="Delete Account?">Delete Account?</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>

    <?php
else:
    header("Location: index.php");
    exit;
endif;
?>

    <div class="clear:both;"></div>
    <br><br>

<?php
include_once "common/footer.php";
?>