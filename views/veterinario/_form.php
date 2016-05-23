<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Veterinario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="veterinario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'VET_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'VET_APELLIDO')->textInput(['maxlength' => true])?>

    <?= $form->field($model, 'VET_RUT')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
