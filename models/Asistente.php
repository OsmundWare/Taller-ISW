<?php

namespace app\models;

use Yii;
use yii\widgets\ActiveForm;

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
            [['ASI_NOMBRE', 'ASI_APELLIDO','ASI_RUT','ASI_EMAIL', 'ASI_PASS'], 'required', 'message' => 'Campo obligatorio'],
            [['ASI_NOMBRE', 'ASI_APELLIDO'], 'match', 'pattern' => "/^[a-zA-Z áéíóú ÁÉÍÓÚ]+$/i", 'message' => 'Solo se admiten letras de la "A" a la "Z"'],
            [['ASI_NOMBRE', 'ASI_APELLIDO'], 'filter', 'filter' => 'trim'],
            
            [['ASI_RUT'], 'string', 'min' => 9, 'max' => 10, 'message' => 'Rut debe contener al menos 9 dígitos'],
            [['ASI_RUT'], 'unique', 'message' => '* Rut no puede encontrarse ya registrado. * Formato de rut debe ser 11222333-4'],
            [['ASI_RUT'], 'match', 'pattern' => "/^[0-9kK.-]+$/i", 'message' => '* Solo son permitidos caracteres numéricos y la letra "K". * Formato de rut debe ser 11222333-4'],

            [['ASI_EMAIL'], 'email', 'message' => 'Debe ingresar email válido'],
            [['ASI_EMAIL'], 'unique', 'message' => 'Email ya registrado'],
            [['ASI_EMAIL'], 'filter', 'filter' => 'trim'],

            [['ASI_PASS'], 'string', 'min' => 6, 'max' => 30, 'message' => 'Contraseña debe contener como mínimo 6 caracteres'],
            [['ASI_PASS'], 'filter', 'filter' => 'trim'],

            /*Valida el rut*/
            array('ASI_RUT','validarRut'),

        ];
    }

    public function validarRut($attribute, $params) {
        $data = explode('-', $this->ASI_RUT);
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
            $this->addError('ASI_RUT', 'Rut inválido. Ingrese nuevamente');
    }


    /* Darle formato al rut

    public function getFormattedRut() {
        $unformattedRut = $this->ASI_RUT;
        if (strpos($unformattedRut, '-') !== false ) {
            $splittedRut = explode('-', $unformattedRut);
            $number = number_format($splittedRut[0], 0, ',', '.');
            $verifier = strtoupper($splittedRut[1]);
            return $number . '-' . $verifier;
        }
        return number_format($unformattedRut, 0, ',', '.');
    }*/

/* Validar contraseña
    
    rules [
    ['password', 'validatePassword'],
    ]

    public function validatePassword()
    {
        $user = User::findByUsername($this->username);

        if (!$user || !$user->validatePassword($this->password)) {
            $this->addError('password', 'Incorrect username or password.');
        }
    }
*/

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
            'ASI_EMAIL' => 'Email',
            'ASI_PASS' => 'Contraseña',
        ];
    }
}
