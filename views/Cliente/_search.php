<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CLI_ID') ?>

    <?= $form->field($model, 'CLI_NOMBRE') ?>

    <?= $form->field($model, 'CLI_APELLIDO') ?>

    <?= $form->field($model, 'CLI_RUT') ?>

    <?= $form->field($model, 'CLI_FECH_NAC') ?>

    <?php // echo $form->field($model, 'CLI_DIRECCION') ?>

    <?php // echo $form->field($model, 'CLI_GENERO') ?>

    <?php // echo $form->field($model, 'CLI_EMAIL') ?>

    <?php // echo $form->field($model, 'CLI_TELEFONO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
