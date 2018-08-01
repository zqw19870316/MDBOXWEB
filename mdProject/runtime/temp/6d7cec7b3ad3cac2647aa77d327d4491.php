<?php /*a:2:{s:65:"D:\phpStudy\WWW\mdProject\application\index\view\index\index.html";i:1533086140;s:83:"D:\phpStudy\WWW\mdProject\application\index\view\..\..\common\view\home\master.html";i:1533091003;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<link rel="stylesheet" href="/static/common/css/indexBase.css">
<body>
<!--中间内容-->
<div id="main">
    
<link rel="stylesheet" href="/static/index/css/index.css">
<div class="index_search">
    <div class="index_search_input"><input type="text" placeholder="请输入要搜索的内容"></div>
    <div class="searchbtn">搜索</div>
</div>
<div class="extension_list">
    <ul class="extension_list_box">
        <?php for($i=0;$i<8;$i++){ ?>
        <li class="extension_list_li">
            <img src="/static/images/tk_design.png" alt="">
        </li>
        <?php } ?>
    </ul>
</div>
<div class="recommend_list">

</div>

</div>
<!--左侧导航-->
<div id="navleft">
    <ul>
        <a href="<?php echo url('Index/index'); ?>">
            <li class="navleft_li">
                <img src="/static/images/design.png" />
            </li>
        </a>
        <a href="<?php echo url('Organization/index'); ?>">
            <li class="navleft_li">
                <img src="/static/images/organization.png" />
            </li>
        </a>
        <li class="navleft_li">
            <img src="/static/images/standardparts.png" />
        </li>
        <li class="navleft_li">
            <img src="/static/images/bought-in.png" />
        </li>
        <li class="navleft_li">
            <img src="/static/images/resource.png" />
        </li>
        <li class="navleft_li">
            <img src="/static/images/tool.png" />
        </li>
        <li class="navleft_li">
            <img src="/static/images/download.png" />
        </li>
    </ul>
    <div class="question">提问</div>
</div>
</body>
</html>