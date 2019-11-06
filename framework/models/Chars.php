<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chars".
 *
 * @property int $id
 * @property int $prod Продукт
 * @property string $name Наименование
 * @property string $value Значение
 * @property string $units Единицы измер
 *
 * @property Product $prod0
 */
class Chars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prod', 'name', 'value', 'units'], 'required'],
            [['prod'], 'integer'],
            [['name', 'value'], 'string', 'max' => 24],
            [['units'], 'string', 'max' => 8],
            [['prod'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['prod' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prod' => 'Продукт',
            'name' => 'Наименование',
            'value' => 'Значение',
            'units' => 'Единицы измер',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProd0()
    {
        return $this->hasOne(Product::className(), ['id' => 'prod']);
    }
}
