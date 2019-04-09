<?php include('session.php');?><html>

<head>     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Edit Course</title>
</head>

<body>
    <div id="wrapper">
        <?php include('nav.php');  ?>
        <?php include('db-connect.php');?>
        <div id="main">
            <form action="update-course.php" method="post">
                <?php
        $course_id=$_GET['course_id'];

        $sql="SELECT * FROM t_courses WHERE course_id=".$course_id;

        $result=mysqli_query($con,$sql);

        while ($row=mysqli_fetch_array($result)){
            echo 'course id: <input type="text" name="course_id" value="'.$row['course_id'].'"><br>';
            echo 'course name: <input type="text" name="course_name" value="'.$row['course_name'].'"><br>';
        }

    ?>
                    <!--Subject Removal-->
                    <fieldset id="subfield">
                        <legend>Subject Removal</legend>
                        <?php
        $sql2='SELECT * FROM t_subjects JOIN jnct_courses_subjects ON subject_id=subject_fk WHERE course_fk='.$course_id;


            $result2=mysqli_query($con,$sql2);

            while ($row2=mysqli_fetch_array($result2)){
                echo '<input type="checkbox" value="'.$row2['subject_id'].'" name="todelete[]">'.$row2['subject_name'].'<br> ';
            }
    ?>
                    </fieldset>

                    <!--Subject Addition-->
                    <fieldset id="subfield">
                        <legend>Subject Add</legend>
                        <?php
        $sql3='SELECT subject_id, subject_name FROM t_subjects WHERE subject_id NOT IN (SELECT subject_fk FROM jnct_courses_subjects WHERE course_fk='.$course_id.')';


            $result3=mysqli_query($con,$sql3);

            while ($row3=mysqli_fetch_array($result3)){
                echo '<input type="checkbox" value="'.$row3['subject_id'].'" name="toadd[]">'.$row3['subject_name'].'<br> ';

            }

    ?>

                    </fieldset>
                    <input type="submit" value="update">
            </form>

        </div>
        <?php mysqli_close($con); ?>
    </div>
</body>

</html>
