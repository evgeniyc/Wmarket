<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "img".
 *
 * @property int $id
 * @property int $prod Продукт
 * @property string $name Имя файла
 *
 * @property Product $prod0
 */
class Img extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'img';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prod', 'name'], 'required'],
            [['prod'], 'integer'],
            [['name'], 'string', 'max' => 18],
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
            'name' => 'Имя файла',
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
