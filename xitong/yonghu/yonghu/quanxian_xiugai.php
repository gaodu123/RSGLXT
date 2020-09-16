<?php
//连接数据库
include 'conn.php';

//获取id
$qx_id = $_GET['qx_id'];
//编写查询sql语句
$sql = "SELECT * FROM `xitong_qx` WHERE `qx_id`=$qx_id";
//执行查询操作、处理结果集
$result = mysqli_query($link, $sql);
if (!$result) {
    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

//将二维数数组转化为一维数组
foreach ($data as $key => $value) {
  foreach ($value as $k => $v) {
    $arr[$k]=$v;
  }
}

// echo "<pre>";
// var_dump($arr);
// echo "</pre>";

?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>人事管理员信息</title>
		<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
 
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			body {
				background-image: url(student.jpg);
				background-size: 100%;
			}

			.box {
				display: table;
				margin: 0 auto;
			}

			h2 {
				text-align: center;
			}

			.add {
				margin-bottom: 20px;
			}
		</style>
	</head>
	<body>
		<!--输出定制表单-->
		<div class="box">
			<h2>您正在修改-<span style="size: 6px; color: #FF4500;"><?php echo $arr["qx_name"] ?></span>-信息</h2><br>
			<div class="add">
				<form action="quanxian_xiugai-two.php" method="post" enctype="multipart/form-data">
					<table class="table">
						<tr>
							<th>职 工 号：</th>
							<td><input type="text" name="qx_id" size="5" value="<?php echo $arr["qx_id"] ?>" readonly="readonly"></td>
						</tr>
						<tr>
							<th>姓　　名：</th>
							<td><input type="text" name="qx_name" size="25" value="<?php echo $arr["qx_name"] ?>" ></td>
						</tr>

						<tr>
							<th>密    码：</th>
							<td><input type="text" name="qx_pass" size="25" value="<?php echo $arr["qx_pass"] ?>"></td>
						</tr>
						
               <tr>
							<th>身份证号：</th>
							<td><input type="text" name="qx_sfzh" size="18" value="<?php echo $arr["qx_sfzh"] ?>"></td>
						</tr>

						<tr>
							<th>联系方式：</th>
							<td><input type="text" name="qx_phone" size="11" value="<?php echo $arr["qx_phone"] ?>"></td>
						</tr>

                      

						
						
							<th>用户类型：</th>

							<td> <select   name ="type" value="">

       <option ><?php echo $arr["type"] ?></option>
      <option value="普通用户">普通用户</option>
      <option value="院系管理员">院系管理员</option>
      <option value="人事管理员">人事管理员</option>
      <option value="系统管理员">系统管理员</option>
      
    </select></td>
							
						</tr>
						<tr>
							<th></th>
							<td>
								<input type="button" onClick="javascript :history.back(-1);" value="返回">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="submit" value="提交">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>







