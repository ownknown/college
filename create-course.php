<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Create Courses</title>
    <style>
    </style>
</head>

<body>
   <?php include('nav.php');  ?>
   <?php include('db-connect.php');?>

    <form action="insert-course.php" method="post">
        course name: <input type="text" name="course_name"><br>
        <input type="submit" value="create course">
    </form>

    <?php mysqli_close($con); ?>

</body>

</html>
