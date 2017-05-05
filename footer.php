</div>
</div>

<div class="other_bg">
    <div id="other">
        <ul>
            <li class="l1">
                <strong>Talk is cheap,show me your code.</strong>
                <p>&emsp;&emsp;PHP是世界上最好的语言。</p>
                <p></p>
            </li>
            <li>
                <h4>通过以下方式联系我</h4>
                <p>新浪微博：<a href="http://weibo.com/u/1772748371?refer_flag=1001030201_&is_hot=1">ElephantJayyyy</a><br/>微信：DrakedogGG<br/>QQ：823425157<br/>个人网站：</p>
            </li>
            <li class="l3">
                <h4>友情链接：</h4>
                <p><a href="http://www.baidu.com/" >   百度</a><br/>
                   <a href="http://www.sina.com.cn/">   新浪</a><br/>
                   <a href="http://news.qq.com/">   腾讯</a><br/>
                   <a href="http://news.sohu.com/">   搜狐网</a><br/>
                   <a href="http://www.youku.com/">   优酷</a>
                </p>
            </li>
        </ul>
    </div>
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
<div id="footer">
    Copyright &copy; 2014-2017. Company Name. All rights reserved.
</div>
</body>
</html>