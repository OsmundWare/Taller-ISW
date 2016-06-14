<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cliente".
 *
 * @property integer $CLI_ID
 * @property string $CLI_NOMBRE
 * @property string $CLI_APELLIDO
 * @property string $CLI_RUT
 * @property string $CLI_FECH_NAC
 * @property string $CLI_DIRECCION
 * @property string $CLI_GENERO
 * @property string $CLI_EMAIL
 * @property integer $CLI_TELEFONO
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CLI_FECH_NAC'], 'safe'],
            [['CLI_TELEFONO'], 'integer'],
            [['CLI_NOMBRE', 'CLI_APELLIDO', 'CLI_DIRECCION', 'CLI_EMAIL'], 'string', 'max' => 30],
            [['CLI_RUT'], 'string', 'max' => 12],
            [['CLI_GENERO'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CLI_ID' => 'Cli  ID',
            'CLI_NOMBRE' => 'Cli  Nombre',
            'CLI_APELLIDO' => 'Cli  Apellido',
            'CLI_RUT' => 'Cli  Rut',
            'CLI_FECH_NAC' => 'Cli  Fech  Nac',
            'CLI_DIRECCION' => 'Cli  Direccion',
            'CLI_GENERO' => 'Cli  Genero',
            'CLI_EMAIL' => 'Cli  Email',
            'CLI_TELEFONO' => 'Cli  Telefono',
        ];
    }
}
