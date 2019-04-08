<?php include('session.php');?>
<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Show Students</title>
</head>

<body>
    <div id="wrapper">
        <?php include('nav.php');  ?>
        <?php include('db-connect.php');?>
        <div id="main">

            <a href="create-student.php">Create Student</a>
            <table>
                <tr>
                    <th>id</th>
                    <th>forename</th>
                    <th>surname</th>
                    <th>address</th>
                    <th>dob</th>
                    <th>phone</th>
                    <th>image</th>
                    <th>mark</th>
                    <th>edit</th>
                    <th>delete</th>
                </tr>
                <?php
    //put whatever code you want to execute here.
        $sql="SELECT * FROM t_students";


        $result=mysqli_query($con,$sql);

        while ($row=mysqli_fetch_array($result)){
            echo '<tr>';
            echo '<td>'.$row['student_id'].'</td>';
            echo '<td>'.$row['forename'].'</td>';
            echo '<td>'.$row['surname'].'</td>';
            echo '<td>'.$row['address'].'</td>';
            echo '<td>'.$row['dob'].'</td>';
            echo '<td>'.$row['phone'].'</td>';
            echo '<td><img id="student-image" src="student-images/';
            //test for image/avatar
            if($row['image']==''){ echo 'unknown-avatar.png'; } else{ echo $row['image']; }
            echo '"></td>';

            echo '<td><a href="bookmark-student.php?student_id='. $row['student_id'].'"><img src="bookmark.png"/></a></td>';

            echo '<td><a href="edit-student.php?student_id='.$row['student_id'].'"><img src="edit.png"></td>';
            echo '<td><a href="delete-student.php?student_id='.$row['student_id'].'"><img src="delete.png"></td>';
            echo '</tr>';
        }

    ?>
            </table>
        </div>
        <?php mysqli_close($con); ?>

    </div>
</body>

</html>
