<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $prod Наименование
 * @property int $quantity Количество
 * @property string $date Дата
 *
 * @property Archive[] $archives
 * @property Basket[] $baskets
 * @property Chars[] $chars
 * @property Img[] $imgs
 * @property Orders[] $orders
 * @property Products $prod0
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prod', 'quantity'], 'required'],
            [['prod', 'quantity'], 'integer'],
            [['date'], 'safe'],
            [['prod'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['prod' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prod' => 'Наименование',
            'quantity' => 'Количество',
            'date' => 'Дата',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArchives()
    {
        return $this->hasMany(Archive::className(), ['prod' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBaskets()
    {
        return $this->hasMany(Basket::className(), ['prod' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChars()
    {
        return $this->hasMany(Chars::className(), ['prod' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImgs()
    {
        return $this->hasMany(Img::className(), ['prod' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['prod' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProd0()
    {
        return $this->hasOne(Products::className(), ['id' => 'prod']);
    }
}
