<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CLI_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_apellidop')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'CLI_apellidom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_rut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_fecha_nacimiento')->textInput() ?>

    <?= $form->field($model, 'CLI_direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_genero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_telefono')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
