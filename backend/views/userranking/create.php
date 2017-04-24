<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserRanking */

$this->title = 'Create User Ranking';
$this->params['breadcrumbs'][] = ['label' => 'User Rankings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-ranking-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
