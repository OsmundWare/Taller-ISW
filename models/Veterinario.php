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
            [['VET_NOMBRE', 'VET_APELLIDO'], 'match', 'pattern' => "/^[a-zA-Z áéíóú ÁÉÍÓÚ ]+$/i", 'message' => 'Solo se admiten letras de la "A" a la "Z"'],
            [['VET_NOMBRE', 'VET_APELLIDO'], 'trim'],

            [['VET_RUT'], 'string', 'min' => 9, 'max' => 10],
            [['VET_RUT'], 'unique', 'message' => '* Rut no puede encontrarse ya registrado. * Formato de rut debe ser 11222333-4'],
            [['VET_RUT'], 'match', 'pattern' => "/^[0-9kK.-]+$/i", 'message' => '* Solo son permitidos caracteres numéricos y la letra "K". * Formato de rut debe ser 11222333-4'],

            /*Valida el rut*/
            array('VET_RUT','validarRut'),

        ];
    }

    public function validarRut($attribute, $params) {
            $data = explode('-', $this->VET_RUT);
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
                $this->addError('VET_RUT', 'Rut inválido. Ingrese nuevamente');
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
