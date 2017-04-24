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
        <p><a class="btn btn-lg btn-success" href="http://student.au.tsinghua.edu.cn/advanced/frontend/web/site/signup">&nbsp;现在报名&nbsp;&raquo;&nbsp;</a></p>
        <p><a class="btn btn-lg btn-primary" href="http://student.au.tsinghua.edu.cn/advanced/backend/web/index.php">&nbsp;进入游戏&nbsp;&raquo;&nbsp;</a></p>
        <?php else: ?>
        <p class="lead">欢迎您，<?php echo Yii::$app->user->identity->username; ?>！</p>
        <p><a class="btn btn-lg btn-success" href="http://student.au.tsinghua.edu.cn/advanced/backend/web/index.php">&nbsp;进入游戏&nbsp;&raquo;&nbsp;</a></p>
        <?php endif; ?>

        
                <p><a class="btn btn-lg btn-default" href="https://github.com/hzsydy/XiangGuHuaJi/blob/master/readme.md#getting-started--快速了解百团大战">快速了解百团大战 &raquo;</a></p>
       <p><img src="http://student.au.tsinghua.edu.cn/advanced/frontend/assets/logo.png" /></p>

<p class="lead">“<strong>百团大战</strong>”是清华大学一项盛大的<strong>社团</strong>宣传活动。也是第14届新生C的主题。</p>

<hr>

<p class="lead"> 现在扫码/长按进入<strong>选手交流群</strong>： </p>

<p><img src="http://student.au.tsinghua.edu.cn/advanced/frontend/assets/user_qr_code.jpg" /></p>



    </div>

<!--    <div class="body-content">-->

<!--        <div class="row">
            <div class="col-lg-4">-->
<!--            <h2>主题：百团大战</h2> -->

<!--            </div>-->
<!--            <div class="col-lg-4">
                <h2>地图：清华大学</h2>

<blockquote>
<p>
社团通过<strong>领土</strong>获取社员。我校各区域的社员人数是非常不平衡的，例如紫荆宿舍区社员多，照澜院社员少。领土上社员数累加就是你的社员数。
</p>
</blockquote>

            </div>
            <div class="col-lg-4">
                <h2>招新，还是内联？</h2>

<blockquote>
<p>在合适的地点，举办合适规模的<strong>社团活动</strong>是争抢领地和社员的关键，其地点只能在自己的领地内，规模正比于资源消耗。社团活动对周边9*9的区域产生<strong>招新/攻击</strong>和<strong>内联/防守</strong>效果。</p>
</blockquote>

            </div>
        </div>-->

<!--    </div>-->
<!--</div>-->
