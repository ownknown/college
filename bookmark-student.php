<?php include('session.php'); ?>
<html>

<head>
    <title>bookmark student</title>
    <link href="style1.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="refresh" content="2;URL=show-students.php">
</head>

<body>
    <div id="wrapper">
        <?php include('nav.php');  ?>
        <?php include('db-connect.php');  ?>


        <div class="main">
            <?php
$student_id=$_GET['student_id'];

if(!isset($_SESSION['bookmarks'])){
    $bookmarksArr = array(); //Create the bookmark array
    $_SESSION['bookmarks'] = $bookmarksArr; //Add the array to the Session Array
}

array_push($_SESSION['bookmarks'],$student_id);



$sql = 'SELECT * FROM t_students WHERE student_id='.$student_id;

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);
?>


                <?php
    echo $row['forename'].' '.$row['surname'].'<br/>';
    echo $row['address'].'<br/>';
    echo $row['phone'].'<br/>';
?>
                    <!--Student Image-->
                    <div id="student-image">
                        <img src="student-images/<?php
                        if($row['image']==''){
                            echo 'unknown-avatar.png';
                        } else{
                            echo $row['image'];
                        }

                        ?>" alt="student image"><br/>
                    </div>

        </div>
    </div>


</body>

</html>
