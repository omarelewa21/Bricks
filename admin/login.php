<?php
#database connection
session_start();
include ('../config/connection.php');

if($_POST){
    $q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
    $r = mysqli_query($db_connect,$q);
    if(mysqli_num_rows($r)==1){
        $_SESSION['username']=$_POST['email'];
        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php include('config/css.php'); ?>
    <?php include('config/fonts.php'); ?>


    <title>Admin Login</title>


</head>

<body>


    <div class="body-container">


        <div class="container ">
            <div class="jumbotron">
                <div class="container">
                    <h1>Welcome to the admin panel </h1>
                    <h2>Please Login to access the panel </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">


                    <div class="panel bg-info">
                        <div class="panel-heading ">
                            <h2>Login</h2>
                        </div>
                        <div class="panel-body">


                            <form role="form" action="login.php" method="post">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>


                                <button type="submit" class="btn btn-info">Log in</button>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>

        </div>



    </div>




</body>

</html>

<?php include('config/scripts.php');?>
