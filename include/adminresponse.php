<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 30-10-2018
 * Time: 16:58
 */


//Session Start
session_start();


//Database connectivity
include "dbconn.php";


//Admin login
if(isset($_POST['type']) && $_POST['type'] == 'AdminLogin' ){

    $message = '';
    $success = false;
    $data = array();
    extract($_POST);
    $user_name = $_POST['user_name'];
    $password  = $_POST['password'];

    $sql = "SELECT * FROM `admin` where `user_name` = '$user_name'";
    $result = $db->query($sql);
    if($result->num_rows > 0){

        $adminData = $result->fetch_assoc();
        $adminPassword = $adminData['pass_word'];

        //if( password_verify( $password,$adminPassword )){
        if($password == $adminPassword){

            $_SESSION['email_id'] = $adminData['email_id'];
            $_SESSION['user_name'] = $adminData['user_name'];
            $_SESSION['first_name'] = $adminData['first_name'];
            $message = "Admin logged in";
            $success = true;
        }else{
            $message = "Password not match.Please try again.";
        }
    }else{
        $message = "Username is not match.Please try again.";
    }
    $data = array( 'msg' => $message, 'success' => $success );

    echo json_encode($data);

}


//User activate /de-activate
if(isset($_POST['type']) && $_POST['type'] == 'UserActive' ){

    $message = '';
    $success = false;
    $data = array();
    extract($_POST);
    $modifed_date = date('Y-m-d H:i:s');

    //Select
    $sql_user = "SELECT * FROM `users` where `user_id` = '$data_id'";
    $que_user = $db->query( $sql_user );
    $ext_user = $que_user->fetch_assoc();
    $status = $ext_user['status'];
    if($status == 'Active'){
        $up_user = "UPDATE `users` SET `status`='Inactive',`modifiedon`='$modifed_date' WHERE `user_id` = '$data_id'";
    }else{
        $up_user = "UPDATE `users` SET `status`='Active',`modifiedon`='$modifed_date' WHERE `user_id` = '$data_id'";
    }
    $exe_user = $db->query( $up_user );
    $exe_user2 = $db2->query( $up_user );
    if($exe_user && $exe_user2){
        $message = "Status changes successfully";
        $success = true;
    }else{
        $message = "Something went wrong.Please try again.";
    }

    $data = array( 'message' => $message,'success' => $success);

    echo json_encode( $data );

}


//User Post
if(isset($_POST['type']) && $_POST['type'] == 'UserPost' ){

    $message = '';
    $success = false;
    $data = array();
    extract($_POST);
    $modifed_date = date('Y-m-d H:i:s');

    //Select
    $sql_user = "SELECT * FROM `users_post` where `user_post_id` = '$data_id'";
    $que_user = $db->query( $sql_user );
    $ext_user = $que_user->fetch_assoc();
    $status = $ext_user['status'];
    if($status == 'Accept'){
        $up_user = "UPDATE `users_post` SET `status`='Reject',`modifiedon`='$modifed_date' WHERE `user_post_id` = '$data_id'";
    }else{
        $up_user = "UPDATE `users_post` SET `status`='Accept',`modifiedon`='$modifed_date' WHERE `user_post_id` = '$data_id'";
    }
    $exe_user = $db->query( $up_user );
    if($exe_user){
        $message = "Status changes successfully";
        $success = true;
    }else{
        $message = "Something went wrong.Please try again.";
    }

    $data = array( 'message' => $message,'success' => $success);

    echo json_encode( $data );

}


//User Comment
if(isset($_POST['type']) && $_POST['type'] == 'UserComment' ){

    $message = '';
    $success = false;
    $data = array();
    extract($_POST);
    $modifed_date = date('Y-m-d H:i:s');

    //Select
    $sql_user = "SELECT * FROM `users_comment` where `user_comment_id` = '$data_id'";
    $que_user = $db->query( $sql_user );
    $ext_user = $que_user->fetch_assoc();
    $status = $ext_user['status'];
    if($status == 'Accept'){
        $up_user = "UPDATE `users_comment` SET `status`='Reject',`modifiedon`='$modifed_date' WHERE `user_comment_id` = '$data_id'";
    }else{
        $up_user = "UPDATE `users_comment` SET `status`='Accept',`modifiedon`='$modifed_date' WHERE `user_comment_id` = '$data_id'";
    }
    $exe_user = $db->query( $up_user );
    if($exe_user){
        $message = "Status changes successfully";
        $success = true;
    }else{
        $message = "Something went wrong.Please try again.";
    }

    $data = array( 'message' => $message,'success' => $success);

    echo json_encode( $data );

}


//Group User Post
if(isset($_POST['type']) && $_POST['type'] == 'GroupUserPost' ){

    $message = '';
    $success = false;
    $data = array();
    extract($_POST);
    $modifed_date = date('Y-m-d H:i:s');

    //Select
    $sql_user = "SELECT * FROM `users_post` where `user_post_id` = '$data_id'";
    $que_user = $db2->query( $sql_user );
    $ext_user = $que_user->fetch_assoc();
    $status = $ext_user['status'];
    if($status == 'Accept'){
        $up_user = "UPDATE `users_post` SET `status`='Reject',`modifiedon`='$modifed_date' WHERE `user_post_id` = '$data_id'";
    }else{
        $up_user = "UPDATE `users_post` SET `status`='Accept',`modifiedon`='$modifed_date' WHERE `user_post_id` = '$data_id'";
    }
    $exe_user = $db2->query( $up_user );
    if($exe_user){
        $message = "Status changes successfully";
        $success = true;
    }else{
        $message = "Something went wrong.Please try again.";
    }

    $data = array( 'message' => $message,'success' => $success);

    echo json_encode( $data );

}


//Group User Comment
if(isset($_POST['type']) && $_POST['type'] == 'GroupUserComment' ){

    $message = '';
    $success = false;
    $data = array();
    extract($_POST);
    $modifed_date = date('Y-m-d H:i:s');

    //Select
    $sql_user = "SELECT * FROM `users_comment` where `user_comment_id` = '$data_id'";
    $que_user = $db2->query( $sql_user );
    $ext_user = $que_user->fetch_assoc();
    $status = $ext_user['status'];
    if($status == 'Accept'){
        $up_user = "UPDATE `users_comment` SET `status`='Reject',`modifiedon`='$modifed_date' WHERE `user_comment_id` = '$data_id'";
    }else{
        $up_user = "UPDATE `users_comment` SET `status`='Accept',`modifiedon`='$modifed_date' WHERE `user_comment_id` = '$data_id'";
    }
    $exe_user = $db2->query( $up_user );
    if($exe_user){
        $message = "Status changes successfully";
        $success = true;
    }else{
        $message = "Something went wrong.Please try again.";
    }

    $data = array( 'message' => $message,'success' => $success);

    echo json_encode( $data );

}

?>