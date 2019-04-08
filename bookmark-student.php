<?php require_once('session.php'); ?>
<html>

<head>
    <title>bookmark student</title>
    <link href="style1.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="refresh" content="2;URL=show-students.php">
</head>

<body>
    <div id="wrapper">
        <?php require_once('nav.php');  ?>
        <?php require_once('db-connect.php');  ?>


        <div class="main">



            <?php

$student_id=$_GET['student_id'];

if(!isset($_SESSION['bookmarks'])){
    $bookmarksArr = array(); //Create the bookmark array

    $_SESSION['bookmarks'] = $bookmarksArr; //Add the array to the Session Array
}

array_push($_SESSION['bookmarks'],$student_id);



$sql = 'SELECT * FROM t_students,t_courses WHERE student_id='.$student_id.' AND course_fk=course_id';
$result = mysqli_query($con,$sql);

$row1 = mysqli_fetch_array($result);
?>


                <?php
    echo $row1['forename'].' '.$row1['surname'].'<br/>';
    echo $row1['address'].'<br/>';
    echo $row1['phone'].'<br/>';
    echo $row1['course_name'].'<br/>';
?>
                    <!--Student Image-->
                    <div class="tile">
                        <img src="student-images/<?php echo $row1['image'];?>" alt="student image" /><br/>
                    </div>

        </div>
    </div>


</body>

</html>
