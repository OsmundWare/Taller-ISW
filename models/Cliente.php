<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property integer $CLI_id
 * @property string $CLI_nombre
 * @property string $CLI_apellidop
 * @property string $CLI_apellidom
 * @property string $CLI_rut
 * @property string $CLI_fecha_nacimiento
 * @property string $CLI_genero
 * @property string $CLI_email
 * @property string $CLI_direccion
 * @property integer $CLI_telefono
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CLI_nombre', 'CLI_apellidop', 'CLI_apellidom', 'CLI_fecha_nacimiento', 'CLI_genero', 'CLI_email', 'CLI_direccion', 'CLI_telefono'], 'required'],
            [['CLI_fecha_nacimiento'], 'safe'],
            [['CLI_telefono'], 'integer'],
            [['CLI_nombre', 'CLI_apellidop', 'CLI_apellidom'], 'string', 'max' => 30],
            [['CLI_rut'], 'string', 'max' => 12],
            [['CLI_genero'], 'string', 'max' => 10],
            [['CLI_email'], 'string', 'max' => 100],
            [['CLI_direccion'], 'string', 'max' => 200],

            /*[['CLI_rut'], 'validarRut'],
            [['CLI_rut'],'validarSoloNumerosYGuion'],
            [['CLI_rut'], 'unique', 'message'=>'Rut ya existe'],


            [['CLI_email'], 'email'],
            [['CLI_email'], 'unique', 'message'=>'correo ya existe'],
            [['CLI_rut'], 'required',  'message'=>'campo obligatorio (12345678-9)'],
            
            [['CLI_nombre','CLI_apellidop', 'CLI_apellidom'], 'match',"pattern" => '/^[a-zA-Z ñÑáéíóúüç]*$/', 'message'=>'Solo se pueden utilizar letras']
            */

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CLI_id' => 'ID',
            'CLI_nombre' => 'Nombre',
            'CLI_apellidop' => 'Apellido Paterno',
            'CLI_apellidom' => 'Apellido Materno',
            'CLI_rut' => 'Rut',
            'CLI_fecha_nacimiento' => 'Fecha Nacimiento',
            'CLI_genero' => 'Genero',
            'CLI_email' => 'Email',
            'CLI_direccion' => 'Direccion',
            'CLI_telefono' => 'Telefono',
        ];
    }

     public function validarRut($attribute, $params) {
        $data = explode('-', $this->CLI_RUT);
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
        if ($result == 10)
            $result = 'K';
        if ($result == 11)
            $result = 0;
        if ($verifyCode != $result)
            $this->addError('CLI_RUT', 'Rut inválido.');
    }


    public function validarSoloNumerosYGuion($attribute,$params)
        {
        
          $pattern ='/(?!^[0-9]*$)(-)/';

         
        if(!preg_match($pattern, $this->$attribute))
          $this->addError($attribute, 
          'Rut solo debe contener digitos y un guion');
          
        }
}
