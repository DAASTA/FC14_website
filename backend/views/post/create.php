<?php

use yii\helpers\Html;
use yii\web\HttpException;

if (Yii::$app->user->isGuest) {
    throw new HttpException(400, '抱歉，您未能通过身份验证。请尝试重新登录。');
}


/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = '新建AI';
$this->params['breadcrumbs'][] = ['label' => Yii::$app->user->identity->username.'的AI列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>请设定“标题”，并将cpp代码粘贴到“代码”栏。您的代码将使用VS2012编译。</p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
