<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Delete Student</title>
    <meta http-equiv="refresh" content="1;url=show-students.php" />
</head>

<body>
    <?php include('nav.php');  ?>
    <?php include('db-connect.php');?>

    <?php

    $student_id=$_GET['student_id'];

    $sql='DELETE FROM t_students WHERE student_id='.$student_id;

    if(mysqli_query($con,$sql)){
       echo 'The student '.$student_id.' was successfully deleted';

    }
    else{
       echo 'Oooppps! Delete unsuccesful!';
    }
    ?>

    <?php mysqli_close($con); ?>

</body>

</html>
