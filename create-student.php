<?php include('session.php');?><html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Create Students</title>
    <style>
    </style>
</head>

<body> <div id="wrapper">
   <?php include('nav.php');  ?>
   <?php include('db-connect.php');?><div id="main">

    <form action="insert-student.php" method="post">
        forename: <input type="text" name="forename"><br>
        surname: <input type="text" name="surname"><br>
        address: <input type="text" name="address"><br>
        date of birth: <input type="text" name="dob"><br>
        phone: <input type="text" name="phone"><br>

        <select name="course_fk">
        <?php
        $sql="SELECT * FROM t_courses";
        $result=mysqli_query($con,$sql);

        while ($row=mysqli_fetch_array($result)){
            echo '<option value="'.$row['course_id'].'">'.$row['course_name'].'</option>';
        }
        ?>
        </select>



        <input type="submit" value="Create Student">
    </form>

    </div><?php mysqli_close($con); ?>

</div></body>

</html>
