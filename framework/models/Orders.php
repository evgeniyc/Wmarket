<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $user Пользователь
 * @property int $prod Продукт
 * @property int $quant Количество
 * @property string $status Статус
 * @property string $date Дата
 *
 * @property Product $prod0
 * @property User $user0
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
            //[['date'], 'safe'],
            [['product'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['prod' => 'id']],
            [['username'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user' => 'id']],
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
            'prod' => 'Продукт',
            'quant' => 'Количество',
            'status' => 'Статус',
            'date' => 'Дата',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'prod']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsername()
    {
        return $this->hasOne(User::className(), ['id' => 'user']);
    }
	
	public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->date = date('y-m-d H:i:s');
			}
            return true;
        }
        return false;
    }
}
