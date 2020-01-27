<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $user
 * @property int $prod
 * @property int $quant
 * @property string $status
 * @property string $date
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'prod', 'quant'], 'required'],
            [['user', 'prod', 'quant'], 'integer'],
            [['status'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'Пользователь',
            'prod' => 'Товар',
            'quant' => 'Количество',
            'status' => 'Статус',
            'date' => 'Дата',
        ];
    }
}
