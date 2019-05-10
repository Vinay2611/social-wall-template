<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 22-11-2018
 * Time: 14:21
 */


require '../include/dbconn.php';

$sql = "SELECT u.first_name ,u.last_name,u.email_id,up.image,up.caption,up.status,up.user_post_id,up.createdon FROM `users_post` AS up JOIN  users AS u on up.user_id = u.user_id WHERE u.status = 'Active' ORDER BY up.createdon desc ";
//$sql = "SELECT u.first_name,u.last_name,u.email_id,up.image,up.caption,up.status,up.user_post_id FROM `users_post` AS up JOIN  users AS u on up.user_id = u.user_id WHERE u.status = 'Active'";
$que = $db->query( $sql );
$data_array = array();
if($que->num_rows > 0) {
    $i = 0;
    $developer_records[] = array('Full Name','E-mail', 'Image', 'Caption', 'No. of likes', 'No. of comment', 'Status' );

    while ($row = $que->fetch_assoc()) {
        //$developer_records[] = $row;
        $full_name = $row['first_name']." ".$row['last_name'];
        $post_img = "";
        if (!empty($row['image'])){
            $post_img = "http://ems.hobnobspace.com/social-wall/uploads/".$row['image'];
        }


        //Count no of likes
        $sql_like   = "SELECT count(user_like) AS user_like FROM `users_like` where `user_post_id` = '".$row['user_post_id']."' AND `user_like` = 1";
        $que_like   = $db->query( $sql_like );
        $fet_like   = $que_like->fetch_assoc();
        $count_like = $fet_like['user_like'];

        //Count no of comments
        $sql_comment = "SELECT COUNT(uc.user_comment_id) AS count_comment FROM `users_comment` AS uc JOIN users AS u ON uc.user_id = u.user_id where uc.`user_post_id` = '".$row['user_post_id']."' AND uc.`status` = 'Accept' AND u.status = 'Active'";
        $que_comment = $db->query( $sql_comment );
        $fet_comment  = $que_comment->fetch_assoc();
        $count_comment = $fet_comment['count_comment'];

        $developer_records[] = array( $full_name , $row['email_id'] , $post_img , $row['caption'] , $count_like , $count_comment , $row['status'] );
    }
}

/*echo '<pre>';
var_dump($developer_records);
die();*/
$filename = "post_data_export_".date('Ymd') . ".xls";
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");
$show_coloumn = false;
if(!empty($developer_records)) {
    foreach($developer_records as $record) {
        if(!$show_coloumn) {
            // display field/column names in first row
            //echo implode("\t", array_keys($record)) . "\n";
            $show_coloumn = true;
        }
        echo implode("\t", array_values($record)) . "\n";
    }
}
exit;

?>