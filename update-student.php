<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Update Student</title>
    <meta http-equiv="refresh" content="1;url=show-students.php" />
</head>

<body>
   <?php include('nav.php');  ?>
   <?php include('db-connect.php');?>

    <?php
        $student_id=$_POST['student_id'];
        $forename=$_POST['forename'];
        $surname=$_POST['surname'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];

        $sql='UPDATE t_students SET forename="'.$forename.'", surname="'.$surname.'",address="'.$address.'",dob="'.$dob.'",phone="'.$phone.'" WHERE student_id='.$student_id;

       $sql;

       if(mysqli_query($con,$sql)){
           echo 'The student '.$forename.' '.$surname.' was successfully updated';

       }
       else{
           echo 'Oooppps! Student update unsuccesful!';

       }


    ?>


    <?php mysqli_close($con); ?>

</body>

</html>
