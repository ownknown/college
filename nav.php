<nav>
    <a href="show-students.php">Students</a>
    <a href="show-courses.php">Courses</a>
    <a href="show-subjects.php">Subjects</a> ::
    <a href="get-code.php?filename=<?php
$currentFile = $_SERVER['PHP_SELF'];
$parts = Explode('/', $currentFile);
echo $parts[count($parts) - 1]; //Get the current filename and pass it to the Get Code Page
?>">Code</a>
</nav>
