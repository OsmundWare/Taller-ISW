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
            [['CLI_nombre', 'CLI_apellidop', 'CLI_apellidom', 'CLI_rut', 'CLI_fecha_nacimiento', 'CLI_genero', 'CLI_email', 'CLI_direccion', 'CLI_telefono'], 'required'],
            [['CLI_fecha_nacimiento'], 'safe'],
            [['CLI_telefono'], 'integer'],
            [['CLI_nombre', 'CLI_apellidop', 'CLI_apellidom'], 'string', 'max' => 30],
            [['CLI_rut'], 'string', 'max' => 12],
            [['CLI_genero'], 'string', 'max' => 10],
            [['CLI_email'], 'string', 'max' => 100],
            [['CLI_direccion'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CLI_id' => 'Cli ID',
            'CLI_nombre' => 'Cli Nombre',
            'CLI_apellidop' => 'Cli Apellidop',
            'CLI_apellidom' => 'Cli Apellidom',
            'CLI_rut' => 'Cli Rut',
            'CLI_fecha_nacimiento' => 'Cli Fecha Nacimiento',
            'CLI_genero' => 'Cli Genero',
            'CLI_email' => 'Cli Email',
            'CLI_direccion' => 'Cli Direccion',
            'CLI_telefono' => 'Cli Telefono',
        ];
    }
}
