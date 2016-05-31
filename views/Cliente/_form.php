<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CLI_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_APELLIDO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_RUT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_FECH_NAC')->textInput() ?>

    <?= $form->field($model, 'CLI_DIRECCION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_GENERO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLI_TELEFONO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
