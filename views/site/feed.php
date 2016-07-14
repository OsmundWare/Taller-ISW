<?php

/* @var $this yii\web\View */
/*#*/

$this->title = "Clinica Veterinaria";
?>
<div class="site-index">
  
    <div class="body-content">
          <h1>Desde la API</h1>

        <?php foreach($data as $row) : ?>

            <p> ID: <?= $row['VET_ID']?></p>
            <p> Nombre: <?= $row['VET_NOMBRE']?></p>
            <p> Apellido: <?= $row['VET_APELLIDO']?></p>

        <?php endforeach; ?>
    </div>

</div>