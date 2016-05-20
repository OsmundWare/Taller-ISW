<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "FICHA_MASCOTA".
 *
 * @property integer $FIC_ID
 * @property string $FIC_FEC_NAC
 * @property string $FIC_OBSERVACION
 * @property string $FIC_NOMBRE_MAS
 * @property string $FIC_COLOR
 * @property integer $FIC_PRESION_MAS
 * @property integer $FIC_PESO_MAS
 * @property string $FIC_RAZA
 * @property string $FIC_ESPECIE
 * @property string $FIC_GENERO
 */
class Fichamascota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'FICHA_MASCOTA';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FIC_FEC_NAC'], 'safe'],
            [['FIC_PRESION_MAS', 'FIC_PESO_MAS'], 'integer'],
            [['FIC_OBSERVACION'], 'string', 'max' => 1024],
            [['FIC_NOMBRE_MAS', 'FIC_COLOR', 'FIC_RAZA', 'FIC_ESPECIE', 'FIC_GENERO'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FIC_ID' => 'ID',
            'FIC_FEC_NAC' => 'Fecha de Nacimiento',
            'FIC_OBSERVACION' => 'Observacion',
            'FIC_NOMBRE_MAS' => 'Nombre',
            'FIC_COLOR' => 'Color',
            'FIC_PRESION_MAS' => 'Presion',
            'FIC_PESO_MAS' => 'Peso',
            'FIC_RAZA' => 'Raza',
            'FIC_ESPECIE' => 'Especie',
            'FIC_GENERO' => 'Genero',
        ];
    }
}
