<?php
include ('./conn.php');
include ('./header.php');
$cate_id=$_GET['cate_id'];
$sql2="select * from category where id=$cate_id";
$rs2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($rs2);
?>
<div id="main">
    <h4>你现在所处位置为：<a href="index.php">首页</a>&gt;<?php echo $row2['cate_name']?></h4>
    <ul>
        <?php
        $pagesize=3;
        $page=isset($_GET['page']) ? $_GET['page'] : 1;

        $sql="select * from article where cate_id=$cate_id";
        $rs=mysqli_query($conn,$sql);
        $records=mysqli_num_rows($rs);
        $pagecount= ceil($records/$pagesize);
        $start=($page-1)*$pagesize;

        $sql="select * from article where cate_id=$cate_id order by intime desc limit $start,$pagesize";
        $rs=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($rs)){
            echo '<li>';
            echo '<img src="./files/'.$row['img'].'"/>';
            echo '<h4><a href="content.php?id='.$row['id'].'">'.$row['title'].'</a></h4>';
            echo '<p><a href="content.php?id='.$row['id'].'">'.mb_substr($row['content'],0,40,'utf-8').'....查看全文</a></p>';
            echo '</li>';
        }
        echo '<div class="page">';
        $o=@$_GET['page'];
        $s=$o-1;
        $n=$o+1;
        if ($o>1){
            echo '<a href="list.php?cate_id='.$cate_id.'&page='.$s.'"> 上一页</a>';
        }
        for($i=1; $i<=$pagecount; $i++){
            if($i==$page){
                echo '<a href="list.php?cate_id='.$cate_id.'&page='.$i.'" class="on">' .$i.'</a>  ';
            }else{
                echo '<a href="list.php?cate_id='.$cate_id.'&page='.$i.'">' .$i.'</a>  ';
            }
        }
        if ($o<$pagecount && $pagecount>1){
            echo '<a href="list.php?cate_id='.$cate_id.'&page='.$n.'"> 下一页 </a>';
        }
        echo '</div>';
        ?>
    </ul>
</div>
<?php
include('./right.php');
include('./footer.php');
?>
