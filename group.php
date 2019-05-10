<?php
//Session start
session_start();

//Database connection
require 'include/dbconn.php';

//Getting all get method from url
if(isset($_GET['email']) && !empty($_GET['email']) || isset($_GET['first_name']) && !empty($_GET['first_name']) || isset($_GET['last_name']) && !empty($_GET['last_name']) ) {
    extract($_GET);
    $email_id = $_GET['email'];
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
}else{
    //die("Invalid request please try again");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <title>social wall</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css?v=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script src="assets/js/bootbox.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="assets/js/custom.js?v=1.0"></script>

</head>

<body>

<div class="box-wrapper display-name-box">
    <div class="well" style="border: none;">
        <div class="namer-wrapper form-group">
            <form action="post.php" method="get" id="">
                <div class="row">
                    <div class="col-md-4 col-lg-offset-4">
                        <input type="hidden" name="email" value="<?php echo $email_id ?>">
                        <input type="hidden" name="first_name" value="<?php echo $first_name ?>">
                        <input type="hidden" name="last_name" value="<?php echo $last_name ?>">
                        <input type="hidden" name="db" value="<?php echo "2"; ?>">

                        <label for="">Please select your Assessment Group</label><br><br>
                        <select name="group_id" id="group_id" class="form-control">
                            <option value="0">--Please select--</option>
                            <option value="1">Tata Sky</option>
                            <option value="2">Tata Global Beverages</option>
                            <option value="3">Voltas</option>
                            <option value="4">Indian Steel Wire Products</option>
                            <option value="5">Rallis</option>
                            <option value="6">JUSCO</option>
                            <option value="7">Tata NYK Shipping India</option>
                            <option value="8">Tata Capital</option>
                            <option value="9">Tata Metaliks</option>
                            <option value="10">Tata Steel Thailand</option>
                            <option value="11">Infiniti Retail</option>
                            <option value="12">Tata Elxsi</option>
                            <option value="13">Trent Hypermarket</option>
                            <option value="14">Tata Steel</option>
                            <option value="15">Titan</option>
                            <option value="16">Tata Communications</option>
                            <option value="17">Tata Motors</option>
                            <option value="18">Metahelix Life Sciences</option>
                            <option value="19">Tata AIA Life Insurance</option>
                            <option value="20">Tata Motors Finance</option>
                            <option value="21">Tata Sponge Iron</option>
                            <option value="22">Tata Power Solar Systems</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-lg-offset-4 text-center"><br>
                        <input type="submit" name="" class="btn btn-success" id="submit_value" disabled value="Select">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

