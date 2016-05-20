<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FichamascotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fichamascotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fichamascota-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fichamascota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'FIC_ID',
            //

            'FIC_NOMBRE_MAS',
           // 'FIC_COLOR',
             'FIC_PRESION_MAS',
             'FIC_PESO_MAS',
             'FIC_OBSERVACION',
            'FIC_FEC_NAC',
            // 'FIC_RAZA',
            // 'FIC_ESPECIE',
            // 'FIC_GENERO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
