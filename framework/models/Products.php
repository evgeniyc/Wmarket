<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $title Наименование
 * @property string $descr Описание
 * @property string $img Изображение
 * @property int $price Цена
 *
 * @property Product[] $products
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
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
            [['title', 'descr', 'price'], 'required'],
            [['descr'], 'string'],
            [['price'], 'integer'],
            [['title'], 'string', 'max' => 32],
            [['img'], 'string', 'max' => 24],
			[['imageFile'], 'file', 'extensions' => 'png, jpg'],
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
            'price' => 'Цена',
			'imageFile' => 'Изображение',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['prod' => 'id']);
    }
	
	public function beforeSave($insert)
	{
		if (!parent::beforeSave($insert)) {
			return false;
		}

		$this->imageFile = UploadedFile::getInstance($this, 'imageFile');
		if ($this->validate('imageFile')) {
			if (!!$this->imageFile) {
				$this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
				$this->img = $this->imageFile->baseName . '.' . $this->imageFile->extension;
			}
		}
		return true;
	}
}
