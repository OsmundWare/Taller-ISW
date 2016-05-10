<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fichamascota */

$this->title = 'Update Fichamascota: ' . $model->FIC_ID;
$this->params['breadcrumbs'][] = ['label' => 'Fichamascotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FIC_ID, 'url' => ['view', 'id' => $model->FIC_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fichamascota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
