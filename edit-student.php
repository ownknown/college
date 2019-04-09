<?php include('session.php');?>
<html>

<head>     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css?v=<?=time();?>" type="text/css" rel="stylesheet">
    <title>Edit Student</title>
</head>

<body>
    <div id="wrapper">

        <?php include('nav.php');  ?>
        <?php include('db-connect.php');  ?>

        <div id="main">
            <form action="update-student.php" method="post" enctype="multipart/form-data">
                <?php
        $student_id=$_GET['student_id'];

        $sql="SELECT * FROM t_students WHERE student_id=".$student_id;

        $result=mysqli_query($con,$sql);

        while ($row=mysqli_fetch_array($result)){
            echo '<label>student id:</label>'.PHP_EOL;
            echo '<input type="text" name="student_id" value="'.$row['student_id'].'"><br>';
            echo '<label>forename:</label>  <input type="text" name="forename" value="'.$row['forename'].'"><br>';
            echo '<label>surname:</label>  <input type="text" name="surname" value="'.$row['surname'].'"><br>';
            echo '<label>address:</label>  <input type="text" name="address" value="'.$row['address'].'"><br>';
            echo '<label>dob:</label>  <input type="text" name="dob" value="'.$row['dob'].'"><br>';
            echo '<label>phone:</label>  <input type="text" name="phone" value="'.$row['phone'].'"><br>';

            echo '<img src="student-images/';
            if($row['image']==''){ echo 'unknown-avatar.png'; } else{ echo $row['image']; }
            echo '">';


        }

    ?>
                    <hr> Student Image Upload:<br>
                    <input type="file" name="fileToUpload" id="fileToUpload">

                    <hr>
                    <input type="submit" value="update">
            </form>


            <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
    ?>
        </div>
    </div>
</body>

</html>
