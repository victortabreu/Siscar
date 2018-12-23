<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $cpf
 * @property string $endereco
 * @property int $contato
 * @property int $user_fk
 *
 * @property User $userFk
 */
class UsuariosDB extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cpf', 'endereco', 'contato', 'user_fk'], 'required'],
            [['contato', 'user_fk'], 'integer'],
            [['cpf', 'endereco'], 'string', 'max' => 100],
            [['user_fk'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_fk' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cpf' => 'Cpf',
            'endereco' => 'Endereco',
            'contato' => 'Contato',
            'user_fk' => 'User Fk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserFk()
    {
        return $this->hasOne(User::className(), ['id' => 'user_fk']);
    }
}
