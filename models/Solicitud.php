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
            [['dia_atencion'], 'safe'],
            [['nombre', 'apellido', 'rut', 'hora_atencion'], 'string', 'max' => 45],
        ];
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
