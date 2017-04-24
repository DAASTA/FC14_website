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
    <p> 请先下载最新的选手工具包。您可以在此查看热身赛得分、下载任何已编译的ai文件。点击ID即可下载对应的vs2012release版本dll文件。
     <br>如有必要，您可以联系工作人员，索要其他版本的动态链接库文件。  </p>
    <p> 热身赛排名在每天23:00~24:00更新。
    <br> 
本列表于 4.4 更新~  

即为初赛结果。

</p>

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
            [ 'label'=>'作者',
              'value' => 'post.author.username',
            ],
            [ 'label'=> '作者ID',
              'value' => 'post.author.id'
            ],
            [ 'attribute' => 'score',
              'label' => 'AI得分',
            ],
            [ 'label'=>'标题',
              'value'=> 'post.title',
            ],

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
