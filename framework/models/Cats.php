<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cats".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $parent
 * @property string|null $img
 */
class Cats extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cats';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent'], 'integer'],
            [['name'], 'string', 'max' => 24],
            [['img'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent' => 'Parent',
            'img' => 'Img',
        ];
    }
}
