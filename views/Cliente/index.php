<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CLI_id',
            'CLI_nombre',
            'CLI_apellidop',
            'CLI_apellidom',
            'CLI_rut',
            'CLI_fecha_nacimiento',
            // 'CLI_direccion',
            // 'CLI_genero',
            // 'CLI_email',
            // 'CLI_telefono',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
