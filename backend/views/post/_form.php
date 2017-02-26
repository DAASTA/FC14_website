<?php

namespace common\models;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 10]) ?>

    <!--<?= $form->field($model, 'status')->textInput() ?>-->
    <!--<?php
      $psObjs = Poststatus::find()->all();
      $allStatus = ArrayHelper::map($psObjs, 'id', 'name');
    ?>
    <?= $form->field($model, 'status')->dropDownList( $allStatus, ['prompt'=>'请选择状态']); ?>-->

    <!--<?= $form->field($model, 'create_time')->textInput() ?>-->

    <!--<?= $form->field($model, 'author_id')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
