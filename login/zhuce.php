<?php 
     header("Content-Type: text/html; charset=utf-8");

    if(!isset($_POST['submit'])){
        exit("错误执行");
    }//判断是否有submit操作

  $qx_id=$_POST['qx_id'];//post获取表单里的name
    $qx_pass=$_POST['qx_pass'];//post获取表单里的password
$type=$_POST['type'];
$qx_sfzh=$_POST['qx_sfzh'];
$qx_phone=$_POST['qx_phone'];
$email=$_POST['email'];
$qx_name=$_POST['qx_name'];
$type=$_POST['type'];
    include('conn.php');//链接数据库

$sql="select qx_id from xitong_qx where qx_id='$qx_id'"; 
// echo $sql; 8l
$query=mysql_query($sql); 
$rows = mysql_num_rows($query); 
if($rows > 0){ 
echo "<script type='text/javascript'>alert('用户已存在，请重新填写！');location='javascript:history.back()';</script>"; 
} else{ 





$q="insert into xitong_qx(qx_id,qx_pass,type,qx_name,qx_phone,email,  qx_sfzh) values ('$qx_id','$qx_pass','$type','$qx_name','$qx_phone','$email','$qx_sfzh')";//向数据库插入表单传来的值的sql
    $reslut=mysql_query($q,$con);//执行sql
    }
    if (!$reslut){
        die('Error: ' . mysql_error());//如果sql执行失败输出错误
    }else{

        
        


         header("refresh:0;url=http://localhost:81/RSGLXT/index.php");//成功输出注册成
    }

    

    mysql_close($con);//关闭数据库

?>

