<!DOCTYPE html>
<html lang="en">

<head>


    <meta content="utf-8" http-equiv="encoding">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> LabKit | <?php echo $pageTitle ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/xcharts.min.css">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
<!--    <script type="text/javascript" src="/assets/script/canvasjs.min.js"></script>-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">labKit</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Courses</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <?php
                if(isset($_SESSION['LoggedIn']) && isset($_SESSION['Username']) && $_SESSION['LoggedIn']==1):
                    ?>
                    <li>
                        <a href="account.php" role="button" data-toggle="modal"> Your Account <i class="glyphicon glyphicon-user"></i></a>
                    </li>
                    <li>
                        <a href="logout.php" role="button" data-toggle="modal"> Log Out <i class="glyphicon glyphicon-off"></i></a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="login.php" role="button" data-toggle="modal">Login</a>
                    </li>
                    <li>
                        <a href="signup.php" role="button" data-toggle="modal">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
