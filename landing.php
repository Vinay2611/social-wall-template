<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 12-11-2018
 * Time: 10:54
 */


//Session start
session_start();

//Connection
//require 'include/dbconn.php';
/*$servername = "localhost";
$username = "bloghsi1_social";
$password = "@yjue)ZA211";
$database = "bloghsi1_social";*/
$servername = "localhost";
$username = "root";
$password = "";
$database = "socialwall";
$database2 = "socialwall_group";

// Create connection
$db = new mysqli( $servername, $username, $password, $database );
$db2 = new mysqli( $servername, $username, $password, $database2 );

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($db2->connect_error) {
    die("Connection failed: " . $db2->connect_error);
}

//Validate email
function isValidEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}


//Getting all get method from url
if(isset($_GET['email']) && !empty($_GET['email']) || isset($_GET['first_name']) && !empty($_GET['first_name']) || isset($_GET['last_name']) && !empty($_GET['last_name']) ){
    //extract($_GET);
    $email_id = $_GET['email'];
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $post_date = date('Y-m-d H:i:s');

    //Validate email address
    if(!isValidEmail($email_id)){
        echo "<h2>Email address is not valid.</h2>";
        die();
    }

    //Validate users
    $check_user = "SELECT * FROM `users` WHERE `email_id` = '$email_id'";
    $sel_user = $db->query( $check_user );
    if($sel_user->num_rows > 0){
        if( $sel_user ){
            $ext_user = $sel_user->fetch_assoc();
            $i_agree = $ext_user['i_agree'];
            if($i_agree == 'Agree'){
                $first_name = $ext_user['first_name'];
                $last_name = $ext_user['last_name'];
                $email_id = $ext_user['email_id'];
                $URL="choose.php?email=".$email_id."&first_name=".$first_name."&last_name=".$last_name;
                echo "<script>location.href='$URL'</script>";
            }

        }
    }else{
        //Add users in both table
        /*$sql = "INSERT INTO `users`( `first_name`, `last_name`, `email_id`, `status`, `createdon` ) VALUES ( '$first_name', '$last_name', '$email_id', 'Active' ,'$post_date' )";
        $insert = $db->query( $sql );
        if($insert){
            $user_id = $db->insert_id;
            $success = true;
            $msg  = "Data inserted successfully.";
        }else{
            $msg = "Something went wrong.Please try again later.";
        }*/
        $sql = "INSERT INTO `users`( `first_name`, `last_name`, `email_id`, `i_agree`, `status`, `createdon` ) VALUES ( '$first_name', '$last_name', '$email_id', '', 'Active' ,'$post_date' )";
        $insert = $db->query( $sql );
        $insert_2 = $db2->query( $sql );
        if($insert && $insert_2){
            //$user_id = $db->insert_id;
            //echo '<div style="text-align: center;font-size: 12px">New user created</div>';
        }else{
            //echo '<div style="text-align: center;font-size: 12px">Something went wrong when creating user.Please contact administration.</div>';
        }

    }

}
session_destroy();
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
        /* Set-up */
       .display-name-box{
            max-width: 600px;  margin: 0 auto; font-size: 18px;
        }
        .display-name-box .lable-name{ font-size: 18px; display: inline-block; width: 20%;}
        a:hover{
            text-decoration: none;
        }
        /*Pre - loading css*/
        .content {
            display:none;
        }
        .preload {
            width: 30px;
            height: 30px;
            position: fixed;
            top: 40%;
            left: 40%;
        }
    </style>
</head>
<body>
    <div class="preload">
        <img src="images/loading.gif" height="75px" width="75px">
    </div>
    <div class="box-wrapper display-name-box content">
        <div class="well" style="border: none;">
            <div class="namer-wrapper">
                <form action="" method="" id="">
                    <p> By participating in the Image-nation contest,
                        you agree that you may be putting your or your work photographs in a domain viewable to all delegates of BEC 2018 through this app.
                        Other delegates will also be able to like and caption / comment on your photographs which will also be viewable by all delegates. <br><br>

                        Also, please note any post not found suitable by the administration team may be removed at it's sole discretion.
                    </p>
                    <!--<h2><span class="lable-name">First Name:</span>  <?php /*echo $first_name; */?> </h2>
                    <h2><span class="lable-name">Last Name:</span> <?php /*echo $last_name; */?></h2>
                    <h2><span class="lable-name">Email:</span>  <?php /*echo $email_id; */?></h2>-->
                    <input type="hidden" name="first_name" id="first_name" value="<?php echo $first_name; ?>">
                    <input type="hidden" name="last_name" id="last_name" value="<?php echo $last_name; ?>">
                    <input type="hidden" name="email_id" id="email_id" value="<?php echo $email_id; ?>">
                    <span style="display: block;text-align: center;margin-top: 20px;">  <input type="button" class="btn-md btn btn-success" name="i_agree"  id="i_agree" value="Agree">
                    <a href="dis-agree.php"><input type="button" class="btn-md btn btn-danger" name="dis_agree"  id="dis_agree" value="Disagree"> </a></span><br>
                    <!--<span class="lable-name"></span>  <input type="button" class="btn-md btn btn-success" name="i_agree"  id="i_agree" value="Agree">
                    <span class="lable-name"></span> <a href="dis-agree.php"><input type="button" class="btn-md btn btn-danger" name="dis_agree"  id="dis_agree" value="Disagree"> </a><br>-->
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    $(function() {
        $(".preload").fadeOut(2000, function() {
            $(".content").fadeIn(1000);
        });
    })
</script>
</html>
