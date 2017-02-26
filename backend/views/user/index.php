<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '选手列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <!--  <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            /*[ 'attribute' => 'id',
              'label' => 'ID',
              'contentOptions' => ['width'=>'30px'],
            ],*/
            //'username',
            [ 'attribute' => 'username',
              'label' => '用户名',
            ],
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
             'email:email',
            // 'status',
            // 'created_at:datetime',
            /*[ 'attribute' => 'created_at',
              'label' => '创建时间',
              'format' => ['date', 'php:Y-m-d H:i:s'],
            ]*/
            // 'updated_at',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
