<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zakaz".
 *
 * @property int $id
 * @property string $ism
 * @property string $tel
 * @property int $user_id
 * @property int $tovar_id
 * @property int $soni
 * @property string $sum
 * @property string $date_z
 * @property string $date_y
 * @property int $activ
 */
class Zakaz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zakaz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ism', 'tel', 'user_id', 'tovar_id', 'soni',  'date_z', 'activ'], 'required'],
            [['user_id', 'tovar_id', 'soni', 'activ', 'sum'], 'integer'],
            [['date_z', 'date_y'], 'safe'],
            [['ism'], 'string', 'max' => 200],
            [['tel'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ism' => 'Ism',
            'tel' => 'Tel',
            'user_id' => 'User ID',
            'tovar_id' => 'Tovar ID',
            'soni' => 'Soni',
            'sum' => 'Sum',
            'date_z' => 'Date Z',
            'date_y' => 'Date Y',
            'activ' => 'Activ',
        ];
    }
    public function getTovar()
    {
        return $this->hasOne(Tovar::className(),['id'=>'tovar_id']);
    }
}
