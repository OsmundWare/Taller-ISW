<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Asistente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asistente-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'ASI_NOMBRE')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'ASI_APELLIDO')->textInput(['maxlength' => true])?>

        <?= $form->field($model, 'ASI_RUT')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'ASI_EMAIL')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'ASI_PASS')->passwordInput(['maxlength' => true]) ?>
        
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
