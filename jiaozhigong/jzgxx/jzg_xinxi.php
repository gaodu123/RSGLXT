

<!DOCTYPE html>
<html>
<head>
   
<title>人事管理员</title>
<meta charset="utf-8">
<meta name="viewport".content="width=device-width,intial-sca" >

<!-- 新 Bootstrap 核心 CSS 文件 -->
<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
 
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">


body
{
  align:center;

   
}
td{
  font-size:13px;
  align:center;
    text-align:center;

}

h1{
  
  align:center;
}
p
{
    align:center;
    text-align:center;
    font-size:40px;}
    
tr{
  align:center;
}
td{
  align:center;
}

.bj{
   background:url(https://ss3.bdstatic.com/70cFv8Sh_Q1YnxGkpoWK1HF6hhy/it/u=464199870,2033347929&fm=11&gp=0.jpg);
    background-size:100% 100%;
    background-repeat:no-repeat;
}
#bj2{
  background:url(https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=476417822,2986159757&fm=26&gp=0.jpg);
    background-size:100% 100%;
    background-repeat:no-repeat;
}

#jz{
text-align: center;

}
#ziti{
  font-color: #FFFFFF;
}

#rcorners2 {
    border-radius: 25px;
    background-color: red; /* 浏览器不支持时显示 */
    background-image: linear-gradient(#e66465, #9198e5);
    
}

#rcorners3 {
    border-radius: 25px;
    border: 2px solid #FFFFFF;
    
     
    align:center;
}
.mx-5 {
  margin-left: 3rem !important;
}
.mx-1{
   margin-left: 6rem !important;
}
.mx-2{
  margin-left: 10rem !important;
}
.ml-5{
   margin-right:1rem !important;
}
}
}
#example3 {
    border: 10px dotted black;
    padding:35px;
    background-image: linear-gradient(#e66465, #9198e5);
    background-clip: content-box;
}
.button
 {background-color: #4CAF50;}

</style>
</head>
<body  > 

 

<div class="panel panel-default">
    <div class="panel-body">
   
  <div class="form-inline" role="form">
    <div class="row">
      <div class="col-md-12 ">

<div class="btn-toolbar" role="toolbar">
  
 <button  class="btn btn-primary btn-lg" style="background:  #AA0000"   onclick="delAll()"> <span class="glyphicon glyphicon-minus-sign"></span>打印</button>
&nbsp; &nbsp; 


  
</div>
          
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>





</div>


</div>


<br>

   <div class="col-sm-12 ">

<?php
//连接数据库
include 'conns.php';

//编写查询sql语句
$sql = 'SELECT * FROM `quanxians`';
//执行查询操作、处理结果集
  $result = mysqli_query($link, $sql);
  if (!$result) {
      exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
  }
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
  if (!$data) {
    //输出提示，跳转到首页
    echo "<center>"."<br><br><br><br><br><br>查找不到该用户！"."</center>";
    header('Refresh: 2; url=jzg.php');  //3s后跳转
    exit();
  }
  //将二维数数组转化为一维数组
  foreach ($data as $key => $value) {
    foreach ($value as $k => $v) {
      $arr[$k]=$v;
    }
  }

?>


  
<!--输出定制表单-->
   <div class="table-responsive">
        <form action="" method="post" enctype="multipart/form-data">
            
          
          <table border="1" class="table table-condensed">

 <tr >
  <td align="center" width="80px;">职工号</td><td align="center" width="100px;"><?php echo $arr["qx_id"] ?></td>
  <td align="center" width="80px;">姓名</td>  <td align="center"width="100px;"><?php echo $arr["qx_name"] ?></td>
  <td align="center" width="80px;">性别</td> <td align="center" width="100px;"><?php echo $arr["gender"] ?></td>
   
 </tr>

<tr>
  <td align="center" width="80px;">身份证号</td><td align="center" colspan="3"><?php echo $arr["qx_sfzh"] ?></td>
  <td align="center" width="80px;">民族</td><td align="center" ><?php echo $arr["mz"] ?></td>
</tr>

<tr>

   <td align="center" width="80px;">邮箱</td><td align="center" colspan="2"><?php echo $arr["eamil"] ?></td>
  <td align="center" width="80px;">联系方式</td><td align="center" colspan="2"><?php echo $arr["qx_phone"] ?></td>

</tr>

<tr>
  <td align="center" width="80px;">学历</td><td align="center" colspan="3"><?php echo $arr["qx_sfzh"] ?></td>
  <td align="center" width="80px;">民族</td><td align="center" colspan="2"><?php echo $arr["mz"] ?></td>
</tr>



<tr>

   <td align="center" width="80px;">政治面貌</td><td align="center" ><?php echo $arr["zzmm"] ?></td>
  <td align="center" width="80px;">籍贯</td><td align="center" colspan="3"><?php echo $arr["jiguan"] ?></td>

</tr>

<tr>

   <td align="center" width="80px;">学历</td><td align="center" ><?php echo $arr["xueli"] ?></td>
  <td align="center" width="80px;">职位</td><td align="center"><?php echo $arr["zc"] ?></td>
   <td align="center" width="80px;">分院</td><td align="center" ><?php echo $arr["fenyuan"] ?></td>

</tr>









            </table>
            <br><br><br><br><br><br>
            
     

</form></div>




 
</body>


 

   
</html>