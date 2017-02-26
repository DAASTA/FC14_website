<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
//AppAsset::register($this);

$this->title = '新生C语言大赛';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>欢迎来到FC14主页!</h1>

        
        <?php if (Yii::$app->user->isGuest): ?>
        <p class="lead">Freshmen-C 14，清华大学自动化系第14届新生C语言大赛</p>
        <p><a class="btn btn-lg btn-success" href="http://student.au.tsinghua.edu.cn/advanced/frontend/web/index.php?r=site%2Fsignup">&nbsp;现在注册&nbsp;&raquo;&nbsp;</a></p>
        <?php else: ?>
        <p class="lead">欢迎您，<?php echo Yii::$app->user->identity->username; ?>！</p>
        <?php endif; ?>

        <p><a class="btn btn-lg btn-primary" href="http://student.au.tsinghua.edu.cn/advanced/backend/web/index.php">&nbsp;开始开发&nbsp;&raquo;&nbsp;</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>背景：百团大战</h2>

                    <p>
                      //TODO  Finish it later.
                   </p>

                <p><a class="btn btn-default" href="https://github.com/hzsydy/XiangGuHuaJi/blob/master/readme.md#getting-started--快速了解百团大战">快速了解百团大战 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>场景：清华大学</h2>

                <p>
                     //TODO  Finish it later
		</p>		

                <p><a class="btn btn-default" href="https://github.com/hzsydy/XiangGuHuaJi/blob/master/readme.md#清华地图攻略">清华地形详解 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>招新，还是内联？</h2>

                <p>
                      //TODO Finish it later
                </p>

                <p><a class="btn btn-default" href="https://github.com/hzsydy/XiangGuHuaJi/blob/master/readme.md#外交-指南">社团活动指南 &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
