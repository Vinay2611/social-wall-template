<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 23-10-2018
 * Time: 12:48
 */

//Session start
session_start();

//Database connection
require 'include/dbconn.php';

//Getting all get method from url
if(isset($_GET['user_id']) && !empty($_GET['user_id']) || isset($_GET['user_post_id']) && !empty($_GET['user_post_id']) ){
    extract($_GET);
}else{
    echo '<h2>Invalid access.Please contact admin for more details.</h2>';
    die();
}



//extract user information
$user_select = "SELECT * FROM `users` where `user_id`='$user_id' and `status` = 'Active' ";
$user_query = $db->query( $user_select );
if( $user_query->num_rows > 0 ){
    $extract_user = $user_query->fetch_assoc();
    $email_id = $extract_user['email_id'];
    $first_name = $extract_user['first_name'];
    $last_name = $extract_user['last_name'];
}else {
    echo "<h2>User is inactive.Contact admin for more details.</h2>";
    die();
}

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>social wall template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</head>

<body>

<div class="wrapper">
    <div class="container">
        <div class="conteiner-wrapper">

            <form action="" method="post" id="add_comment"  >
                <div class="box-wrapper">

                    <h3 style="margin-bottom: 5px;font-size: 20px">
                        <?php
                        $sql_post = "SELECT u.first_name,u.last_name,up.caption FROM `users_post` AS up JOIN users AS u ON up.user_id = u.user_id where up.`user_post_id` = '$user_post_id' AND up.`status` = 'Accept' AND u.status = 'Active'";
                        //$sql_post = "SELECT * FROM `users_post` WHERE user_post_id = '$user_post_id'";
                        $que_post = $db->query( $sql_post );
                        $row_post = $que_post->fetch_assoc();
                        $caption = isset($row_post['caption']) ? $row_post['caption'] : '';
                        $post_name_first = isset($row_post['first_name']) ? $row_post['first_name'] : '';
                        $post_name_last = isset($row_post['last_name']) ? $row_post['last_name'] : '';

                        echo ucfirst($post_name_first)." ".ucfirst($post_name_last); ?>
                    </h3>

                    <div class="comment-box" style="margin-bottom: 5px;">
                        <?php echo $caption;  ?>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="comment" id="comment" maxlength="140"></textarea>
                        <!--<span id="post_msg" style="display: none;">Post saved successfully</span>-->
                        <span id="comment_msg" style="display: none;">Please fill comment</span>
                    </div>

                    <div class="pull-left">
                        <a href="javascript:history.back()" class="btn btn-success">Back</a>
                        <!--<a href="post.php?email=<?php /*echo $email_id */?>&first_name=<?php /*echo $first_name */?>&last_name=<?php /*echo $last_name */?>&db=<?php /*echo $_SESSION['database']; */?>" class="btn btn-success">Back</a>-->
                        <!--<a href="post.php" class="btn btn-success">Back</a>-->
                    </div>

                    <div class="pull-right right-box" style="margin-bottom: 18px;">
                        <span id="charNum">140</span>
                        <span class="spinner" style="display: none;"><i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i></span>
                        <input type="hidden" name="first_name" id="first_name" value="<?php if(!empty($first_name)){ echo ucfirst($first_name); } ?>">
                        <input type="hidden" name="last_name" id="last_name" value="<?php if(!empty($last_name)){ echo ucfirst($last_name); } ?>">
                        <input type="hidden" name="user_id" value="<?php if(!empty($user_id)){ echo $user_id; } ?>">
                        <input type="hidden" name="user_post_id" value="<?php if(!empty($user_post_id)){ echo $user_post_id; } ?>">
                        <input type="hidden" name="type" value="AddComment">
                        <button type="submit" style="margin-left: 0px;" class="btn btn-primary btn-post-disabled">POST</button>
                    </div>

                </div>

            </form>


            <div id="post_msg_div"></div>

            <?php
            //extract user comment data
            //SELECT up.user_post_id,up.image,up.caption,up.user_id,up.status,up.createdon,u.first_name,u.last_name,u.email_id FROM `users_post` AS up LEFT JOIN users AS u ON up.user_id = u.user_id order by `createdon` desc
            $sql_select = "SELECT uc.user_comment_id, uc.user_id, uc.user_post_id,uc.status, uc.comments,uc.createdon,u.first_name,u.last_name,u.status FROM `users_comment` AS uc JOIN users AS u ON uc.user_id = u.user_id where uc.`user_post_id` = '$user_post_id' AND uc.`status` = 'Accept' AND u.status = 'Active'  ORDER BY `user_comment_id` DESC";
            //$sql_select = "SELECT uc.user_comment_id, uc.user_id, uc.user_post_id, uc.comments,uc.createdon,u.first_name,u.last_name FROM `users_comment` AS uc JOIN users AS u ON uc.user_id = u.user_id where uc.`user_post_id` = '$user_post_id' ORDER BY `user_comment_id` DESC";
            //$sql_select = "SELECT * FROM `users_comment` where `user_post_id` = '$user_post_id' ORDER BY `user_comment_id` DESC";
            $sql_query = $db->query( $sql_select );
            $comments = '';
            if( $sql_query->num_rows > 0 ){
                while ($ext_user = $sql_query->fetch_assoc()){
                $comments = $ext_user['comments'];
                $first_name = $ext_user['first_name'];
                $last_name = $ext_user['last_name'];
                $post_date = $ext_user['createdon'];
                $dt = new DateTime($post_date);
                $date = $dt->format('M d');
                $time = $dt->format('g:i A');

            ?>
                <div class="box-wrapper" style="clear:both;">
                    <div class="well">
                        <div class="namer-wrapper">
                            <!--<h2>Joydeep Ray <span class="unbold">liked this</span></h2>-->
                            <!--<h3 class="small"> <?php /*echo $first_name; */?>: </h3>-->
                        </div>
                        <div class="namer-wrapper">
                        <!--<div class="comment-box">-->
                            <h2><?php echo ucfirst($first_name)." ".ucfirst($last_name); ?> </h2>
                            <!--<span class="small"><b> <?php /*echo ucfirst($first_name)." ".ucfirst($last_name) */?>: </b><br></span>-->
                            <h5 class="small"><?php echo $date; ?> at <?php echo $time; ?> <!--(GMT +05:30)--></h5>
                            <span><?php echo $comments;  ?></span>
                            <!--<span style="margin-left: 32px;"><?php /*echo $comments;  */?></span>-->
                        </div>
                    </div>
                </div>
            <?php }
            } ?>

        </div>
    </div>
</div>

</body>
</html>

