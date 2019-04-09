<?php include('session.php');?><html>

<head>     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Show Subjects</title>
</head>

<body>
    <div id="wrapper">
        <?php include('nav.php');  ?>
        <?php include('db-connect.php');?>
        <div id="main">
            <a href="create-subject.php">Create Subject</a>
            <table>
                <tr>
                    <th>id</th>
                    <th>subject</th>
                    <th>edit</th>
                    <th>delete</th>
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
        </div>
        <?php mysqli_close($con); ?>

    </div>
</body>

</html>
