<?php
include_once("conn.php");//连接数据库 
  
$email = stripslashes(trim($_POST['mail'])); 
    
$sql = "select qx_id,qx_name,qx_pass from `quanxians` where `email`='$email'"; 
$query = mysql_query($sql); 
$num = mysql_num_rows($query); 
if($num==0){//
  echo "<script type='text/javascript'>alert('该邮箱尚未注册！ ');location='javascript:history.back()';</script>"; 
  exit;   
}else{ 
  $row = mysql_fetch_array($query); 
  $getpasstime = time(); 
  $uid = $row['qx_id']; 
  $token = md5($uid.$row['qx_name'].$row['qx_pass']);//组合验证码 
  $url = "http://localhost:81/RSGLXT/login/yanzhenyouxiang.php?email=".$email." 
&token=".$token;//构造URL 
  $time = date('Y-m-d H:i'); 
  $result = sendmail($time,$email,$url); 
  if($result==1){//邮件发送成功 
    $msg = '系统已向您的邮箱发送了一封邮件<br/>请登录到您的邮箱及时重置您的密码！'; 
    //更新数据发送时间 
    mysql_query("update `quanxians` set `getpasstime`='$getpasstime' where qx_id='$uid '"); 
  }else{ 
    $msg = $result; 
  } 
  echo $msg; 
} 
  
//发送邮件 
function sendmail($time,$email,$url){ 
  include_once("smtp.class.php"); 
  $smtpserver = ""; //SMTP服务器，如smtp.163.com 
  $smtpserverport = 25; //SMTP服务器端口 
  $smtpusermail = ""; //SMTP服务器的用户邮箱 
  $smtpuser = ""; //SMTP服务器的用户帐号 
  $smtppass = ""; //SMTP服务器的用户密码 
  $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); 
  //这里面的一个true是表示使用身份验证,否则不使用身份验证. 
  $emailtype = "HTML"; //信件类型，文本:text；网页：HTML 
  $smtpemailto = $email; 
  $smtpemailfrom = $smtpusermail; 
  $emailsubject = "jb51.net - 找回密码"; 
  $emailbody = "亲爱的".$email."：<br/>您在".$time."提交了找回密码请求。请点击下面的链接重置密码 
（按钮24小时内有效）。<br/><a href='".$url."'target='_blank'>".$url."</a>"; 
  $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype); 
  
  return $rs; 
} 



?>