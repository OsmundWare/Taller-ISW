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
            [['ASI_NOMBRE', 'ASI_APELLIDO','ASI_RUT', 'ASI_CARGO'], 'required', 'message' => 'Campo obligatorio'],
            [['ASI_NOMBRE', 'ASI_APELLIDO'], 'match', 'pattern' => "/^[a-zA-Z áéíóú ]+$/i", 'message' => 'Solo se admiten letras de la "A" a la "Z"'],
            
            [['ASI_CARGO'], 'string', 'max' => 20],

            [['ASI_RUT'], 'string', 'max' => 12],
            [['ASI_RUT'], 'unique', 'message' => 'Rut no puede encontrarse ya registrado'],
            [['ASI_RUT'], 'match', 'pattern' => "/^[0-9kK.-]+$/i", 'message' => 'Ingresar un Rut válido. Solo son permitidos carácteres numéricos y la letra "K"'],
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
