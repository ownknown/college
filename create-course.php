<?php include('session.php');?><html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Create Courses</title>
    <style>


    </style>
</head>

<body>
    <div id="wrapper">
        <?php include('nav.php');  ?>
        <?php include('db-connect.php');?><div id="main">

        <form action="insert-course.php" method="post">
            course name: <input type="text" name="course_name"><br>
            <input type="submit" value="create course">
        </form>

        </div><?php mysqli_close($con); ?>


    </div>
</body>

</html>
