<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Asistente */

$this->title = 'Crear nuevo perfil de Asistente';
$this->params['breadcrumbs'][] = ['label' => 'Asistentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asistente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
