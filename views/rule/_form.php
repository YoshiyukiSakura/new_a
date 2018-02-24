<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rule_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'forward_path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'source_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'before_behaviors')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'after_behaviors')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
