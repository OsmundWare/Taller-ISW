<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asistente_veterinario".
 *
 * @property integer $ASI_ID
 * @property string $ASI_NOMBRE
 * @property string $ASI_APELLIDO
 * @property string $ASI_RUT
 * @property string $ASI_CARGO
 */
class Asistente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asistente_veterinario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ASI_NOMBRE', 'ASI_APELLIDO'], 'string', 'max' => 30],
            [['ASI_RUT'], 'string', 'max' => 12],
            [['ASI_CARGO'], 'string', 'max' => 20],
            [['ASI_RUT'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ASI_ID' => 'ID',
            'ASI_NOMBRE' => 'Nombre',
            'ASI_APELLIDO' => 'Apellido',
            'ASI_RUT' => 'Rut',
            'ASI_CARGO' => 'Cargo',
        ];
    }
}
