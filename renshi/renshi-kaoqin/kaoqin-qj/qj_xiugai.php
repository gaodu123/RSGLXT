<?php
//连接数据库
include 'conn.php';

//获取id
$qj_id = $_GET['qj_id'];
//编写查询sql语句i
$sql = "SELECT * FROM `renshi_kq_qj` WHERE `qj_id`=$qj_id";
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
			<h2>您正在修改-<span style="size: 6px; color: #FF4500;"><?php echo $arr["qj_name"] ?></span>-信息</h2><br>
			<div class="add">
				<form action="qj_xiugai-two.php" method="post" enctype="multipart/form-data">
					<table class="table">
						<tr>
							<th>编　　号：</th>
							<td><input type="text" name="qj_id" size="5" value="<?php echo $arr["qj_id"] ?>" readonly="readonly"></td>
						</tr>
						<tr>
							<th>姓　　名：</th>
							<td><input type="text" name="qj_name" size="25" value="<?php echo $arr["qj_name"] ?>" readonly="readonly"></td>
						</tr>

						<tr>
							<th>性    别：</th>
							<td><input type="text" name="qj_gender" size="25" value="<?php echo $arr["qj_gender"] ?>"></td>
						</tr>
						
                      <tr>
							<th>分    院：</th>
							<td><input type="text" name="qj_fenyuan" size="11" value="<?php echo $arr["qj_fenyuan"] ?>" readonly="readonly"></td>
						</tr>

                      <tr>
							<th>部    门：</th>
							<td><input type="text" name="qj_bumen" size="11" value="<?php echo $arr["qj_bumen"] ?>"></td>
						</tr>

                        <tr>
							<th>职    务：</th>
							<td><input type="text" name="qj_zc" size="25" value="<?php echo $arr["qj_zc"] ?>"></td>
						</tr>
						 <tr>
							<th>请假天数：</th>
							<td><input type="text" name="qj_qjts" size="25" value="<?php echo $arr["qj_qjts"] ?>"></td>
						</tr>

                          <tr>
							<th>请假原因：</th>
							<td><input type="text" name="qj_qjyy" size="18" value="<?php echo $arr["qj_qjyy"] ?>"></td>
						</tr>

						<tr>
							<th>开始日期：</th>
							<td><input type="text" name="qj_qjksrq" size="11" value="<?php echo $arr["qj_qjksrq"] ?>"></td>
						</tr>

                        <tr>
							<th>结束日期：</th>
							<td><input type="text" name="qj_zzrq" size="25" value="<?php echo $arr["qj_zzrq"] ?>"></td>
						</tr>
						 <tr>
							<th>批准人：</th>
							<td><input type="text" name="qj_pzr" size="25" value="<?php echo $arr["qj_pzr"] ?>"></td>
						</tr>

                          <tr>
							<th>请假日期：</th>
							<td><input type="text" name="qj_qjrq" size="18" value="<?php echo $arr["qj_qjrq"] ?>"></td>
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







