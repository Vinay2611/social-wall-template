<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 20-10-2018
 * Time: 11:54
 */

//Session start
session_start();

//Include Database connection
include 'dbconn.php';

//
if (isset($_POST['type']) && $_POST['type'] == 'UserInsert'){

    $msg = '';
    $success = false;
    $data = array();
    extract($_POST);
    $date = date('Y-m-d H:i:s');
    $user_id = '';

    //setting in session
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_id = $_POST['email_id'];

    //Validate users
    $check_user = "SELECT * FROM `users` WHERE `email_id` = '$email_id'";
    $sel_user = $db->query( $check_user );
    if($sel_user->num_rows > 0){
        if( $sel_user ){
            $ext_user = $sel_user->fetch_assoc();
            $user_Id = $ext_user['user_id'];
            $sql = "UPDATE `users` SET `i_agree`='Agree',`modifiedon`='$date' WHERE `user_id`='$user_Id'";
            $update = $db->query( $sql );
            $update_2 = $db2->query( $sql );
            if($update && $update_2){
                $success = true;
                $msg  = "Data inserted successfully.";
            }else{
                $msg = "Something went wrong.Please try again later.";
            }
        }
    }else{
        //insert query
        $sql = "INSERT INTO `users`( `first_name`, `last_name`, `email_id`, `i_agree`, `status`, `createdon` ) VALUES ( '$first_name', '$last_name', '$email_id', 'Agree', 'Active' ,'$date' )";
        $insert = $db->query( $sql );
        $insert_2 = $db2->query( $sql );
        if($insert && $insert_2){
            $user_id = $db->insert_id;
            $success = true;
            $msg  = "Data inserted successfully.";
        }else{
            $msg = "Something went wrong.Please try again later.";
        }
    }

    $data = array( 'msg' => $msg, 'success' => $success , 'first_name' => ucfirst($first_name), 'last_name' => ucfirst($last_name), 'user_id' => $user_id, 'email_id' =>  $email_id );

    echo json_encode($data);

}

