<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caronas".
 *
 * @property int $id
 * @property string $local_saida
 * @property string $local_destino
 * @property double $preco
 * @property int $contato
 * @property string $data_saida
 * @property int $user_fk
 *
 * @property User $userFk
 */
class Caronas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'caronas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['local_saida', 'local_destino', 'preco', 'contato', 'data_saida', 'user_fk'], 'required'],
            [['preco'], 'number'],
            [['contato', 'user_fk'], 'integer'],
            [['data_saida'], 'safe'],
            [['local_saida', 'local_destino'], 'string', 'max' => 100],
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
            'local_saida' => 'Local Saida',
            'local_destino' => 'Local Destino',
            'preco' => 'Preco',
            'contato' => 'Contato',
            'data_saida' => 'Data Saida',
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
