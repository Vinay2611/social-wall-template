<?php
include "header.php";
include "left.php";

$post_id = $_GET['id'];
if (!empty($post_id)){
    $sql = "SELECT u.first_name,u.last_name,u.email_id,up.image,up.caption,up.status,up.user_post_id FROM `users_post` AS up JOIN  users AS u on up.user_id = u.user_id WHERE u.status = 'Active' AND user_post_id = '$post_id'";
    $que = $db->query( $sql );
    if($que->num_rows > 0) {
        $i = 0;
        while ($row = $que->fetch_assoc()){
            $full_name = $row['first_name']." ".$row['last_name'];
            $email_id = $row['email_id'];
            $image = $row['image'];
            $caption = $row['caption'];
            $status = $row['status'];
        }
    }
}else{
    die(0);
}

?>


    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                View Post
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Post</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- /.box -->
                    <h3 id="resp-msg1" style="display: none"></h3>

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table  class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <td><?php echo $full_name; ?></td>
                                </tr>
                                <tr>
                                    <th>Email ID</th>
                                    <td><?php echo $email_id; ?></td>
                                </tr>
                                <?php if (!empty($image)){ ?>
                                <tr>
                                    <th>Images</th>
                                    <td><a href="../uploads/<?php echo $image; ?>" target="_blank"><img src="../uploads/<?php echo $image; ?>" alt="Post image" width="100" height="100"></a></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <th>Caption</th>
                                    <td><?php echo $caption; ?></td>
                                </tr>
                                <tr>
                                    <th>No. of Likes</th>
                                    <td><?php
                                        $sql_like   = "SELECT count(user_like) AS user_like FROM `users_like` where `user_post_id` = '".$post_id."' AND `user_like` = 1";
                                        $que_like   = $db->query( $sql_like );
                                        $fet_like   = $que_like->fetch_assoc();
                                        echo $count_like = $fet_like['user_like'];
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>No. of Comment</th>
                                    <td><?php
                                        $sql_comment = "SELECT COUNT(uc.user_comment_id) AS count_comment FROM `users_comment` AS uc JOIN users AS u ON uc.user_id = u.user_id where uc.`user_post_id` = '".$post_id."' AND uc.`status` = 'Accept' AND u.status = 'Active'";
                                        $que_comment = $db->query( $sql_comment );
                                        $fet_comment  = $que_comment->fetch_assoc();
                                        echo $count_comment = $fet_comment['count_comment'];
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td><?php echo $status; ?></td>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                View Comment
            </h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- /.box -->
                    <h3 id="resp-msg1" style="display: none"></h3>

                    <div class="box">
                        <div class="box-header">
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email ID</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                //
                                $sql = "SELECT uc.user_comment_id,uc.user_post_id,uc.comments,uc.status,u.first_name,u.last_name,u.email_id,up.caption,up.user_post_id  FROM `users_comment` AS uc JOIN users AS u on uc.user_id = u.user_id JOIN users_post AS up ON up.user_post_id = uc.user_post_id WHERE u.status = 'Active' AND  uc.`status` = 'Accept' AND up.user_post_id = '$post_id' ORDER BY up.caption, uc.createdon DESC";
                                //$sql = "SELECT uc.user_comment_id,uc.user_post_id,uc.comments,uc.status,u.first_name,u.last_name,u.email_id,up.caption FROM `users_comment` AS uc JOIN users AS u on uc.user_id = u.user_id JOIN users_post AS up ON up.user_post_id = uc.user_post_id WHERE u.status = 'Active'";
                                //$sql = "SELECT uc.user_comment_id,uc.user_post_id,uc.comments,uc.status,u.first_name,u.last_name,u.email_id FROM `users_comment` AS uc JOIN users AS u on uc.user_id = u.user_id WHERE u.status = 'Active'";
                                $que = $db->query( $sql );
                                if($que->num_rows > 0) {
                                    $i = 0;
                                    while ($row = $que->fetch_assoc()){

                                        $sql_post = "SELECT u.first_name,u.last_name,up.caption,u.email_id FROM `users_post` AS up JOIN users AS u ON up.user_id = u.user_id where up.`user_post_id` = '".$row["user_post_id"]."' AND up.`status` = 'Accept' AND u.status = 'Active'";
                                        //$sql_post = "SELECT * FROM `users_post` WHERE user_post_id = '$user_post_id'";
                                        $que_post = $db->query( $sql_post );
                                        $row_post = $que_post->fetch_assoc();
                                        $post_name_last = isset($row_post['email_id']) ? $row_post['email_id'] : '';

                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $row['first_name']. " ".$row['last_name']; ?></td>
                                            <td><?php echo $row['email_id']; ?></td>
                                            <td><?php echo $row['comments']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email ID</th>
                                    <th>Comment</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


<?php
include "footer.php";
?>