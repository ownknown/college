<?php include('session.php');?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Create Subject</title>
</head>

<body>
    <div id="wrapper">
        <?php include('nav.php');  ?>
        <?php include('db-connect.php');?>
        <div id="main">

            <form action="insert-subject.php" method="post">
                subject name: <input type="text" name="subject_name"><br>
                <input type="submit" value="create subject">
            </form>

        </div>
        <?php mysqli_close($con); ?>

    </div>
</body>

</html>
