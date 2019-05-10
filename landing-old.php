<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 12-11-2018
 * Time: 10:54
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <title>social wall</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="assets/js/custom.js"></script>
    <style>
        .center {
            margin: auto;
            width: 60%;
            border: 1px solid lightgrey;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="center" style="margin-top: 15%">
            <form class="form-horizontal" method="" action="" id="userInsert">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="first_name">First Name:</label>
                    <div class="col-sm-10">
                        <input type="type" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="last_name">Last Name:</label>
                    <div class="col-sm-10">
                        <input type="type" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email_id">Email:</label>
                    <div class="col-sm-10">
                        <input type="type" class="form-control" id="email_id" placeholder="Enter Email" name="email_id" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-4">
                        <div class="checkbox">
                            <label><input type="checkbox" id="i_agree" name="i_agree"> I agree </label>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-4">
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
                <div class="form-group" style="display: none" id="toggle">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
