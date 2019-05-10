<?php
//Session start
session_start();

//Database connection
if(isset($_GET['db']) && $_GET['db'] == 2){
    $_SESSION['database'] = '2';
}else{
    $_SESSION['database'] = '1';
}
require 'include/dbconn.php';

//Getting all get method from url
if(isset($_GET['email']) && !empty($_GET['email']) || isset($_GET['first_name']) && !empty($_GET['first_name']) || isset($_GET['last_name']) && !empty($_GET['last_name']) ){
    //extract($_GET);
    $email_id = $_GET['email'];
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
    $post_date = date('Y-m-d H:i:s');
    //Validate users
    $check_user = "SELECT * FROM `users` WHERE `email_id` = '$email_id'";
    $sel_user = $db->query( $check_user );


    if($sel_user->num_rows > 0){
        if( $sel_user ){
            //echo $_SESSION['database'];
            $ext_user = $sel_user->fetch_assoc();
            //$user_id = $ext_user['user_id'];
            //$first_name = $ext_user['first_name'];
            //$last_name = $ext_user['last_name'];

        }
    }else{
        //insert query
        /*$sql = "INSERT INTO `users`( `first_name`, `last_name`, `email_id`, `status`, `createdon` ) VALUES ( '$first_name', '$last_name', '$email_id', 'Active' ,'$post_date' )";
        $insert = $db->query( $sql );
        if($insert){
            $user_id = $db->insert_id;
            $success = true;
            $msg  = "Data inserted successfully.";
        }else{
            $msg = "Something went wrong.Please try again later.";
        }*/
    }


    //value inside session
    $_SESSION['email_id'] = $email_id;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;

    //value inside cookie
    $cookie_email_id = "email_id";
    $cookie_value_email_id = "John Doe";
    setcookie($cookie_email_id, $cookie_value_email_id, time() + (86400 * 30), "/"); // 86400 = 1 day
}

//$email_id = "joydeep.ray@gmail.com";
//$email_id = "amit.pashte@gmail.com";
//$email_id = "vinay.jaiswal@shobizexperience.com";
//$first_name = "Vinay";
//$last_name = "Jaiswal";



//extract user id and its information
if ( (isset($email_id) && !empty($email_id)) || (isset($_SESSION['email_id']) && !empty($_SESSION['email_id']))) {
    $email_id = $_SESSION['email_id'];
    $sql_select = "SELECT * FROM `users` where `email_id` = '$email_id' and `status` = 'Active'";
    $sql_query = $db->query($sql_select);
    if ($sql_query->num_rows > 0) {
        $ext_user = $sql_query->fetch_assoc();
        $user_id = $ext_user['user_id'];
        $first_name = $ext_user['first_name'];
        $last_name = $ext_user['last_name'];
    } else {
        echo "<h2>User is inactive.Contact admin for more details.</h2>";
        die();
    }
}else{
    echo "<h2>Email is not set.Please contact admin for more details.</h2>";
    die();
}

