<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Show Students</title>
</head>

<body>
    <?php include('nav.php');  ?>
    <?php include('db-connect.php');?>

<a href="create-student.php">Create Student</a>
<table>
   <tr>
       <td>id</td>
       <td>forename</td>
       <td>surname</td>
       <td>address</td>
       <td>dob</td>
       <td>phone</td>
       <td>edit</td>
       <td>delete</td>
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
            echo '<td><a href="edit-student.php?student_id='.$row['student_id'].'"><img src="edit.png"></td>';
            echo '<td><a href="delete-student.php?student_id='.$row['student_id'].'"><img src="delete.png"></td>';
            echo '</tr>';
        }

    ?>
    </table>
    <?php mysqli_close($con); ?>

</body>

</html>
