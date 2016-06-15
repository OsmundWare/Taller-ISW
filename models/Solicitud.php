<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "solicitud".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $rut
 * @property string $dia_atencion
 * @property string $hora_atencion
 */
class Solicitud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solicitud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max'=> 45],
            [['nombre'], 'required', 'message' => "El campo nombre debe ser llenado"],

            [['apellido'], 'string', 'max'=> 45],
            [['apellido'], 'required', 'message' => "El campo apellido debe ser llenado"],

            [['rut'], 'string', 'min' => 9, 'max' => 10, 'message'=>'Minimo 9 caracteres.'],
            [['rut'], 'required', 'message' => "El campo rut debe ser llenado"],
            [['rut'], 'unique', 'message' => "Este  rut ya fue registrado"],
            array('rut','validateRut'),
            [['dia_atencion'], 'safe'],
            [['dia_atencion'], 'date', 'format' => 'yyyy-MM-dd', 'message'=>'El formato de la fecha es incorrecto'],
            [['dia_atencion'], 'required', 'message'=>'El campo Dia Atencion debe ser llenado.'],

            [['hora_atencion'], 'required', 'message'=>"El campo Hora Atencion debe ser llenado." ],
            [['hora_atencion'], 'unique', 'message'=>"Esta hora ya fue solicitada." ],
        ];
    }

    public function validateRut($attribute, $params) {
        $data = explode('-', $this->rut);
        $evaluate = strrev($data[0]);
        $multiply = 2;
        $store = 0;
        for ($i = 0; $i < strlen($evaluate); $i++) {
            $store += $evaluate[$i] * $multiply;
            $multiply++;
            if ($multiply > 7)
                $multiply = 2;
        }
        isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
        $result = 11 - ($store % 11);
        if ($result == 10)
            $result = 'k';
        if ($result == 11)
            $result = 0;
        if ($verifyCode != $result)
            $this->addError('rut', 'El rut ingresado no existe o no es correcto.');
    }

    /**
     * @inheritdoc
     */



    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'rut' => 'Rut',
            'dia_atencion' => 'Dia Atencion',
            'hora_atencion' => 'Hora Atencion',
        ];
    }
}
