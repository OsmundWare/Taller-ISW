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

        <?= $form->field($model, 'ASI_APELLIDO')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'ASI_RUT')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'ASI_CARGO')->dropDownList($model->getCargo(), 
             ['prompt'=>'- Escoja un cargo -']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
