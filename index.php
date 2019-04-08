<?php include('session.php');?>
<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Homepage</title>
</head>

<body>
    <div id="wrapper">
        <?php include('nav.php');  ?>
        <?php include('db-connect.php');?>

        <div id="main">
            <?php
    $sql="SELECT COUNT(*) AS studentCount FROM t_students";

    $result=mysqli_query($con,$sql);

    $rowStudents = mysqli_fetch_array($result);

    $sql="SELECT COUNT(*) AS courseCount FROM t_courses";

    $result=mysqli_query($con,$sql);

    $rowCourses = mysqli_fetch_array($result);

 ?>
                <p>
                    Totals number of students:
                    <?php
    echo $rowStudents['studentCount'];?><br> Totals number of courses:
                    <?php
    echo $rowCourses['courseCount'];?>

                </p>
        </div>
    </div>
</body>

</html>
