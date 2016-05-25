<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VeterinarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="veterinario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'VET_ID') ?>

    <?= $form->field($model, 'VET_NOMBRE') ?>

    <?= $form->field($model, 'VET_APELLIDO') ?>

    <?= $form->field($model, 'VET_RUT') ?>

    <?= $form->field($model, 'VET_EMAIL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
