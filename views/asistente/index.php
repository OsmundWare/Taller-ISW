<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AsistenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asistentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asistente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear nuevo Asistente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ASI_NOMBRE',
            'ASI_APELLIDO',
            'ASI_RUT',
            'ASI_EMAIL',
            'ASI_CARGO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
