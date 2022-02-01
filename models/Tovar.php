<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tovar".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $text
 * @property int $cate_id
 * @property string $narx
 * @property string $skidka
 * @property string $img
 * @property int $news
 * @property int $soni
 * @property string $date
 */
class Tovar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tovar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'text', 'cate_id', 'narx','news', 'soni', 'date'], 'required'],
            [['user_id', 'cate_id', 'news', 'soni', 'narx', 'skidka'], 'integer'],
            [['text'], 'string'],
            [['date'], 'safe'],
            ['img', 'file', 'extensions' => 'jpg,png'],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'text' => 'Text',
            'cate_id' => 'Cate ID',
            'narx' => 'Narx',
            'skidka' => 'Skidka',
            'img' => 'Img',
            'news' => 'News',
            'soni' => 'Soni',
            'date' => 'Date',
        ];
    }
    public function getCate()
    {
        return $this->hasOne(Category::className(), ['id' => 'cate_id']);
    }
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
