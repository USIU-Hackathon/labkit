<?php
include_once "common/base.php";

if(isset($_GET['v']) && isset($_GET['e']))
{
    include_once "inc/class.users.php";
    $users = new Users($db);
    $ret = $users->verifyAccount();
}
elseif(isset($_POST['v']))
{
    include_once "inc/class.users.php";
    $users = new Users($db);
    $status = $users->updatePassword() ? "changed" : "failed";
    header("Location: account.php?password=$status");
    exit;
}
else
{
    header("Location: login.php");
    exit;
}

$pageTitle = "Reset Your Password";
include_once "common/header.php";

if(isset($ret[0])):
    echo isset($ret[1]) ? $ret[1] : NULL;

    if($ret[0]<3):
        ?>

        <h2>Reset Your Password</h2>

        <!--        Reset password-->
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <form class="form-horizontal" action="accountverify.php" method="POST">
                        <fieldset>
                            <div id="legend">
                                <legend class="">Reset Your Password</legend>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="password">Choose a New Password</label>
                                <div class="controls">
                                    <input type="password" id="password" name="password" placeholder="" class="form-control input-lg">
                                    <p class="help-block">Password should be at least 6 characters</p>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="password_confirm">Password (Confirm)</label>
                                <div class="controls">
                                    <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="form-control input-lg">
                                    <p class="help-block">Please confirm password</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="hidden" name="v" value="<?php echo $_GET['v'] ?>" />
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Button -->
                                <div class="controls">
                                    <button class="btn btn-success" type="submit" name="verify" id="verify" value="Reset Your Password">Reset Your Password</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>

        <?php
    endif;
else:
    echo '<meta http-equiv="refresh" content="0;index.php">';
endif;

include_once 'common/footer.php';
?>