<?php

use yii\helpers\Html;
use yii\web\HttpException;

if (Yii::$app->user->isGuest || Yii::$app->user->identity->id !== $model->author_id) {
    throw new HttpException(400, '抱歉，您未能通过身份验证。请尝试重新登录。');
}

/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = '编辑代码：' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::$app->user->identity->username.'的AI列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑代码';
?>
<div class="post-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
