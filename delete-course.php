<?php include('session.php');?><html>

<head>     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Delete Course</title>
    <meta http-equiv="refresh" content="1;url=show-courses.php" />
</head>

<body> <div id="wrapper">
    <?php include('nav.php');  ?>
    <?php include('db-connect.php');?><div id="main">

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

    </div><?php mysqli_close($con); ?>

</div></body>

</html>
