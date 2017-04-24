<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserRankingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '热身赛积分';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-ranking-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?= Html::a('Create User Ranking', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <p> 每天AI排行榜前6个玩家获得 5 3 2 1 1 1 分。同一玩家只按照排名最高的AI计分。</p>
    <p> 热身赛将产生1/4的决赛名额。  </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'user_id',
            [ 'label' => '用户ID',
              'value' => 'user.id',
              'contentOptions' => ['width'=>'80px'],
            ],
            [ 'label' => '用户名',
              'value' => 'user.username',
            ],
            [ 'label' => '热身赛积分',
              'attribute' => 'score',
            ]

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
