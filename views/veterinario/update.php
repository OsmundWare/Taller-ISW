<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Veterinario */

$this->title = 'Actualizar Veterinario: ' . $model->VET_NOMBRE . ' ' . $model->VET_APELLIDO;
$this->params['breadcrumbs'][] = ['label' => 'Veterinarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->VET_NOMBRE . ' ' . $model->VET_APELLIDO, 'url' => ['view', 'id' => $model->VET_ID]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="veterinario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
