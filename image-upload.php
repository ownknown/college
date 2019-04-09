<?php include('session.php');?><html>

<head>     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style1.css" type="text/css" rel="stylesheet">
    <title>Image Upload</title>
</head>

<body>
    <div id="wrapper">
        <?php include('nav.php');  ?>
        <?php include('db-connect.php');?>
        <div id="main">


            <form action="upload.php" method="post" enctype="multipart/form-data"><br> Select image to upload:<br>
                <input type="file" name="fileToUpload" id="fileToUpload"><br>
                <input type="submit" value="Upload Image" name="submit">
            </form>

        </div>
        <?php mysqli_close($con); ?>

    </div>
</body>

</html>
