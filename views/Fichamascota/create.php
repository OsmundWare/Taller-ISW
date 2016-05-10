<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fichamascota */

$this->title = 'Create Fichamascota';
$this->params['breadcrumbs'][] = ['label' => 'Fichamascotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fichamascota-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
