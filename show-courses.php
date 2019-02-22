<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Show Courses</title>
</head>

<body>
    <?php include('nav.php');  ?>
    <?php include('db-connect.php');?>
<a href="create-course.php">Create Course</a>
<table>
   <tr>
       <td>id</td>
       <td>course</td>
       <td>edit</td>
       <td>delete</td>
       <td>subjects</td>
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
    <?php mysqli_close($con); ?>

</body>

</html>
