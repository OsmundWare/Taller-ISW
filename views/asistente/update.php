<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asistente */

$this->title = 'Actualizar Asistente: ' . $model->ASI_NOMBRE . ' ' . $model->ASI_APELLIDO;
$this->params['breadcrumbs'][] = ['label' => 'Asistentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ASI_NOMBRE . ' ' . $model->ASI_APELLIDO, 'url' => ['view', 'id' => $model->ASI_ID]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="asistente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
