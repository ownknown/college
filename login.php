<?php
//start session - you won't be able to access $_SESSION variable without this
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

include('db-connect.php');

//Check if a username has been passed
if($username!=''){
    $sql='SELECT * FROM t_users WHERE username LIKE "'.$username.'"';

    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

    //Check login details
    if($username==$row['username'] && $password==$row['password']){
        $_SESSION['login']='logged in';
        echo $_SESSION['login'];

    }
    else{
        echo 'Incorrect Login details - Please try again.';
    }
            $username='';
        $password='';
}
mysqli_close($con);
?>
    <!DOCTYPE html>
    <html>

    <head>     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="style1.css" rel="stylesheet" type="text/css" />
        <?php
        if(isset($_SESSION['login'])){ echo '
            <meta http-equiv="refresh" content="0;URL=show-students.php">'; }
        ?>

    </head>

    <body>

        <form name="login" action="login.php" method="POST">
            <fieldset>
                <legend>Please Login</legend>
                <p><input type="text" name="username" placeholder="username" value="admin" /></p>
                <p><input type="password" name="password" placeholder="password" value="password" /></p>
                <input type="submit" />
            </fieldset>
        </form>


    </body>

    </html>
