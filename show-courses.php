<?php include('session.php');?><html>

<head>     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Show Courses</title>
</head>

<body>
    <div id="wrapper">
        <?php include('nav.php');  ?>
        <?php include('db-connect.php');?>
        <div id="main">
            <a href="create-course.php">Create Course</a>
            <table>
                <tr>
                    <th>id</th>
                    <th>course</th>
                    <th>edit</th>
                    <th>delete</th>
                    <th>subjects</th>
                </tr>
                <?php
    //put whatever code you want to execute here.
        $sql="SELECT * FROM t_courses";


        $result=mysqli_query($con,$sql);

        while ($row=mysqli_fetch_array($result)){
            echo '<tr>';
            echo '<td>'.$row['course_id'].'</td>';
            echo '<td>'.$row['course_name'].'</td>';
            echo '<td><a href="edit-course.php?course_id='.$row['course_id'].'"><img src="edit.png"></td>';
            echo '<td><a href="delete-course.php?course_id='.$row['course_id'].'"><img src="delete.png"></td>';
            echo '<td>';

            $sql2='SELECT * FROM t_subjects JOIN jnct_courses_subjects ON subject_id=subject_fk WHERE course_fk='.$row['course_id'];

            $result2=mysqli_query($con,$sql2);
            while ($row2=mysqli_fetch_array($result2)){
                echo $row2['subject_name'].', ';
            }





            echo '</td>';
            echo '</tr>';
        }

    ?>
            </table>
        </div>
        <?php mysqli_close($con); ?>

    </div>
</body>

</html>
