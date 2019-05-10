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
            View Users
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Tickets</li>
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
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email ID</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //
                            $sql = "SELECT * FROM `users` ";
                            $que = $db->query( $sql );
                            if($que->num_rows > 0) {
                                $i = 0;
                                while ($row = $que->fetch_assoc()){
                                    $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['first_name']; ?></td>
                                        <td><?php echo $row['last_name']; ?></td>
                                        <td><?php echo $row['email_id']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td>
                                            <?php if($row['status'] == 'Active'){ ?>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs userActive" data-id="<?php echo $row['user_id']; ?>">Inactive</a></td>
                                        <?php }else{ ?>
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs userActive" data-id="<?php echo $row['user_id']; ?>">Active</a></td>
                                        <?php } ?>
                                    </tr>
                                    <?php
                                }
                            }
                                ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sr. No.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email ID</th>
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