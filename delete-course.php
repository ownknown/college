<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Delete Course</title>
    <meta http-equiv="refresh" content="1;url=show-courses.php" />
</head>

<body>
    <?php include('nav.php');  ?>
    <?php include('db-connect.php');?>

    <?php
    $course_id=$_GET['course_id'];

    $sql='DELETE FROM t_courses WHERE course_id='.$course_id;

    if(mysqli_query($con,$sql)){
       echo 'The course '.$course_id.' was successfully deleted';
    }
    else{
       echo 'Oooppps! Delete unsuccesful!';
    }
    ?>

    <?php mysqli_close($con); ?>

</body>

</html>
