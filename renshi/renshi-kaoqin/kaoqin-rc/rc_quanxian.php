

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
  

<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"  style="background: #008800;color: #FFFFFF">   <span class="glyphicon glyphicon-plus-sign"></span>添加记录</button>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">
          
  <div class="box">
      <h2 align="center">添加消息</h2>
      <div class="add">
        <form action="rc_adds.php" method="post" enctype="multipart/form-data">
          <table class="table">
             <tr>
              <th>职工编号：</th>
              <td><input type="text" name="rc_id" ></td>
            </tr>
            <tr>
              <th>姓　　名：</th>
              <td><input type="text" name="rc_name"  ></td>
            </tr>
           <tr>
              <th>分    院：</th>
              <td><input type="text" name="rc_fenyuan"  ></td>
            </tr>
            <tr>
              <th>考勤类型：</th>
              <td><input type="text" name="rc_leixin"  ></td>
            </tr>
            <tr>
              <th>考勤日期：</th>
              <td><input type="text" name="rc_kqrq"  ></td>
            </tr>
            

             <tr>
              <th>考勤方式：</th>
              <td><input type="text" name="rc_fangshi"></td>
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

      <form class="navbar-form navbar-right  ml-5" action="rc_chaxun.php" method="get" enctype="multipart/form-data">
           <div class="form-group">
           
              <input name="rc_id" type="text" class="form-control" placeholder="请输入职工号">
              <button type="submit" class="btn btn-default" style="background: #55AA00; color: #FFFFFF">  <span class="glyphicon glyphicon-search"></span></button>
           </div>
           
         </form>




</div>


</div>


 </div><br>

   <div class="col-sm-12 ">

<?php 
include 'conn.php';

$num_rec_per_page=5;   // 每页显示数量

    // 数据库名
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM renshi_kq_rc LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysqli_query ($link,$sql); // 查询数据
?> 
<div class="table-responsive">
  <br>
<table class="table">
  <thead>
<tr style="background: #F5F5F5 ">
   
        <td align="center">职工号</td>
        <td align="center">姓名</td>
        
       <td align="center">分院</td>
        <td  align="center">考勤类型</td>
     
       <td align="center">考勤日期</td>
        <td align="center">考勤方式</td>
        
             <td align="center">操作</td>
      </tr>
    </thead>
    <tbody>
<?php 
while ($row = mysqli_fetch_assoc($rs_result)) { 
?> 
 

            <tr>
              
            <td align="center"><?php echo $row['rc_id']; ?></td>
            <td align="center"><?php echo $row['rc_name']; ?></td>  
           
            <td align="center"><?php echo $row['rc_fenyuan']; ?></td>   
            <td align="center"><?php echo $row['rc_leixin']; ?></td>   
            <td align="center"><?php echo $row['rc_kqrq']; ?></td>   
            <td align="center"><?php echo $row['rc_fangshi']; ?></td> 
             
    
<?php 

echo "<td align='center'>
<a href='javascript:del({$row['rc_id']})'> <span class='glyphicon glyphicon-trash' style='color: #AA0000'></span></a>

<a href='rc_xiugai.php?rc_id={$row['rc_id']}'>  <span class='glyphicon glyphicon-pencil' style='color:#227700'></span></a>



</td>";
         
      ?>   
<?php 
}; 
?> 
</tr>
</tbody>

</table>
</div>
<?php 
$sql = "SELECT * FROM  renshi_kq_rc "; 
$rs_result = mysqli_query($link,$sql); //查询数据
$total_records = mysqli_num_rows($rs_result);  // 统计总共的记录条数
$total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数
?>
<center>
 
 


<?php
echo "<a href='rc_quanxian.php?page=1'  style='color: #227700; size: 18px;'>".'首页<'."</a> "; // 第一页
?>
&nbsp;&nbsp;



<?php
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='rc_quanxian.php?page=".$i."' style='color: #227700; size: 18px;'>".'&nbsp;&nbsp;&nbsp;'.$i.'&nbsp;&nbsp;&nbsp;'."</a> "; 




}; 
?>
&nbsp;&nbsp;




<?php
echo "<a href='rc_quanxian.php?page=$total_pages' style='color: #227700; size: 18px;'>".' >尾页'."</a> "; // 最后一页
?>

</center>










   </div>



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
 function del(rc_id) {
        if (confirm("确定删除该记录吗？")) {
          window.location = "rc_del.php?rc_id=" +rc_id;
        }
      }
    



    
    </script>

   
</html>