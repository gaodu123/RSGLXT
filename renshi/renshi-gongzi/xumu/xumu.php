

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
  

<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  style="background: #008800;color: #FFFFFF; " >   <span class="glyphicon glyphicon-plus-sign"></span>添加用户</button>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">
          
  <div class="box">
      <h2 align="center">添加信息</h2>
      <div class="add">
        <form action="xumu_add.php" method="post" enctype="multipart/form-data">
          <table class="table">
             <tr>
              <th>职工编号：</th>
              <td><input type="text" name="xm_id" ></td>
            </tr>
            <tr>
              <th>姓　　名：</th>
              <td><input type="text" name="xm_name"  ></td>
            </tr>
          
            <tr>
              <th>分    院：</th>
              <td><input type="text" name="xm_fenyuan"  ></td>
            </tr>
            
           <tr>
              <th>职    位：</th>
              <td><input type="text" name="xm_zc" ></td>
            </tr>

             <tr>
              <th>身份证号：</th>
              <td><input type="text" name="xm_sfzh"></td>
            </tr>
             <tr>
              <th>基本工资：</th>
              <td><input type="text" name="xm_jbgz"></td>
            </tr>
            
             <tr>
              <th>岗位工资：</th>
              <td><input type="text" name="xm_gwgz" ></td>
            </tr>
           
           
            <tr>
              <th>绩效：</th>
              <td><input type="text" name="xm_jixiao" ></td>
            </tr>
            <tr>
              <th>请假扣款：</th>
              <td><input type="text" name="xm_qjiakk" ></td>
            </tr>
            <tr>
              <th>医疗社保：</th>
              <td><input type="text" name="xm_ylsb" ></td>
            </tr>
             <tr>
              <th>奖金：</th>
              <td><input type="text" name="xm_jiangjin" ></td>
            </tr>
            <tr>
              <th>实发工资：</th>
              <td><input type="text" name="xm_sfgz" ></td>
            </tr>

            <tr>
              <th>发放日期：</th>
              <td><input type="text" name="xm_ffny" ></td>
            </tr>
            <tr>
              <th></th>
              <td>
                
                <input type="reset" value="重置">&nbsp;&nbsp;&nbsp;
                <input type="submit" value="提交">&nbsp;&nbsp;&nbsp;
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>

  
</div>
          
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
 &nbsp; &nbsp;  &nbsp; &nbsp; 

      <form class="navbar-form navbar-right  ml-5" action="xumu_chaxun.php" method="get" enctype="multipart/form-data">
           <div class="form-group">
           
              <input name="xm_id" type="text" class="form-control" placeholder="请输入职工号">
              <button type="submit" class="btn btn-default" style="background: #55AA00; color: #FFFFFF">  <span class="glyphicon glyphicon-search"></span></button>
           </div>
           
         </form>




</div>


</div>


 </div>

   <div class="col-sm-12 ">

<?php 
include 'conn.php';

$num_rec_per_page=5;   // 每页显示数量

    // 数据库名
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM renshi_gz_xm LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysqli_query ($link,$sql); // 查询数据
?> 
<div class="table-responsive">
 


   <h3  align="center"  style=" font-family:'Arial Negreta', 'Arial Normal', 'Arial';
  font-weight:700;
  font-style:normal; 
  font-size:24px;
  
" >
  
<?php
  //连接数据库
  include 'conn.php';

 


  //编写查询sql语句
  $sql = "SELECT * FROM `renshi_gz_xm` ";
  //执行查询操作、处理结果集
  $result = mysqli_query($link, $sql);
  if (!$result) {
      exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
  }
  $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
  if (!$data) {
    //输出提示，跳转到首页
    echo "<center>"."<br><br><br><br><br><br>查找不到该用户！"."</center>";
    header('Refresh: 2; url=xumu.php');  //3s后跳转
    exit();
  }
  //将二维数数组转化为一维数组
  foreach ($data as $key => $value) {
    foreach ($value as $k => $v) {
      $arr[$k]=$v;
    }
  }

?>

<?php echo $arr["xm_fenyuan"] ?>
</h3>


<table class="table">
  <thead>
