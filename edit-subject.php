<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Edit subject</title>
</head>

<body> <div id="wrapper">
    <?php include('nav.php');  ?>
    <?php include('db-connect.php');?><div id="main">
    <form action="update-subject.php" method="post">
        <?php
        $subject_id=$_GET['subject_id'];

        $sql="SELECT * FROM t_subjects WHERE subject_id=".$subject_id;

        $result=mysqli_query($con,$sql);

        while ($row=mysqli_fetch_array($result)){
            echo 'subject id: <input type="text" name="subject_id" value="'.$row['subject_id'].'"><br>';
            echo 'subject name: <input type="text" name="subject_name" value="'.$row['subject_name'].'"><br>';
        }

    ?>


            <input type="submit" value="update">
    </form>



    </div><?php mysqli_close($con); ?>

</div></body>

</html>
