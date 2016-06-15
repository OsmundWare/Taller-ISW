<?php
/**
 * Created by PhpStorm.
 * User: OsmundWare
 * Date: 08/05/2016
 * Time: 16:07
 */

    use yii\helpers\Html;
?>

<form>
    <label >Nombre cliente</label>
    <input type="text" class="form-control" placeholder="Nombre">
    <div class="form-group">
        <label >Tipo de atencion</label>

    </div>

    <select class="form-control">
        <option>Normal</option>
        <option>Urgencia</option>

    </select>
    <hr>


    <!-- <div class="form-group">
        <label for="inputPassword">Contraseña</label>
        <input type="password" class="form-control" placeholder="Contraseña">
    </div>-->

    <div class="form-group">
        <label class="control-label col-xs-3">Hora de atencion:</label>
        <div class="col-xs-3">
            <select class="form-control">
                <option>Dia</option>
            </select>
        </div>
        <div class="col-xs-3">
            <select class="form-control">
                <option>Mes</option>
            </select>
        </div>
        <div class="col-xs-3">
            <select class="form-control">
                <option>year</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">registrar</button>


</form>
