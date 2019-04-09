<?php include('session.php');?><html>

<head>     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Create Subject</title>
    <style>
    </style>
    <meta http-equiv="refresh" content="1;url=show-subjects.php" />
</head>

<body> <div id="wrapper">
   <?php include('nav.php');  ?>
   <?php include('db-connect.php');?><div id="main">

    <?php
        $subject_name=$_POST['subject_name'];


        $sql='INSERT INTO t_subjects (subject_name) VALUES ("'.$subject_name.'")';

        if(mysqli_query($con,$sql)){
           echo 'The subject '.$subject_name.' was successfully created';
       }
       else{
           echo 'Oooppps! subject was not created!';
       }



    ?>

    </div><?php mysqli_close($con); ?>

</div></body>

</html>
