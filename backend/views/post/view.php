<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\HttpException;

/* @var $this yii\web\View */
/* @var $model common\models\Post */


if (Yii::$app->user->isGuest || Yii::$app->user->identity->id !== $model->author_id) {
    throw new HttpException(400, '抱歉，您未能通过身份验证。请尝试重新登录。');
}


$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '代码提交', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('编辑', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p> 

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'title',
            //'status',
            [ 'attribute' => 'status',
              //'label' => '状态',
              'value' => $model->status0->name,
            ],
            //'create_time:datetime',
            [ 'attribute' => 'create_time',
              'label' => '更新时间',
              'value' => date('Y-m-d H:i:s',$model->create_time),
            ],
            //'author_id',
            /*[ 'attribute' => 'author_id',
              'value' => $model->author->username,
            ],*/
            //'content:ntext',
            [ 'attribute' => 'content',
              'label' => '内容概述',
              'value' => substr($model->content, 0, 200)."...",
              'formatter' => 'ntext',
            ],
        ],
    ]) ?>

</div>
