<?php
include ('../conn.php');
$id=@$_GET['id'];

//删除文章数据对应的图片
$rs=mysqli_query($conn,"select img from article where id=$id");
$row=mysqli_fetch_assoc($rs);
if(strlen($row['img'])>1){
    unlink('../files/'.$row['img']);
}
mysqli_free_result($rs);


$sql="delete from article where id='$id'";
$rs=mysqli_query($conn,$sql);
if ($rs){
    alert('删除成功','./article_list.php');
}else{
    alert('删除失败','./article_list.php');
}