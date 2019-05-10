<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 22-11-2018
 * Time: 14:22
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



$sql = "SELECT uc.user_comment_id,uc.user_post_id,uc.comments,uc.status,u.first_name,u.last_name,u.email_id,up.caption,up.group_id FROM `users_comment` AS uc JOIN users AS u on uc.user_id = u.user_id JOIN users_post AS up ON up.user_post_id = uc.user_post_id WHERE u.status = 'Active' ORDER BY up.caption, uc.createdon DESC";
//$sql = "SELECT u.first_name,u.last_name,u.email_id,up.image,up.caption,up.status,up.user_post_id FROM `users_post` AS up JOIN  users AS u on up.user_id = u.user_id WHERE u.status = 'Active'";
$que = $db2->query( $sql );
$data_array = array();
if($que->num_rows > 0) {
    $i = 0;
    $developer_records[] = array( 'Group','Full Name','E-mail', 'Captions', 'Comments', 'Group Email', 'Status' );

    while ($row = $que->fetch_assoc()) {
        //$developer_records[] = $row;
        $gp_name = '';
        if(!empty($row['group_id'])){
            $gp_name = $group_name[$row['group_id']];
        }

        $sql_post = "SELECT u.first_name,u.last_name,up.caption,u.email_id FROM `users_post` AS up JOIN users AS u ON up.user_id = u.user_id where up.`user_post_id` = '".$row["user_post_id"]."' AND up.`status` = 'Accept' AND u.status = 'Active'";
        //$sql_post = "SELECT * FROM `users_post` WHERE user_post_id = '$user_post_id'";
        $que_post = $db->query( $sql_post );
        $row_post = $que_post->fetch_assoc();
        $post_name_last = isset($row_post['email_id']) ? $row_post['email_id'] : '';


        $full_name = $row['first_name']." ".$row['last_name'];
        $caption = trim(preg_replace('/\s\s+/', ' ', $row['caption'] ));
        $comment = trim(preg_replace('/\s\s+/', ' ', $row['comments'] ));
        $developer_records[] = array( $gp_name ,$full_name , $row['email_id'] , $caption  , $comment , $post_name_last , $row['status'] );
    }
}

/*echo '<pre>';
var_dump($developer_records);
die();*/
$filename = "group_comment_data_export_".date('Ymd') . ".xls";
header("Content-Type: application/vnd.ms-excel; charset=UTF-8; encoding=UTF-8");
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
        //echo implode("\t", array_values($record)) . "\n";
    }
}
exit;

?>