<?php
//start session - you won't be able to access $_SESSION variable without this
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

//Check if a username has been passed
if($username!=''){
    //Check login details
    if($username=='admin' && $password=='password'){
        $_SESSION['login']='logged in';
        echo $_SESSION['login'];
    }
    else{
        echo 'Incorrect Login details - Please try again.';
    }
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Login</title>
        <link href="style1.css" rel="stylesheet" type="text/css" />
        <?php
            if(isset($_SESSION['login'])){
            echo '  <meta http-equiv="refresh" content="0;URL=show-students.php">';
            }
        ?>


    </head>

    <body>

        <form name="login" action="login.php" method="POST">
            <fieldset>
                <legend>Please Login</legend>
                <p><input type="text" name="username" placeholder="username" value="Owen" /></p>
                <p><input type="password" name="password" placeholder="password" value="password" /></p>
                <input type="submit" />
            </fieldset>
        </form>


    </body>

    </html>
