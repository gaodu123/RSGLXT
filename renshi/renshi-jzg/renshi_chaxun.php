<?php
	//连接数据库
	include 'conn.php';

	//获取id
	$id = $_GET['id'];


	//编写查询sql语句
	$sql = "SELECT * FROM `renshi_jzg` WHERE `id`=$id";
	//执行查询操作、处理结果集
	$result = mysqli_query($link, $sql);
	if (!$result) {
	    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
	}
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	if (!$data) {
		//输出提示，跳转到首页
		echo "<center>"."<br><br><br><br><br><br>查找不到该用户！"."</center>";
		header('Refresh: 2; url=renshi_quanxian.php');  //3s后跳转
		exit();
	}
	//将二维数数组转化为一维数组
	foreach ($data as $key => $value) {
	  foreach ($value as $k => $v) {
	    $arr[$k]=$v;
	  }
	}





?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>学生信息管理系统</title>
		

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
   background:url("first/images/bg.jpg");
    background-size:100% 100%;
    background-repeat:no-repeat;
}
s

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
   margin-left: 4rem !important;
}
.mx-2{
  margin-left: 10rem !important;
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
	<body>
		
		<div class="form-inline" role="form">
    <div class="row">
      <div class="col-sm-11  mx-1">
      	<br><br>
<!--输出定制表单-->
	 <div class="table-responsive">
				<form action="renshi_quanxian.php" method="post" enctype="multipart/form-data">
            
					<h3 align="center"><?php echo $arr["zgname"] ?>&nbsp;信息</h3>
					<br>
					<table class="table">
						<thead>
						<tr style="background: #F5F5F5 ">
							<td align="center">职工号</td>
        <td align="center">姓名</td>
     
       <td align="center">性别</td>
       <td align="center">年龄</td>
       <td align="center">民族</td>
       <td align="center">身份证号</td>
        <td  align="center">联系方式</td>
      <td align="center">政治面貌</td>
        <td align="center">籍贯</td>
      <td align="center">学历</td>
        <td align="center">职位</td>
           
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="center"><?php echo $arr["id"] ?></td>
							<td align="center"><?php echo $arr["zgname"] ?></td>
						   <td align="center"><?php echo $arr["zggender"] ?></td>
						   
						    <td align="center"><?php echo $arr["age"] ?></td>
						    <td align="center"><?php echo $arr["mz"] ?></td>
						    <td align="center"><?php echo $arr["sfzh"] ?></td>
						    <td align="center"><?php echo $arr["phone"] ?></td>
						   
						    <td align="center"><?php echo $arr["zzmm"] ?></td>
						    <td align="center"><?php echo $arr["jiguan"] ?></td>
						    <td align="center"><?php echo $arr["xueli"] ?></td>
						    <td align="center"><?php echo $arr["zc"] ?></td>





						</tr>
					</tbody>
						</table>
						<br><br><br><br><br><br>
						<center>
						<div>
							
							
								<input type="button" onClick="javascript :history.back(-1);" value="返回">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="确定">
							
						</div>
					</center>
				</form>
			</div>
			</div>
		</div></div></div>
	</body>
</html>






