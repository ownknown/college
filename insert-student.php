<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Create Students</title>
    <style>
    </style>
    <meta http-equiv="refresh" content="1;url=show-students.php" />
</head>

<body> <div id="wrapper">
   <?php include('nav.php');  ?>
   <?php include('db-connect.php');?><div id="main">

    <?php
        $forename=$_POST['forename'];
        $surname=$_POST['surname'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];
        $course_fk=$_POST['course_fk'];

        $sql='INSERT INTO t_students (forename,surname,address,dob,phone,course_fk) VALUES ("'.$forename.'","'.$surname.'","'.$address.'","'.$dob.'","'.$phone.'",'.$course_fk.')';

        if(mysqli_query($con,$sql)){
           echo 'The student '.$forename.' '.$surname.' was successfully created';
       }
       else{
           echo 'Oooppps! Student was not created!';
       }



    ?>

    </div><?php mysqli_close($con); ?>

</div></body>

</html>
