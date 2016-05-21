<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FichamascotaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fichamascota-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'FIC_ID') ?>

    <?= $form->field($model, 'FIC_FEC_NAC') ?>

    <?= $form->field($model, 'FIC_OBSERVACION') ?>

    <?= $form->field($model, 'FIC_NOMBRE_MAS') ?>

    <?= $form->field($model, 'FIC_COLOR') ?>

    <?php // echo $form->field($model, 'FIC_PRESION_MAS') ?>

    <?php // echo $form->field($model, 'FIC_PESO_MAS') ?>

    <?php // echo $form->field($model, 'FIC_RAZA') ?>

    <?php // echo $form->field($model, 'FIC_ESPECIE') ?>

    <?php // echo $form->field($model, 'FIC_GENERO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
