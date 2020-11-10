<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $title Заголовок
 * @property string|null $descr Описание
 * @property string|null $img Изображение
 * @property int|null $price Цена
 * @property string|null $sdescr
 * @property int|null $cat
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['descr', 'sdescr'], 'string'],
            [['price', 'cat'], 'integer'],
            [['title'], 'string', 'max' => 64],
            [['img'], 'string', 'max' => 24],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'descr' => 'Descr',
            'img' => 'Img',
            'price' => 'Price',
            'sdescr' => 'Sdescr',
            'cat' => 'Cat',
        ];
    }
}
