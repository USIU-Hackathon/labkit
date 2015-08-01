<?php
include_once "common/base.php";
$pageTitle = "Reset Your Password";
include_once "common/header.php";
?>

    <!--Reset Password-->
    <div class="container">
        <h2>Reset Your Password</h2>
        <p>Enter the email address you signed up with and we'll send you a link to reset your password.</p>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">

                <form class="form-horizontal" action="db-interaction/users.php" method="post">
                    <fieldset>
                        <div id="legend">
                            <legend class="">Reset Your Password</legend>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <input type="hidden" name="action" value="resetpassword" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="username">E-mail</label>
                            <div class="controls">
                                <input type="email" name="username" id="username" class="form-control input-lg" />
                                <p class="help-block">Please provide your E-mail</p>
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success" type="submit" name="reset" id="reset"
                                        value="Reset Password">Reset Password</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
    <br/><br/>
    <div class="clear-fix"></div>
<?php
include_once "common/footer.php";
?>