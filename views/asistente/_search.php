<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AsistenteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asistente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ASI_NOMBRE') ?>

    <?= $form->field($model, 'ASI_APELLIDO') ?>

    <?= $form->field($model, 'ASI_RUT') ?>

    <?= $form->field($model, 'ASI_CARGO') ?>

    <?= $form->field($model, 'ASI_EMAIL') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Resetear', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
