<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fichamascota */

$this->title = $model->FIC_ID;
$this->params['breadcrumbs'][] = ['label' => 'Fichamascotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fichamascota-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->FIC_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->FIC_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'FIC_ID',
            'FIC_FEC_NAC',
            'FIC_OBSERVACION',
            'FIC_NOMBRE_MAS',
            'FIC_COLOR',
            'FIC_PRESION_MAS',
            'FIC_PESO_MAS',
            'FIC_RAZA',
            'FIC_ESPECIE',
            'FIC_GENERO',
        ],
    ]) ?>

</div>
