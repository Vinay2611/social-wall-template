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
                Group View Comment
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"> Group view comment</li>
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
                            <h3 class="box-title pull-right"><a href="group_comment_report.php" class="btn btn-success ">Download report</a></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Group</th>
                                    <th>Full Name</th>
                                    <th>Email ID</th>
                                    <th>Caption</th>
                                    <th>Comment</th>
                                    <th>Original Post By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                //
                                $sql = "SELECT uc.user_comment_id,uc.user_post_id,uc.comments,uc.status,u.first_name,u.last_name,u.email_id,up.caption,up.group_id FROM `users_comment` AS uc JOIN users AS u on uc.user_id = u.user_id JOIN users_post AS up ON up.user_post_id = uc.user_post_id WHERE u.status = 'Active' ORDER BY up.caption, uc.createdon DESC";
                                //$sql = "SELECT uc.user_comment_id,uc.user_post_id,uc.comments,uc.status,u.first_name,u.last_name,u.email_id,up.caption FROM `users_comment` AS uc JOIN users AS u on uc.user_id = u.user_id JOIN users_post AS up ON up.user_post_id = uc.user_post_id WHERE u.status = 'Active'";
                                //$sql = "SELECT uc.user_comment_id,uc.user_post_id,uc.comments,uc.status,u.first_name,u.last_name,u.email_id FROM `users_comment` AS uc JOIN users AS u on uc.user_id = u.user_id WHERE u.status = 'Active'";
                                $que = $db2->query( $sql );
                                if($que->num_rows > 0) {
                                    $i = 0;
                                    while ($row = $que->fetch_assoc()){
                                        $gp_name = '';
                                        if(!empty($row['group_id'])){
                                            $gp_name = $group_name[$row['group_id']];
                                        }

                                        $sql_post = "SELECT u.first_name,u.last_name,up.caption,u.email_id FROM `users_post` AS up JOIN users AS u ON up.user_id = u.user_id where up.`user_post_id` = '".$row["user_post_id"]."' AND up.`status` = 'Accept' AND u.status = 'Active'";
                                        //$sql_post = "SELECT * FROM `users_post` WHERE user_post_id = '$user_post_id'";
                                        $que_post = $db->query( $sql_post );
                                        $row_post = $que_post->fetch_assoc();
                                        $post_name_last = isset($row_post['email_id']) ? $row_post['email_id'] : '';

                                        $i++;
                                        ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $gp_name; ?></td>
                                            <td><?php echo $row['first_name']. " ".$row['last_name']; ?></td>
                                            <td><?php echo $row['email_id']; ?></td>
                                            <td><?php echo truncate($row['caption'],50); ?></td>
                                            <td><?php echo $row['comments']; ?></td>
                                            <td><?php echo $post_name_last; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                            <td>
                                                <?php if($row['status'] == 'Accept'){ ?>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-xs GroupUserComment" data-id="<?php echo $row['user_comment_id']; ?>">Reject</a>
                                            <?php }else{ ?>
                                                <a href="javascript:void(0);" class="btn btn-primary btn-xs GroupUserComment" data-id="<?php echo $row['user_comment_id']; ?>">Accept</a>
                                            <?php } ?>
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
                                    <th>Group</th>
                                    <th>Full Name</th>
                                    <th>Email ID</th>
                                    <th>Caption</th>
                                    <th>Comment</th>
                                    <th>Original Post By</th>
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