//group name
$group_name = array( '1' => 'Tata Sky','2' => 'Tata Global Beverages','3' => 'Voltas','4' => 'Indian Steel Wire Products',

                     '5' => 'Rallis','6' => 'JUSCO','7' => 'Tata NYK Shipping India','8' => 'Tata Capital','9' => 'Tata Metaliks',

                    '10' => 'Tata Steel Thailand', '11' => 'Infiniti Retail', '12' => 'Tata Elxsi', '13' => 'Trent Hypermarket', '14' => 'Tata Steel',

                    '15' => 'Titan', '16' => 'Tata Communications', '17' => 'Tata Motors', '18' => 'Metahelix Life Sciences', '19' => 'Tata AIA Life Insurance',

                    '20' => 'Tata Motors Finance', '21' => 'Tata Sponge Iron', '22' => 'Tata Power Solar Systems',

                    '23' => 'Tata Steel  - AA', '24' => 'Tata  Sponge - AA', '25' => 'JUSCO - AA',

                    '26' => 'Tata Capital - AA', '27' => 'Tata Metaliks - AA', '28' => 'Tata Communications - AA',

                    '29' => 'Tata Global Beverages - AA', '30' => 'Tata Projects - AA', '31' => 'Tinplate - AA',

                    '32' => 'Tata Power - AA', '33' => 'ISWP - AA'
    );
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <title>social wall</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css?v=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bootbox.min.js"></script>
    <script src="http://demo.phpgang.com/lazy-loading-images-jquery/jquery.devrama.lazyload.min-0.9.3.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="assets/js/custom.js?v=1.0"></script>
    <style>
        a:hover{
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="wrapper">
    <div class="container">
        <div class="conteiner-wrapper">

            <form action="" method="post" id="upload_data" enctype="multipart/form-data" >
                <div class="box-wrapper">

                    <?php
                    if(isset($_GET['url']) && $_GET['url'] == 1){
                        echo  '<h5 style="display: flow-root;">Funniest Individual Pic <span style="float: right"><a href="javascript:history.back()"><img src="images/return-button.png" alt="" style="height: 18px"></a></span></h5>';
                    }else{
                        echo  '<h5 style="display: flow-root;">My Assessment Journey -'.$group_name[$_GET['group_id']].'<span style="float: right"><a href="javascript:history.back()"><img src="images/return-button.png" alt="" style="height: 18px"></a></span></h5>';
                    }
                    ?>

                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="caption" id="comment" maxlength="140"></textarea>
                        <!--<span id="post_msg" style="display: none;">Post saved successfully</span>-->
                        <span id="comment_msg" style="display: none;">This field is required!</span>
                    </div>

                    <div class="pull-left left-icon">
                        <label class="custom-file-upload">
                            <input type="file" name="uploads" id="uploads" accept="image/*" />
                            <i class="fas fa-camera"></i>
                            <span id="fileName"></span>
                            <span id="fileSizeMsg">Max image size 5MB</span>
                        </label>
                    </div>

                    <div class="pull-right right-box">
                        <span id="charNum">140</span>
                        <span class="spinner" style="display: none;"><i class="fa fa-spinner fa-pulse fa-1x fa-fw submit-loading"></i></span>
                        <input type="hidden" name="type" value="UserData">
                        <input type="hidden" name="group_id" value="<?php echo !empty($_GET['group_id']) ? $_GET['group_id'] : '';  ?>">
                        <button style="margin-left: 0px;" type="submit" class="btn btn-primary btn-post-disabled">POST</button>
                    </div>

                    <div class="clear"></div>
                </div>
            </form>

            <!--<div class="box-wrapper " style="margin-left: 80%">
                <div class="namer-wrapper">
                    <form action="" method="get">
                        <label for="">Sort by</label>
                        <select name="sortby"  id="" onchange="this.form.submit()">
                            <option value="recent" <?php /*if( isset($_GET['sortby']) && $_GET['sortby']=='recent'){ echo 'Selected';} */?>>Most Recent</option>
                            <option value="high" <?php /*if( isset($_GET['sortby']) && $_GET['sortby']=='high'){ echo 'Selected';} */?>>High to Low</option>
                            <option value="low" <?php /*if( isset($_GET['sortby']) && $_GET['sortby']=='low'){ echo 'Selected';} */?>>Low to High</option>
                        </select>
                    </form>
                </div>
            </div>-->

            <div id="post_msg_div"></div>
            <?php
            //Filter
            if(isset($_GET['sortby']) && $_GET['sortby'] == 'recent'){
                $sql_post = "SELECT up.user_post_id,up.image,up.caption,up.user_id,up.status,up.createdon,u.first_name,u.last_name,u.email_id,u.status FROM `users_post` AS up LEFT JOIN users AS u ON up.user_id = u.user_id  WHERE up.status = 'Accept' AND u.status = 'Active' order by `createdon` DESC";
            }elseif (isset($_GET['sortby']) && $_GET['sortby'] == 'high'){
                $sql_post = "SELECT up.user_post_id,up.caption,up.image,up.user_id,up.status,ul.user_like AS userLike,SUM(ul.user_like) AS USL, up.createdon,u.first_name,u.last_name,u.email_id,u.status FROM `users_post` AS up LEFT JOIN users_like AS ul ON up.user_post_id = ul.user_post_id LEFT JOIN users AS u ON up.user_id = u.user_id GROUP BY up.user_post_id HAVING up.status = 'Accept' AND u.status = 'Active' ORDER BY USL DESC";
                //$sql_post = "SELECT up.user_post_id,up.caption,up.image,up.user_id,ul.user_like AS userLike, up.createdon,u.first_name,u.last_name,u.email_id FROM `users_post` AS up JOIN users_like AS ul ON up.user_post_id = ul.user_post_id  LEFT JOIN users AS u ON up.user_id = u.user_id  GROUP BY up.user_post_id ORDER BY userLike DESC ";
            }elseif (isset($_GET['sortby']) && $_GET['sortby'] == 'low'){
                $sql_post = "SELECT up.user_post_id,up.caption,up.image,up.user_id,up.status,ul.user_like AS userLike,SUM(ul.user_like) AS USL, up.createdon,u.first_name,u.last_name,u.email_id,u.status FROM `users_post` AS up LEFT JOIN users_like AS ul ON up.user_post_id = ul.user_post_id LEFT JOIN users AS u ON up.user_id = u.user_id GROUP BY up.user_post_id HAVING up.status = 'Accept' AND u.status = 'Active' ORDER BY USL ASC";
                //$sql_post = "SELECT up.user_post_id,up.caption,up.image,up.user_id,ul.user_like AS userLike,COUNT(ul.user_like) AS UL,  up.createdon,u.first_name,u.last_name,u.email_id FROM `users_post` AS up JOIN users_like AS ul ON up.user_post_id = ul.user_post_id LEFT JOIN users AS u ON up.user_id = u.user_id GROUP BY up.user_post_id ORDER BY UL ASC";
            } else{

                //Group query
                if( isset($_GET['group_id']) && !empty($_GET['group_id']) ){
                    $group_id = $_GET['group_id'];
                    $sql_post = "SELECT up.user_post_id,up.image,up.caption,up.user_id,up.status,up.createdon,up.group_id,u.first_name,u.last_name,u.email_id,u.status FROM `users_post` AS up LEFT JOIN users AS u ON up.user_id = u.user_id  WHERE up.status = 'Accept' AND u.status = 'Active' AND up.group_id = '$group_id' order by `createdon` DESC";
                }else{
                    $sql_post = "SELECT up.user_post_id,up.image,up.caption,up.user_id,up.status,up.createdon,u.first_name,u.last_name,u.email_id,u.status FROM `users_post` AS up LEFT JOIN users AS u ON up.user_id = u.user_id  WHERE up.status = 'Accept' AND u.status = 'Active' order by `createdon` DESC";
                }

            }


            //echo $sql_post;
            $que_post = $db->query( $sql_post );
            if ($que_post->num_rows > 0){
                while ($row_post = $que_post->fetch_assoc()){
                    $post_date = $row_post['createdon'];
                    $caption = isset($row_post['caption']) ? $row_post['caption'] : '';
                    $picture = isset($row_post['image']) ? $row_post['image'] : '';
                    $user_post_id = $row_post['user_post_id'];
                    $first_name = $row_post['first_name'];
                    $last_name = $row_post['last_name'];
                    $dt = new DateTime($post_date);

                    $date = $dt->format('M d');
                    $time = $dt->format('g:i A');

            ?>
            <div class="box-wrapper">
                <div class="well">
                    <div class="namer-wrapper">
                        <h2 id="reply_<?php echo $user_post_id ?>"><?php echo ucfirst($first_name)." ".ucfirst($last_name); ?> </h2>
                        <!--<h2 id="reply_<?php /*echo $user_post_id */?>" style="display: none"> <?php /*echo $first_name; */?> <span class="unbold"> liked this </span></h2>-->
                        <h5 class="small"><?php echo $date; ?> at <?php echo $time; ?> <!--(GMT +05:30)--></h5>
                    </div>
                    <div class="comment-box">
                        <?php echo $caption;  ?>
                    </div>
                </div>
                <?php
                if(!empty($picture)){
                ?>
                <div class="comment-box">
                    <img class="img-responsive" data-lazy-src="uploads/<?php echo $picture; ?>" />
                    <!--<img src="uploads/<?php /*echo $picture; */?>" class="img-responsive">-->
                </div>
                <?php } ?>

                <div class="well2">
                    <ul>
                        <li style="border-right: none"></li>
                        <li style="border-left: none">
                            <?php
                            $sql_like   = "SELECT count(user_like) AS user_like FROM `users_like` where `user_post_id` = '$user_post_id' AND `user_like` = 1";
                            $que_like   = $db->query( $sql_like );
                            $fet_like   = $que_like->fetch_assoc();
                            $count_like = $fet_like['user_like'];

                            //user like or unlike
                            $sql_user_like = "SELECT * FROM `users_like` where `user_post_id` = '$user_post_id' AND `user_id` = '$user_id' AND `user_like` = 1";
                            $sql_quer_like = $db->query( $sql_user_like );
                            if($sql_quer_like->num_rows > 0) {
                                ?>
                                <span id="unreplace_<?php echo $user_post_id; ?>">
                                    <a href="javascript:void(0)" class="click-unlike" id="unlike_<?php echo $user_post_id; ?>" data-user-id="<?php echo $user_post_id; ?>">
                                        <i class="fas fa-heart"></i> <span id="count_unlike_<?php echo $user_post_id; ?>"><?php echo $count_like; ?></span>
                                    </a>
                                </span>
                                    <!--<span id="response_msg_unlike" style="display: none">You un-like this post</span>-->
                                <?php
                            }else{
                            ?>
                                <span id="replace_<?php echo $user_post_id; ?>">
                                <a href="javascript:void(0)" class="click-like" id="like_<?php echo $user_post_id; ?>" data-user-id="<?php echo $user_post_id; ?>">
                                    <i class="far fa-heart"></i> <span id="count_like_<?php echo $user_post_id; ?>"><?php echo $count_like ?></span>
                                </a>
                                    </span>
                            <?php } ?>
                            <!--<span id="response_msg_like_<?php /*echo $user_post_id; */?>" style="font-size: 10px;color: green;display: block;"></span>-->
                        </li>
                        <li>

                            <?php
                            $sql_comment = "SELECT COUNT(uc.user_comment_id) AS count_comment FROM `users_comment` AS uc JOIN users AS u ON uc.user_id = u.user_id where uc.`user_post_id` = '$user_post_id' AND uc.`status` = 'Accept' AND u.status = 'Active'";
                            $que_comment = $db->query( $sql_comment );
                            $fet_comment  = $que_comment->fetch_assoc();
                            $count_comment = $fet_comment['count_comment'];

                            if( isset($_GET['group_id']) && !empty($_GET['group_id']) ){
                                $group_id = $_GET['group_id'];
                            ?>
                                <a href="comment.php?user_id=<?php echo $user_id; ?>&user_post_id=<?php echo $user_post_id; ?>&group_id=<?php echo $group_id; ?>"><i class="far fa-comment-alt" id="comment_<?php echo $user_post_id; ?>" data-user-id="<?php echo $user_post_id; ?>"></i></a><span style="margin-left: 8px;"><?php echo $count_comment; ?></span>
                            <?php }else{ ?>
                                <a href="comment.php?user_id=<?php echo $user_id; ?>&user_post_id=<?php echo $user_post_id; ?>"><i class="far fa-comment-alt" id="comment_<?php echo $user_post_id; ?>" data-user-id="<?php echo $user_post_id; ?>"></i></a><span style="margin-left: 8px;"><?php echo $count_comment; ?></span>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>

            <?php
                }
            }
            ?>



        </div>
    </div>
</div>
<img src="images/back-to-top.png" onclick="topFunction()" id="scrollTop" title="Go to top" alt="">
<!--<button onclick="topFunction()" id="myBtn" title="Go to top">Scroll to top</button>-->

<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollTop").style.display = "block";
            //document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("scrollTop").style.display = "none";
            //document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    $(function () {
        $.DrLazyload(); //Yes! that's it!
    });
</script>

</body>
</html>