//Insert user
if(isset($_POST['type']) && $_POST['type'] == 'UserData' ){

    $msg = '';
    $success = false;
    $data = array();
    $replace = '';
    extract($_POST);
    $post_date = date('Y-m-d H:i:s');
    $dt = new DateTime($post_date);
    //setting in session
    $user_email_id = isset($_SESSION['email_id']) ? $_SESSION['email_id'] : '';
    $group_id = isset($_POST['group_id']) ? $_POST['group_id'] : '';

    $date = $dt->format('M d');
    $time = $dt->format('g:i A');

    //$email_id = $db->real_escape_string($email_id);
    //$fname = $db->real_escape_string($fname);
    //$lname = $db->real_escape_string($lname);
    $caption = $db->real_escape_string($caption);
    $file_name = '';

    //
    if(isset($_FILES['uploads']) && !empty($_FILES['uploads']['name'])){

        $errors = array();
        $file_name = $_FILES['uploads']['name'];
        $file_size = $_FILES['uploads']['size'];
        $file_tmp = $_FILES['uploads']['tmp_name'];
        $file_type = $_FILES['uploads']['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        //$file_ext = strtolower(end(explode('.',$_FILES['uploads']['name'])));
        $expensions = array("jpeg","jpg","png","JPEG");
        //var_dump($file_ext);


        if(in_array($file_ext,$expensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }

        if($file_size > 5242880) { //25MB = 26214400  // 2MB = 2097152 // 1MB = 1,048,576 bytes 5MB = 5242880
            $errors[]='File size must be exactly 5 MB';
        }

        if(empty($errors)==true) {
            $file_name = rand_str(10).".".$file_ext;
            move_uploaded_file($file_tmp,"../uploads/".$file_name);

        }else{
            $msg = "Something went wrong.Please try again later";
        }
    }

    /*check user details*/
    $check_user = "SELECT * FROM `users` WHERE `email_id` = '$user_email_id'";
    $sel_user = $db->query( $check_user );
    if($sel_user->num_rows > 0){
        if( $sel_user ){
            $ext_user = $sel_user->fetch_assoc();
            $user_id = $ext_user['user_id'];
            $first_name = $ext_user['first_name'];
            $last_name = $ext_user['last_name'];
            //insert query
            $sql = "INSERT INTO `users_post`( `image`, `caption`, `user_id`, `group_id`, `createdon` ) VALUES ( '$file_name', '$caption', $user_id, '$group_id', '$post_date' )";
            $insert = $db->query( $sql );
            if($insert){
                $user_post_id = $db->insert_id;
                $success = true;
                $msg  = "Data inserted successfully.";
            }else{
                $msg = "Something went wrong.Please try again later.";
            }
        }
    }else{
        $msg = "User is not register.Please try again later.";
    }

    $data = array( 'msg' => $msg, 'success' => $success , 'caption' => $caption, 'date' => $date ,'time' => $time ,'filename' => $file_name, 'first_name' => ucfirst($first_name), 'last_name' => ucfirst($last_name), 'user_id' => $user_id, 'user_post_id' =>  $user_post_id );

    echo json_encode($data);

}

//like
if(isset($_POST['type']) && $_POST['type'] == 'like' ){
    $msg = '';
    $success = false;
    $data = array();
    $post_date = date('Y-m-d H:i:s');
    $user_post_id = $_POST['data_id'];
    $user_email_id = isset($_SESSION['email_id']) ? $_SESSION['email_id'] : '';

    /*check user details*/
    $check_user = "SELECT * FROM `users` WHERE `email_id` = '$user_email_id'";
    $sel_user = $db->query( $check_user );
    if($sel_user->num_rows > 0){
        if( $sel_user ) {
            $ext_user = $sel_user->fetch_assoc();
            $user_id = $ext_user['user_id'];
            $first_name = $ext_user['first_name'];
            $last_name = $ext_user['last_name'];

            //check like is exist
            $sql_like = "SELECT * FROM `users_like` where `user_post_id` = '$user_post_id' and `user_id` = '$user_id'";
            $sql_quer = $db->query( $sql_like );
            if( $sql_quer ->num_rows > 0 ){
                $sql = "UPDATE `users_like` SET `user_like`='1' , `createdon` = '$post_date' WHERE user_post_id = '$user_post_id' and `user_id` = '$user_id'";
            }else{
                $sql = "INSERT INTO `users_like`( `user_like`, `user_id`, `user_post_id`, `createdon`) VALUES ('1','$user_id','$user_post_id', '$post_date' )";
            }
            $insert = $db->query( $sql );
            if($insert){
                //$user_id = $db->insert_id;
                //Count like
                $sql_like = "SELECT count(user_like) AS user_like FROM `users_like` where `user_post_id` = '$user_post_id' AND `user_like` = 1";
                $que_like = $db->query( $sql_like );

                if($que_like){
                    $fet_like = $que_like->fetch_assoc();
                    $count_like = $fet_like['user_like'];
                    $success = true;
                    $msg  = "Data inserted successfully.";
                }else{
                    $msg = "Something went wrong in user like.";
                }

            }else{
                $msg = "Something went wrong.Please try again later.";
            }

        }
    }

    $data = array( 'msg' => $msg, 'success' => $success, 'first_name' => ucfirst($first_name), 'last_name' => ucfirst($last_name), 'count_like' => $count_like );

    echo json_encode($data);

}

//Unlike
if(isset($_POST['type']) && $_POST['type'] == 'Unlike' ){
    $msg = '';
    $success = false;
    $data = array();
    $user_post_id = $_POST['data_id'];
    $post_date = date('Y-m-d H:i:s');
    $user_email_id = isset($_SESSION['email_id']) ? $_SESSION['email_id'] : '';

    /*check user details*/
    $check_user = "SELECT * FROM `users` WHERE `email_id` = '$user_email_id'";
    $sel_user = $db->query( $check_user );
    if($sel_user->num_rows > 0){
        if( $sel_user ) {
            $ext_user = $sel_user->fetch_assoc();
            $user_id = $ext_user['user_id'];
            $first_name = $ext_user['first_name'];
            $last_name = $ext_user['last_name'];

            $sql = "UPDATE `users_like` SET `user_like`='0' , `createdon` = '$post_date' WHERE user_post_id = '$user_post_id' and `user_id` = '$user_id'";
            $update = $db->query( $sql );
            if($update){
                //$user_id = $db->insert_id;
                //Count like
                $sql_like = "SELECT count(user_like) AS user_like FROM `users_like` where `user_post_id` = '$user_post_id' AND `user_like` = 1";
                $que_like = $db->query( $sql_like );

                if($que_like){
                    $fet_like = $que_like->fetch_assoc();
                    $count_unlike = $fet_like['user_like'];
                    $success = true;
                    $msg  = "Data inserted successfully.";
                }else{
                    $msg = "Something went wrong in user like.";
                }

            }else{
                $msg = "Something went wrong.Please try again later.";
            }

        }
    }

    $data = array( 'msg' => $msg, 'success' => $success, 'first_name' => ucfirst($first_name), 'last_name' => ucfirst($last_name), 'count_unlike' => $count_unlike );

    echo json_encode($data);

}

//Add Comment
if(isset($_POST['type']) && $_POST['type'] == 'AddComment'){
    $msg = '';
    $success = false;
    $data = array();
    extract($_POST);
    $user_email_id = isset($_SESSION['email_id']) ? $_SESSION['email_id'] : '';
    $post_date = date('Y-m-d H:i:s');
    $comment = $db->real_escape_string($comment);
    $dt = new DateTime($post_date);
    $date = $dt->format('M d');
    $time = $dt->format('g:i A');


    //insert query
    $sql = "INSERT INTO `users_comment`( `user_id`, `user_post_id`, `comments`, `createdon` ) VALUES ( '$user_id', '$user_post_id', '$comment', '$post_date' )";
    $insert = $db->query( $sql );
    if($insert){
        $success = true;
        $msg  = "Data inserted successfully.";
    }else{
        $msg = "Something went wrong.Please try again later.";
    }

    $data = array( 'msg' => $msg, 'success' => $success, 'date' => $date ,'time' => $time  );

    echo json_encode($data);

}
