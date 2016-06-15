<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitud */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitud-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rut')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model,'dia_atencion')->
    widget(DatePicker::className(),[
        'language'=> 'es',
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'minDate' => '0',
            'yearRange' => '-115:+0',
            'changeYear' => true]
    ]) ?>

    <?php echo $form->field($model, 'hora_atencion')->dropDownList(['9:00 am' => '9:00 am', '10:00 am' => '10:00 am', '11:00 am' => '11:00 am']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
