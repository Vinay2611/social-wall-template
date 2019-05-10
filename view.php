<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 22-10-2018
 * Time: 17:45
 */

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/alertifyjs/css/alertify.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="assets/js/bootstrap/bootstrap.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/alertifyjs/alertify.min.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>

    </script>
    <title>Social Wall</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="upload.php">Upload</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view.php">Communication</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6 centerdiv" style="margin-left: auto;margin-right: auto;">
            <form action="" method="post" id="upload_data" enctype="multipart/form-data" class="border-class">

                <div class="form-group">
                    <label for="">First Name:</label>
                    <label for=""><?php echo isset($fname) ? $fname : ''; ?></label>
                    <input type="hidden" name="fname" value="<?php echo isset($fname) ? $fname : ''; ?>" id="fname">
                </div>

                <div class="form-group">
                    <label for="">Last Name:</label>
                    <label for=""><?php echo isset($lname) ? $lname : ''; ?></label>
                    <input type="hidden" name="lname" value="<?php echo isset($lname) ? $lname : ''; ?>" id="lname">
                </div>

                <div class="form-group">
                    <img src="uploads/Desert.jpg" alt="" width="150px" height="150px">
                </div>

                <div class="form-group">
                    <label for="caption">Comments:</label>
                    <textarea name="" id="" cols="30" class="form-control" rows="4"></textarea>
                    <!--<input type="text" class="form-control" name="comments" id="comments">-->
                </div>

                <input type="hidden" name="type" value="UserData">
                <button type="submit" class="btn btn-primary">Upload</button>

            </form>
        </div>
    </div>
</div>

</body>
</html>