<tr style="background: #F5F5F5 ">
   
        <td align="center">职工号</td>
        <td align="center">姓名</td>
       
       
       
       <td align="center">分院</td>
       <td align="center">职位</td>
        <td align="center">身份证号</td>
         <td align="center">基本工资</td>
        <td align="center">岗位工资</td>
        
       <td align="center">绩效</td>
        <td  align="center">请假扣款</td>
     
          <td  align="center">医疗社保</td>
          <td  align="center">奖金</td>
     
          <td  align="center">实发工资</td>
            <td  align="center">发放日期</td>
       
             <td align="center">操作</td>
      </tr>
    </thead>
    <tbody>
<?php 
while ($row = mysqli_fetch_assoc($rs_result)) { 
?> 
 

            <tr>
            
              <td align="center"><?php echo $row['xm_id']; ?></td>
            <td align="center"><?php echo $row['xm_name']; ?></td>  
           
           
            <td align="center"><?php echo $row['xm_fenyuan']; ?></td>  
               <td align="center"><?php echo $row['xm_zc']; ?></td>  
            <td align="center"><?php echo $row['xm_sfzh']; ?></td> 
              <td align="center"><?php echo $row['xm_jbgz']; ?></td>   
            <td align="center"><?php echo $row['xm_gwgz']; ?></td>   
            <td align="center"><?php echo $row['xm_jixiao']; ?></td>   
            <td align="center"><?php echo $row['xm_qjiakk']; ?></td> 
             <td align="center"><?php echo $row['xm_ylsb']; ?></td>  
               <td align="center"><?php echo $row['xm_jiangjin']; ?></td>   
            <td align="center"><?php echo $row['xm_sfgz']; ?></td>  
             <td align="center"><?php echo $row['xm_ffny']; ?></td>   
           
    
<?php 

echo "<td align='center'>
<a href='javascript:del({$row['xm_id']})'> <span class='glyphicon glyphicon-trash' style='color: #AA0000'></span></a>

<a href='xumu_xiugai.php?xm_id={$row['xm_id']}'>  <span class='glyphicon glyphicon-pencil' style='color:#227700'></span></a>



</td>";
         
      ?>    
<?php 
}; 
?> 
</tr>
</tbody>

</table>
</div>
<br><br><br><br>
<?php 
$sql = "SELECT * FROM renshi_gz_xm"; 
$rs_result = mysqli_query($link,$sql); //查询数据
$total_records = mysqli_num_rows($rs_result);  // 统计总共的记录条数
$total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数
?>
<center>
 
 


<?php
echo "<a href='xumu.php?page=1'  style='color: #227700; size: 18px;'>".'首页<'."</a> "; // 第一页
?>
&nbsp;&nbsp;



<?php
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='xumu.php?page=".$i."' style='color: #227700; size: 18px;'>".'&nbsp;&nbsp;&nbsp;'.$i.'&nbsp;&nbsp;&nbsp;'."</a> "; 




}; 
?>
&nbsp;&nbsp;




<?php
echo "<a href='xumu.php?page=$total_pages' style='color: #227700; size: 18px;'>".' >尾页'."</a> "; // 最后一页
?>

</center>










   </div>



    </div>
</div>
 </div>

</body>


 <script>
      layui.use(['laydate','form'], function(){
        var laydate = layui.laydate;
        var  form = layui.form;


        // 监听全选
        form.on('checkbox(checkall)', function(data){

          if(data.elem.checked){
            $('tbody input').prop('checked',true);
          }else{
            $('tbody input').prop('checked',false);
          }
          form.render('checkbox');
        }); 
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });


      });

       



//用户删除
 function del(xm_id) {
        if (confirm("确定删除该记录吗？")) {
          window.location = "xumu_del.php?xm_id=" + xm_id;
        }
      }
    



      function delAll (argument) {
        var xx_id = [];

        // 获取选中的id 
        $('tbody input').each(function(index, el) {
            if($(this).prop('checked')){
              id.push($(this).val())
            }
        });
  
        layer.confirm('确认要删除吗？'+id.toString(),function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
      }
    </script>

   
</html>