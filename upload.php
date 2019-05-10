<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 22-10-2018
 * Time: 10:45
 */


if(isset($_GET['email_id']) && !empty($_GET['email_id']) || isset($_GET['fname']) && !empty($_GET['fname']) || isset($_GET['lname']) && !empty($_GET['lname']) ){
    extract($_GET);
}
require 'include/dbconn.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--css file link-->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/alertifyjs/css/alertify.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!--js file link-->
    <!--<script src="assets/js/bootstrap/bootstrap.js"></script>-->
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
                    <label for="">Email ID:</label>
                    <label for=""><?php echo isset($email_id) ? $email_id : ''; ?></label>
                    <input type="hidden" name="email_id" value="<?php echo isset($email_id) ? $email_id : ''; ?>" id="email_id">
                </div>

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
                    <label for="uploads">Browse:</label>
                    <input type="file" class="form-control" name="uploads" id="uploads" accept="image/*">
                </div>

                <div class="form-group">
                    <label for="caption">Caption:</label>
                    <input type="text" class="form-control" name="caption" id="caption">
                </div>

                <input type="hidden" name="type" value="UserData">
                <button type="submit" class="btn btn-primary">Upload</button>

            </form>
        </div>
    </div>
</div>

</body>
</html>

