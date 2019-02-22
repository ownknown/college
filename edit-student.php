<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Edit Student</title>
</head>

<body>
   <?php include('nav.php');  ?>
    <?php
    $con = mysqli_connect("localhost", "root", "root", "DB_COLLEGE");

    if (!$con) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    ?>
    <form action="update-student.php" method="post">
    <?php
        $student_id=$_GET['student_id'];

        $sql="SELECT * FROM t_students WHERE student_id=".$student_id;

        $result=mysqli_query($con,$sql);

        while ($row=mysqli_fetch_array($result)){
            echo 'student id: <input type="text" name="student_id" value="'.$row['student_id'].'"><br>';
            echo 'forename: <input type="text" name="forename" value="'.$row['forename'].'"><br>';
            echo 'surname: <input type="text" name="surname" value="'.$row['surname'].'"><br>';
            echo 'address: <input type="text" name="address" value="'.$row['address'].'"><br>';
            echo 'dob: <input type="text" name="dob" value="'.$row['dob'].'"><br>';
            echo 'phone: <input type="text" name="phone" value="'.$row['phone'].'"><br>';
        }

    ?>
    <input type="submit" value="update">
    </form>



    <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
    ?>

</body>

</html>
