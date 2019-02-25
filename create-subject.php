<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Create Subject</title>
    <style>
    </style>
</head>

<body>
   <?php include('nav.php');  ?>
   <?php include('db-connect.php');?>

    <form action="insert-subject.php" method="post">
        subject name: <input type="text" name="subject_name"><br>
        <input type="submit" value="create subject">
    </form>

    <?php mysqli_close($con); ?>

</body>

</html>
