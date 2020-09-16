


<?PHP
     header("Content-Type: text/html; charset=utf-8");
    if(!isset($_POST["submit"])){
        exit("错误执行");
    }//检测是否有submit操作 
session_start();
    include('conn.php');


 $qx_id = $_POST['qx_id'];//post获得用户名表单值
    $qx_pass = $_POST['qx_pass'];//post获得用户密码单值

$qx_name=$_POST['qx_name'];


$q="select * from xitong_qx where qx_id ='$qx_id'"; 
// echo $sql; 8l
$query=mysql_query($q); 
$result = mysql_num_rows($query); 
if(!$result){ 
echo "<script type='text/javascript'>alert('用户名不存在，请先注册！');location='javascript:history.back()';</script>"; 
}  elseif ($qx_id && $qx_pass  && $qx_name){//如果用户名和密码都不为空
             $sql = "select * from xitong_qx where qx_id ='$qx_id' and qx_pass='$qx_pass' and qx_name='$qx_name' and type='普通用户'";//检测数据库是否有对应的username和password的sql
             $result = mysql_query($sql);//执行sql
             $rows=mysql_num_rows($result);//返回一个数值
             if($rows){
             //0 false 1 true
              $_SESSION['qx_name'] = $qx_name;
               $_SESSION['qx_id'] = $qx_id;
               
                   header("refresh:2;url=http://localhost:81/RSGLXT/jiaozhigong/index.php");//如果成功跳转至welcome.html页面
                   exit;
           }elseif($qx_id && $qx_pass  && $qx_name){//如果用户名和密码都不为空
              $sql = "select * from xitong_qx where qx_id = '$qx_id' and qx_pass='$qx_pass' and qx_name='$qx_name'  and type='人事管理员'";//检测数据库是否有对应的username和password的sql
             $result = mysql_query($sql);//执行sql
             $rows=mysql_num_rows($result);//返回一个数值
             if($rows){//0 false 1 true
              $_SESSION['qx_name'] = $qx_name;
               $_SESSION['qx_id'] = $qx_id;
            
                   header("refresh:2;url=http://localhost:81/RSGLXT/renshi/index.php");//如果成功跳转至welcome.html页面
                   exit;
            }elseif($qx_id && $qx_pass && $qx_name){//如果用户名和密码都不为空
             $sql = "select * from xitong_qx where qx_id = '$qx_id' and qx_pass='$qx_pass'  and qx_name='$qx_name' and type='系统管理员'";//检测数据库是否有对应的username和password的sql
             $result = mysql_query($sql);//执行sql
             $rows=mysql_num_rows($result);//返回一个数值
             if($rows){
             
             $_SESSION['qx_name'] = $qx_name;
              $_SESSION['qx_id'] = $qx_id;
            //0 false 1 true
                   header("refresh:2;url=http://localhost:81/RSGLXT/xitong/index.php");//如果成功跳转至welcome.html页面
                   exit;
           
           }elseif($qx_id && $qx_pass && $qx_name){//如果用户名和密码都不为空
             $sql = "select * from xitong_qx where qx_id = '$qx_id' and qx_pass='$qx_pass'  and qx_name='$qx_name' and type='院系管理员'";//检测数据库是否有对应的username和password的sql
             $result = mysql_query($sql);//执行sql
             $rows=mysql_num_rows($result);//返回一个数值
             if($rows){
             
             $_SESSION['qx_name'] = $qx_name;
              $_SESSION['qx_id'] = $qx_id;
            //0 false 1 true
                   header("refresh:2;url=http://localhost:81/RSGLXT/yuanxi/index.php");//如果成功跳转至welcome.html页面
                   exit;
           
           }
           else{
                echo "<script type='text/javascript'>alert('职工号或密码错误！');location='javascript:history.back()';</script>";
                header("refresh:2;url=index.html");//如果错误使用js 1秒后跳转到登录页面重试，让其从新进行输入
             }
             

    }}}}else{//如果用户名或密码有空
                echo "<script type='text/javascript'>alert('填写不完整，请返回重新填写！');location='javascript:history.back()';</script>";
                 header("refresh:2;url=index.html");
                        //如果错误使用js 1秒后跳转到登录页面重试，让其从新进行输入
    }

    mysql_close();//关闭数据库
?>