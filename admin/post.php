<?php
include "header.php";
include "left.php";


?>
    <style>
        .actionButton{
            cursor: pointer;
        }
        #comment{
            width: 100%;
        }
        #remark{
            width: 100%;
        }
        .close-modal{
            cursor: pointer;
        }
    </style>

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
                            <h3 class="box-title pull-right"><a href="post_report.php" class="btn btn-success ">Download report</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Full Name</th>
                                        <th>Email ID</th>
                                        <th>Image</th>
                                        <th>Caption</th>
                                        <th>No. of Likes</th>
                                        <th>No. of Comments</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                //
                                $sql = "SELECT u.first_name,u.last_name,u.email_id,up.image,up.caption,up.status,up.user_post_id,up.createdon FROM `users_post` AS up JOIN  users AS u on up.user_id = u.user_id WHERE u.status = 'Active' ORDER BY up.createdon desc ";
                                //$sql = "SELECT u.first_name,u.last_name,u.email_id,up.image,up.caption,up.status,up.user_post_id FROM `users_post` AS up JOIN  users AS u on up.user_id = u.user_id WHERE u.status = 'Active'";
                                $que = $db->query( $sql );
                                if($que->num_rows > 0) {
                                $i = 0;
                                while ($row = $que->fetch_assoc()){
                                    $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
                                        <td><?php echo $row['email_id']; ?></td>
                                        <td>
                                            <?php if(!empty($row['image'])){ ?>
                                                <a href="../uploads/<?php echo $row['image']; ?>" target="_blank"><img src="../uploads/<?php echo $row['image']; ?>" alt="Post image" width="100" height="100"></a>
                                            <?php } ?>
                                        </td>
                                        <td><?php echo truncate($row['caption'],50); ?></td>
                                        <td><?php
                                                $sql_like   = "SELECT count(user_like) AS user_like FROM `users_like` where `user_post_id` = '".$row['user_post_id']."' AND `user_like` = 1";
                                                $que_like   = $db->query( $sql_like );
                                                $fet_like   = $que_like->fetch_assoc();
                                                echo $count_like = $fet_like['user_like'];
                                            ?>
                                        </td>
                                        <td><?php
                                                $sql_comment = "SELECT COUNT(uc.user_comment_id) AS count_comment FROM `users_comment` AS uc JOIN users AS u ON uc.user_id = u.user_id where uc.`user_post_id` = '".$row['user_post_id']."' AND uc.`status` = 'Accept' AND u.status = 'Active'";
                                                $que_comment = $db->query( $sql_comment );
                                                $fet_comment  = $que_comment->fetch_assoc();
                                                echo $count_comment = $fet_comment['count_comment'];
                                            ?>
                                        </td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td>
                                            <?php if($row['status'] == 'Accept'){ ?>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs userPost" data-id="<?php echo $row['user_post_id']; ?>">Reject</a></td>
                                            <?php }else{ ?>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs userPost" data-id="<?php echo $row['user_post_id']; ?>">Accept</a></td>
                                            <?php } ?>
                                            <?php //echo $row['status']; ?>
                                        </td>
                                        <td>
                                            <a href="view_post.php?id=<?php echo $row['user_post_id']; ?>" class="btn btn-info btn-xs" > view</a></td>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Full Name</th>
                                        <th>Email ID</th>
                                        <th>Image</th>
                                        <th>Caption</th>
                                        <th>Status</th>
                                        <th>Action</th>
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