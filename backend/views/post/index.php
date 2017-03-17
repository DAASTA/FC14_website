<?php

use common\models\Poststatus;

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\HttpException;


/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

if (Yii::$app->user->isGuest) {
    throw new HttpException(400, '抱歉，您未能通过身份验证。请尝试重新登录。');
}

$this->title = Yii::$app->user->identity->username.'的AI列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <?php if ($dataProvider->totalCount < Yii::$app->params['MAX_CREATE_POST_COUNT']  ): ?>
    <p> 您可以修改现有代码，或提交新的AI。  </p>
    <p> <?= Html::a('提交AI', ['create'], ['class' => 'btn btn-success']) ?> </p>
    <?php else: ?>
    <p> 您的提交数量已经达到上限。您可以清理或修改现有的代码。</p>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            [ 'attribute' => 'id',
              'label' => 'ID',
              'contentOptions' => ['width'=>'50px'],
            ],
            //'author_id',
            /*[ 'attribute' => 'authorName',
              'label' => '用户名',
              'value' => 'author.username',
            ],*/
            'title',
            //'content:ntext',
            //'status',
            [ 'attribute' => 'status',
              'value' => 'status0.name',
              'filter' => Poststatus::find() -> select(['name', 'id']) 
                          /*-> orderBy('position')*/ -> indexBy('id') -> column(),
            ],
            //'create_time:datetime',
            [ 'attribute' => 'create_time',
              'label' => '更新时间',
              'format' => ['date', 'php:Y-m-d H:i:s'],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
