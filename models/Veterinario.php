<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "veterinario".
 *
 * @property integer $VET_ID
 * @property string $VET_NOMBRE
 * @property string $VET_APELLIDO
 * @property string $VET_RUT
 */
class Veterinario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'veterinario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['VET_NOMBRE', 'VET_APELLIDO'], 'string', 'max' => 30],
            [['VET_RUT'], 'string', 'max' => 12],
            [['VET_RUT'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'VET_ID' => 'ID',
            'VET_NOMBRE' => 'Nombre',
            'VET_APELLIDO' => 'Apellido',
            'VET_RUT' => 'Rut',
        ];
    }
}
