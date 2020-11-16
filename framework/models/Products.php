<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
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
            'img' => 'Имя файла',
            'price' => 'Цена',
            'sdescr' => 'Краткое описание',
            'cat' => 'Категория',
			'imageFile' => 'Изображение',
        ];
    }
	
	public function beforeSave($insert)
	{
		if (!parent::beforeSave($insert)) {
			return false;
		}
		$this->imageFile = UploadedFile::getInstance($this, 'imageFile');
		if (isset($this->imageFile) && $this->validate('imageFile')) {
				$this->imageFile->saveAs('uploads/products/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
				$this->img = $this->imageFile->baseName . '.' . $this->imageFile->extension;
			
			} 
		return true;
	}
	
	public function afterSave($insert, $changedAttributes)
		{
		 parent::afterSave($insert, $changedAttributes);
		 echo 'Worked!';
		}/*
	public function afterSave ( $insert, $changedAttributes )
	{
		if (!parent::afterSave($insert, $changedAttributes)) {
			return false;
		}
		if(!$insert) {
			echo 'Worked';
			//unlink(Yii::getAlias('@app/uploads/products/'.$changedAttributes['img']));
			//print_r($changedAttributes);
			return true;
		}
		return false;
	}*/
	
}
