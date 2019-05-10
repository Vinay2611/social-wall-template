<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 22-11-2018
 * Time: 14:21
 */


require '../include/dbconn.php';

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


$sql = "SELECT u.first_name ,u.last_name,u.email_id,up.image,up.caption,up.status,up.user_post_id,up.createdon,up.group_id FROM `users_post` AS up JOIN  users AS u on up.user_id = u.user_id WHERE u.status = 'Active' ORDER BY up.createdon desc ";
//$sql = "SELECT u.first_name,u.last_name,u.email_id,up.image,up.caption,up.status,up.user_post_id FROM `users_post` AS up JOIN  users AS u on up.user_id = u.user_id WHERE u.status = 'Active'";
$que = $db2->query( $sql );
$data_array = array();
if($que->num_rows > 0) {
    $i = 0;
    $developer_records[] = array( 'Group','Full Name','E-mail', 'Image', 'Caption', 'No. of likes', 'No. of comment', 'Status' );

    while ($row = $que->fetch_assoc()) {

        //$developer_records[] = $row;
        $gp_name = '';
        if(!empty($row['group_id'])){
            $gp_name = $group_name[$row['group_id']];
        }

        $full_name = $row['first_name']." ".$row['last_name'];
        $post_img = "";
        if (!empty($row['image'])){
            $post_img = "http://ems.hobnobspace.com/social-wall/uploads/".$row['image'];
        }


        //Count no of likes
        $sql_like   = "SELECT count(user_like) AS user_like FROM `users_like` where `user_post_id` = '".$row['user_post_id']."' AND `user_like` = 1";
        $que_like   = $db2->query( $sql_like );
        $fet_like   = $que_like->fetch_assoc();
        $count_like = $fet_like['user_like'];

        //Count no of comments
        $sql_comment = "SELECT COUNT(uc.user_comment_id) AS count_comment FROM `users_comment` AS uc JOIN users AS u ON uc.user_id = u.user_id where uc.`user_post_id` = '".$row['user_post_id']."' AND uc.`status` = 'Accept' AND u.status = 'Active'";
        $que_comment = $db2->query( $sql_comment );
        $fet_comment  = $que_comment->fetch_assoc();
        $count_comment = $fet_comment['count_comment'];

        $developer_records[] = array( $gp_name ,$full_name , $row['email_id'] , $post_img , $row['caption'] , $count_like , $count_comment , $row['status'] );
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