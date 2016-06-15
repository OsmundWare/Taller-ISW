<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel'=> '<img src="img/logo.png" class="img-responsive">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'Atencion', 'url' =>['/solicitud/index']],
            ['label' => 'Fichas Mascotas', 'url' => ['/fichamascota/index']],
            ['label' => 'Clientes', 'url' => ['/cliente/index']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Asistentes Veterinarios', 'url' => ['/asistente/index']],
            ['label' => 'Veterinarios', 'url' => ['/veterinario/index']],
            ['label' => 'Acerca de', 'url' => ['/site/about']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm( )
                . '</li>'
            )
        ],
    ]);

    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="container">
    <div class="jumbotron">
    <div class="col-md-3 col-md-offset-1">
     <h3>Visita nuestras Redes Sociales</h3>
    <table >
    <tr>
        <td><div class="col-md-3"><a href="http://www.facebook.com/"><img src="img/facebook.png"></a></div></td>
        <td><div class="col-md-3"><a href="http://www.twitter.com/"><img src="img/twitter.png"></a></div></td>
        <td><div class="col-md-3"><a href="https://plus.google.com/"><img src="img/googleplus.png"></a></div></td>
    </tr>
    </table>
    </div>
    </div>
</footer>



<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; TISW-GrupoRedox <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
