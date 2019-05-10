<?php
include "../../../db/dbc8.php";
$postData = $_POST;
//$lab_solution = implode(' | ',$postData['lab_solution']);
//$lab_solution = $postData['lab_solution'];
$lab_solution= implode(' | ',$postData['lab_solution']);
$labhrs= implode(' | ',$postData['labhrs']);

$ip = $_SERVER['REMOTE_ADDR'];
$status = "";

echo "INSERT INTO `vmware_hol2_18` SET `first_name`='".$postData['first_name']."',`last_name`='".$postData['last_name']."',`company`='".$postData['company']."',`city`='".$postData['city']."',`department`='".$postData['department']."',`designation`='".$postData['designation']."',`mobile`='".$postData['mobile_no']."',`email_id`='".$postData['email']."',`technology`='".$postData['technology']."',`lab_solution`='".$lab_solution."',`labhrs`='".$labhrs."',`optin`='".$postData['optin']."'";


if(($postData['first_name'] != "") && ($postData['last_name'] != "") && ($postData['city'] != "") && ($postData['company'] != "") && ($postData['department'] != "")
    && ($postData['designation'] != "") && ($postData['email'] != "") && ($postData['mobile_no'] != "")) {
    $result = mysql_query("INSERT INTO `vmware_hol2_18` SET `first_name`='".$postData['first_name']."',`last_name`='".$postData['last_name']."',`company`='".$postData['company']."',`city`='".$postData['city']."',`department`='".$postData['department']."',`designation`='".$postData['designation']."',`mobile`='".$postData['mobile_no']."',`email_id`='".$postData['email']."',`technology`='".$postData['technology']."',`lab_solution`='".$lab_solution."',`labhrs`='".$labhrs."',`optin`='".$postData['optin']."'");
    if($result) {
        $status = 1;
        require_once('phpmailer/class.phpmailer.php');
        $email = $postData['email']; // Your Email Address
        $name = $name; // Your Name
        $mail  = new PHPMailer();
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host       = "localhost"; // SMTP server
        $mail->SMTPAuth = true;     // turn on SMTP authentication
        $mail->Username   = "vmwareevents@shobizresponse.com"; // SMTP account username
        $mail->Password   = "vmeevt$2209";        // SMTP account password
        $mail->Port = "25";
        $fromname="Vmware";
        $fromemail= "vmwareevents@shobizresponse.com";
        $mail->SetFrom( $fromemail , $fromname);
        $mail->AddReplyTo($fromemail , $fromname);
        $mail->AddAddress( $email , $postData['first_name']." ".$postData['last_name']);
        $mail->Subject    = "Hands-on Labs at vForum 2018 Mumbai";
        $message='<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>vForum</title>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="15" offset="0">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="100%" id="bodyTable" style="font-family:Arial, sans-serif;" >
  <tr>
    <td align="center" height="100%" valign="top" width="1244" id="bodyCell">
      <table class="contents" border="0" cellpadding="0" cellspacing="0" width="650" id="container">
        <tr>
			<td class="full-width-image" valign="top" align="left"><a href="http://shobizresponse.com/2018/vForum/register.html" target="_blank"><img src="http://shobizresponse.com/2018/vForum/Hol/images/hol/hol-reg.jpg" width="650" alt=""/></a></td>
        </tr>
		   <tr>
			<td class="full-width-image" valign="top" align="left"><img src="http://shobizresponse.com/2018/vForum/images/invite/section-shdw.png" width="650" alt=""/></td>
        </tr>
        <tr>
          <td valign="top" align="left" style="padding:50px 30px 50px 30px; text-align: center">
                <p><strong>Thank you for registering we will get back to you shortly.</strong></p>
        </td>
        </tr>
        <tr>
          <td valign="top" align="center" bgcolor="#333333" style="font-family:Arial, sans-serif; padding:10px 20px 20px 20px; font-size:11px; text-align:center; color:#ffffff;">
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td valign="top" align="center"><img src="http://shobizresponse.com/2018/vForum/images/invite/vmware-logo-white.png" width="130" /></td>
				</tr>
				<tr>
					<td valign="top" align="center" style="padding-top:15px;">
					<table border="0" cellpadding="0" cellspacing="0" width="258">
						<tr>
							<td width="30" valign="top" align="center" style="padding-right: 8px;"><a href="http://www.facebook.com/vmware" target="_blank"><img src="http://shobizresponse.com/2018/vForum/images/invite/icon-facebook.png" width="30" /></a></td>
							<td width="30" valign="top" align="center" style="padding-right: 8px;"><a href="https://twitter.com/VMware" target="_blank"><img src="http://shobizresponse.com/2018/vForum/images/invite/icon-twitter.png" width="30" /></a></td>
							<td width="30" valign="top" align="center" style="padding-right: 8px;"><a href="https://www.linkedin.com/company/vmware" target="_blank"><img src="http://shobizresponse.com/2018/vForum/images/invite/icon-linkedin.png" width="30" /></a></td>
							<td width="30" valign="top" align="center" style="padding-right: 8px;"><a href="http://blogs.vmware.com/" target="_blank"><img src="http://shobizresponse.com/2018/vForum/images/invite/icon-blog.png" width="30" /></a></td>
							<td width="30" valign="top" align="center" style="padding-right: 8px;"><a href="https://www.youtube.com/user/vmwaretv" target="_blank"><img src="http://shobizresponse.com/2018/vForum/images/invite/icon-youtube.png" width="30" /></a></td>
							<td width="30" valign="top" align="center" style="padding-right: 8px;"><a href="http://www.vmware.com/my_vmware/overview.html" target="_blank"><img src="http://shobizresponse.com/2018/vForum/images/invite/icon-vmware.png" width="30" /></a></td>
							<td width="30" valign="top" align="center"><a href="http://www.vmug.com/" target="_blank"><img src="http://shobizresponse.com/2018/vForum/images/invite/icon-vmug.png" width="30" /></a></td>
						</tr>
						</table>
					</td>
				</tr>
			  </table>
			</td>
        </tr>
      </table>
      </td>
  </tr>
  <tr>
      <td style="padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:10px;">
       <table cellpadding="0" cellspacing="0" align="center" width="650" class="contents">
       <tr>
       <td style="font-family:Arial, Helvetica, sans-serif; font-size:10px; line-height: 18px;">
       Copyright &copy; 2018 VMware, Inc. All rights reserved. VMware is a registered trademark of VMware, Inc.</td>
		   </tr>
		  </table>
        </td>
    </tr>
</table>
</body>
</html>';
        $from = 'Vmware <vmwareevents@shobizresponse.com>';
        $mail->MsgHTML( $message );
        $sendEmail = $mail->Send();
    } else {
        $status = 2;
    }
    echo $status;
}
?>