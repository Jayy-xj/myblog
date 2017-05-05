<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>向杰的个人博客</title>
    <link type="text/css" rel="stylesheet" href="skin/index.css"/>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/lrtk.css"/>
</head>
<body>
<div id="head">
    <h1>向杰的个人博客</h1>
    <img src="image/logo2.png" alt=""/>
    <form action="search.php" method="get">
        <input type="text" name="keywords" class="inbox" placeholder="输入搜索内容"/>
        <input type="image" src="image/search.jpg" class="inbtn"/>
    </form>
</div>
<div class="menu_bg">
    <div id="menu">
        <a href="index.php">首页</a>
        <?php
        $sql="select * from category order by order_no asc,id desc";
        $rs=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($rs)){
            echo '<a href="list.php?cate_id='.$row['id'].'">'.$row['cate_name'].'</a>';
        }
        ?>
    </div>
</div>
    <div id="content">