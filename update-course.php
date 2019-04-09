<?php include('session.php');?><html>

<head>     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Update Course</title>
    <meta http-equiv="refresh" content="1;url=show-courses.php" />
</head>

<body> <div id="wrapper">
    <?php include('nav.php');  ?>
    <?php include('db-connect.php');?><div id="main">

    <?php
        //assign all post values to variables
        $course_id=$_POST['course_id'];
        $course_name=$_POST['course_name'];
        $todelete=$_POST['todelete'];
        $toadd=$_POST['toadd'];

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
                echo '<br>subject successfully removed';
            }
            else{
                echo '<br>subject removal unsuccesful';
            }
        }

        //addition of subjects to course
        for($i=0;$i<count($toadd);$i++){
            $sql='INSERT INTO jnct_courses_subjects (course_fk,subject_fk) VALUES ('.$course_id.','.$toadd[$i].')';

            if(mysqli_query($con,$sql)){
                echo '<br>subject successfully added';
            }
            else{
                echo '<br>subject add unsuccesful';
            }
        }


    ?>

    </div><?php mysqli_close($con); ?>

</div></body>

</html>
