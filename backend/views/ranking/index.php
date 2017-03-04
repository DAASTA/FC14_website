<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RankingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'AI排行榜';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranking-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?= Html::a('Create Ranking', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <p><?= Html::a('下载全部dll', "http://student.au.tsinghua.edu.cn/share/FC14/dll/compiled.zip", ["class"=>'btn btn-primary']) ?></p>    
    <p> 您可以在此查看热身赛得分，并下载任何编译过的ai文件。点击ID即可下载对应的vs2012release版本dll文件。</p>
    <p> 如有必要，您可以联系工作人员索要gnuc版本的so文件。  </p>
    <p> 下一次热身赛将于2017.3.5进行。 </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [ 'attribute'=>'post_id',
              'label' => 'ID',       
              'format' => 'raw',
              'value' => function($data){
                return Html::a($data->post_id, "http://student.au.tsinghua.edu.cn/share/FC14/dll/".$data->post_id.".dll",[]);
              },
            ],
            [ 'attribute' => 'score',
              'label' => '得分',
            ],
            [ 'label'=>'作者',
              'value' => 'post.author.username',
            ],
            [ 'label'=>'标题',
              'value'=> 'post.title',
            ],

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
