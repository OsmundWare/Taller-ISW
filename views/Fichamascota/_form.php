<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fichamascota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fichamascota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FIC_FEC_NAC')->textInput() ?>

    <?= $form->field($model, 'FIC_OBSERVACION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIC_NOMBRE_MAS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIC_COLOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIC_PRESION_MAS')->textInput() ?>

    <?= $form->field($model, 'FIC_PESO_MAS')->textInput() ?>

    <?= $form->field($model, 'FIC_RAZA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIC_ESPECIE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FIC_GENERO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
