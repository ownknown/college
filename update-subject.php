<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Update Subject</title>
    <meta http-equiv="refresh" content="1;url=show-subjects.php" />
</head>

<body>
   <?php include('nav.php');  ?>
   <?php include('db-connect.php');?>

    <?php
        $subject_id=$_POST['subject_id'];
        $subject_name=$_POST['subject_name'];

        $sql='UPDATE t_subjects SET subject_name="'.$subject_name.'" WHERE subject_id='.$subject_id;

       if(mysqli_query($con,$sql)){
           echo 'The subject '.$forename.' '.$surname.' was successfully updated';

       }
       else{
           echo 'Oooppps! Subject update unsuccesful!';
       }
    ?>
    <?php mysqli_close($con); ?>

</body>

</html>
