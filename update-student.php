<?php include('session.php');?><html>

<head>     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Update Student</title>
    <meta http-equiv="refresh" content="1;url=show-students.php" />
</head>

<body>
    <div id="wrapper">
        <?php include('nav.php');  ?>
        <?php include('db-connect.php');?>
        <div id="main">

            <?php
        $student_id=$_POST['student_id'];
        $forename=$_POST['forename'];
        $surname=$_POST['surname'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];

  ?>

                <!--Upload Student Image-->


                <?php
$target_dir = "student-images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



                    <!--     End Upload student Image-->
                    <?php
        $sql='UPDATE t_students SET forename="'.$forename.'", surname="'.$surname.'",address="'.$address.'",dob="'.$dob.'",phone="'.$phone.'",image="'.$_FILES['fileToUpload']['name'].'" WHERE student_id='.$student_id;

       echo $sql;

       if(mysqli_query($con,$sql)){
           echo 'The student '.$forename.' '.$surname.' was successfully updated';

       }
       else{
           echo 'Oooppps! Student update unsuccesful!';

       }


    ?>


        </div>
        <?php mysqli_close($con); ?>

    </div>
</body>

</html>
