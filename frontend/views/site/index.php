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
        <p><a class="btn btn-lg btn-success" href="http://student.au.tsinghua.edu.cn/advanced/frontend/web/index.php?r=site%2Fsignup">&nbsp;现在加入&nbsp;&raquo;&nbsp;</a></p>
        <?php else: ?>
        <p class="lead">欢迎您，<?php echo Yii::$app->user->identity->username; ?>！</p>
        <?php endif; ?>

        <p><a class="btn btn-lg btn-primary" href="http://student.au.tsinghua.edu.cn/advanced/backend/web/index.php">&nbsp;开始开发&nbsp;&raquo;&nbsp;</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>背景：百团大战</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">快速了解FC14主题——百团大战 &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>场景：清华大学</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>招新，还是内联？</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
