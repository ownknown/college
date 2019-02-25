<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Delete Subject</title>
    <meta http-equiv="refresh" content="1;url=show-subjects.php" />
</head>

<body> <div id="wrapper">
    <?php include('nav.php');  ?>
    <?php include('db-connect.php');?><div id="main">

    <?php
    $subject_id=$_GET['subject_id'];

    $sql='DELETE FROM t_subjects WHERE subject_id='.$subject_id;

    if(mysqli_query($con,$sql)){
       echo 'The subject '.$subject_id.' was successfully deleted';
    }
    else{
       echo 'Oooppps! Delete unsuccesful!';
    }
    ?>

    </div><?php mysqli_close($con); ?>

</div></body>

</html>
