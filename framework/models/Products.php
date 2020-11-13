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
    public $imageFile;
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
			[['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Наименование',
            'descr' => 'Описание',
            'img' => 'Имя файла',
            'price' => 'Цена',
            'sdescr' => 'Краткое описание',
            'cat' => 'Категория',
			'imageFile' => 'Изображение',
        ];
    }
	
	public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/products/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
