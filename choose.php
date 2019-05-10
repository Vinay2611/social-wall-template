<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 12-11-2018
 * Time: 10:59
 */

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
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="assets/js/custom.js"></script>
    <style>
        body{
            background-color: #fff;
        }
        .Hp-Box{
            background-color: #f5f5f5;/*background: #E1E0E0;*/
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px 20px;
            font-size: 13px;
            color: #000000;
            border-radius: 10px 10px 10px 10px;
            -moz-border-radius: 10px 10px 10px 10px;
            -webkit-border-radius: 10px 10px 10px 10px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .Hp-Box a {
            color: #FFFFFF;
        }
        a {
            text-decoration: none;
        }
        .Hp-Box h3 {
            font-size: 20px;
            color: #000000;
            margin-top: 10px;
        }
        .Hp-Box a:hover {
            text-decoration: none;
        }
        /*Pre - loading css*/
        .content {display:none;}
        .preload {
            width: 30px;
            height: 30px;
            position: fixed;
            top: 40%;
            left: 40%;
        }
        ​
    </style>
</head>
<body>
<div class="preload">
    <img src="images/loading.gif" height="75px" width="75px">
</div>
<div class="container content" style="margin-top: 15px">
    <div class="Hp-Box">
        <a href="post.php?email=<?php echo $email_id ?>&first_name=<?php echo $first_name ?>&last_name=<?php echo $last_name ?>&db=1&url=1">
            <h3>Funniest Individual Pic</h3>
        </a>
    </div>

    <div class="Hp-Box">
        <!--<a href="post.php?email=<?php /*echo $email_id */?>&first_name=<?php /*echo $first_name */?>&last_name=<?php /*echo $last_name */?>&db=2">-->
        <a href="groups.php?email=<?php echo $email_id ?>&first_name=<?php echo $first_name ?>&last_name=<?php echo $last_name ?>&db=2">
            <h3>My Assessment Journey</h3>
        </a>
    </div>

    <div>
        <p style="margin-top: 8%;margin-left: 12px"><b>Instructions</b></p>
        <ul style="margin-left: -6px;text-align: justify">
            <li><b>Funniest Individual Pic: </b>Upload your funniest pictures from Assessment & BEC 2018, top 3 funniest pictures win a prize.</li>
            <br>
            <li><b>My Assessment Journey: </b>Upload your Team Assessment Journey Picture/s. The best assessment journey team will win a prize.</li>
            <br>
            <li><b>Wittiest Caption: </b>Assign a witty caption / comment to any of the pictures that have been uploaded. The top 3 wittiest cations will win a prize.</li>
        </ul>
    </div>
</div>

<!--<div class="container">
    <div class="center">
        <form class="form-horizontal" action="#">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Url 1:</label>
                <div class="col-sm-10">
                    <a href="post.php?email=<?php /*echo $email_id */?>&first_name=<?php /*echo $first_name */?>&last_name=<?php /*echo $last_name */?>&db=1">Click here</a>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Url 2:</label>
                <div class="col-sm-10">
                    <a href="post.php?email=<?php /*echo $email_id */?>&first_name=<?php /*echo $first_name */?>&last_name=<?php /*echo $last_name */?>&db=2">Click here</a>
                </div>
            </div>
        </form>
    </div>
</div>-->

</body>
<script>
    $(function() {
        $(".preload").fadeOut(2000, function() {
            $(".content").fadeIn(1000);
        });
    })
</script>
</html>
