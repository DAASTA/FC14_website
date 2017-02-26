<?php

/* @var $this yii\web\View */

$this->title = '新生C语言大赛';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>欢迎来到FC14选手主页！</h1>

        <p class="lead">欢迎您，<?php echo Yii::$app->user->identity->username; ?>!</p>
        <p> <a class="btn btn-success" href="http://student.au.tsinghua.edu.cn/share/FC14/FC14_toolbox_user.zip" >下载选手工具包</a> </p>
        <p> <a class="btn btn-primary" href="http://student.au.tsinghua.edu.cn/share/FC14/FC14_toolbox_dev.zip" >下载扩展测试工具</a> </p>
        <!--<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>-->
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>赛程</h2>

                   <p>todo</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">dont click me &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>选手工具包</h2>
                
                <p>todo</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">dont click me &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>规则手册</h2>
               
                <p>todo</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">dont click me &raquo;</a></p>
            </div>
        </div>

    </div> 
</div>
