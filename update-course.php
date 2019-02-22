<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Update Course</title>
    <meta http-equiv="refresh" content="1;url=show-courses.php" />
</head>

<body>
    <?php include('nav.php');  ?>
    <?php include('db-connect.php');?>

    <?php
        //assign all post values to variables
        $course_id=$_POST['course_id'];
        $course_name=$_POST['course_name'];
        $todelete=$_POST['todelete'];

        //update t_courses table
        $sql='UPDATE t_courses SET course_name="'.$course_name.'" WHERE course_id='.$course_id;
        //excute query
       if(mysqli_query($con,$sql)){
           echo 'The course '.$course_name.' was successfully updated';
       }
       else{
           echo 'Oooppps! course update unsuccesful!';
       }

        //removal of subjects from course
        for($i=0;$i<count($todelete);$i++){
            $sql='DELETE FROM jnct_courses_subjects WHERE course_fk='.$course_id.' AND subject_fk='.$todelete[$i];

            if(mysqli_query($con,$sql)){
                echo 'subject successfully removed';
            }
            else{
                echo 'subject removal unsuccesful';
            }
        }

    ?>

    <?php mysqli_close($con); ?>

</body>

</html>
