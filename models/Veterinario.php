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
            [['VET_NOMBRE', 'VET_APELLIDO', 'VET_RUT'], 'required', 'message' => 'Campo obligatorio'],
            [['VET_NOMBRE', 'VET_APELLIDO'], 'match', 'pattern' => "/^[a-zA-Z áéíóú ]+$/i", 'message' => 'Solo se admiten letras de la "A" a la "Z"'],

            [['VET_RUT'], 'string', 'max' => 12],
            [['VET_RUT'], 'unique', 'message' => 'Rut no puede encontrarse ya registrado'],
            [['VET_RUT'], 'match', 'pattern' => "/^[0-9kK.-]+$/i", 'message' => 'Ingresar un Rut válido. Solo son permitidos caracteres numéricos y la letra "K"'],
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
