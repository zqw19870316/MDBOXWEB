<?php /*a:2:{s:69:"/www/wwwroot/mdProject/application/index/view/organization/index.html";i:1533086140;s:80:"/www/wwwroot/mdProject/application/index/view/../../common/view/home/master.html";i:1533103196;}*/ ?>
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
    
<div>
    我是组织架构页面
</div>
</div>
<!--左侧导航-->
<div id="navleft">
    <ul>
        <a href="<?php echo url('Index/index'); ?>" target="_blank">
            <li class="navleft_li <?php if($controller_name == 'Index'): ?>active<?php endif; ?>">
                <img src="/static/images/design.png" />
            </li>
        </a>
        <a href="<?php echo url('Organization/index'); ?>" target="_blank">
            <li class="navleft_li <?php if($controller_name == 'Organization'): ?>active<?php endif; ?>">
                <img src="/static/images/organization.png" />
            </li>
        </a>
<!--无连接-->
        <a href="#">
            <li class="navleft_li ">
                <img src="/static/images/standardparts.png" />
            </li>
        </a>
        <a href="#">
            <li class="navleft_li">
                <img src="/static/images/bought-in.png" />
            </li>
        </a>
        <a href="#">
            <li class="navleft_li">
                <img src="/static/images/resource.png" />
            </li>
        </a>
        <a href="#">
            <li class="navleft_li">
                <img src="/static/images/tool.png" />
            </li>
        </a>
        <a href="#">
            <li class="navleft_li">
                <img src="/static/images/download.png" />
            </li>
        </a>

        <!--<a href="<?php echo url('Index/index'); ?>">-->
            <!--<li class="navleft_li">-->
                <!--<img src="/static/images/design.png" />-->
            <!--</li>-->
        <!--</a>-->
        <!--<a href="<?php echo url('Organization/index'); ?>">-->
            <!--<li class="navleft_li">-->
                <!--<img src="/static/images/organization.png" />-->
            <!--</li>-->
        <!--</a>-->
        <!--<li class="navleft_li">-->
            <!--<img src="/static/images/standardparts.png" />-->
        <!--</li>-->
        <!--<li class="navleft_li">-->
            <!--<img src="/static/images/bought-in.png" />-->
        <!--</li>-->
        <!--<li class="navleft_li">-->
            <!--<img src="/static/images/resource.png" />-->
        <!--</li>-->
        <!--<li class="navleft_li">-->
            <!--<img src="/static/images/tool.png" />-->
        <!--</li>-->
        <!--<li class="navleft_li">-->
            <!--<img src="/static/images/download.png" />-->
        <!--</li>-->
    </ul>
    <div class="question">提问</div>
</div>
</body>
</html>