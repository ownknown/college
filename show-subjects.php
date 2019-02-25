<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Show Subjects</title>
</head>

<body>
    <?php include('nav.php');  ?>
    <?php include('db-connect.php');?>
<a href="create-subject.php">Create Subject</a>
<table>
   <tr>
       <td>id</td>
       <td>subject</td>
       <td>edit</td>
       <td>delete</td>
   </tr>
    <?php
    //put whatever code you want to execute here.
        $sql="SELECT * FROM t_subjects";


        $result=mysqli_query($con,$sql);

        while ($row=mysqli_fetch_array($result)){
            echo '<tr>';
            echo '<td>'.$row['subject_id'].'</td>';
            echo '<td>'.$row['subject_name'].'</td>';
            echo '<td><a href="edit-subject.php?subject_id='.$row['subject_id'].'"><img src="edit.png"></td>';
            echo '<td><a href="delete-subject.php?subject_id='.$row['subject_id'].'"><img src="delete.png"></td>';
            echo '</tr>';
        }

    ?>
    </table>
    <?php mysqli_close($con); ?>

</body>

</html>
