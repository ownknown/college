<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Create Course</title>
    <style>
    </style>
    <meta http-equiv="refresh" content="1;url=show-courses.php" />
</head>

<body>
   <?php include('nav.php');  ?>
   <?php include('db-connect.php');?>

    <?php
        $course_name=$_POST['course_name'];


        $sql='INSERT INTO t_courses (course_name) VALUES ("'.$course_name.'")';

        if(mysqli_query($con,$sql)){
           echo 'The course '.$course_name.' was successfully created';
       }
       else{
           echo 'Oooppps! course was not created!';
       }



    ?>

    <?php mysqli_close($con); ?>

</body>

</html>
