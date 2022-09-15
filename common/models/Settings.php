<?php

namespace common\models;

use Yii;
use Yii\db\ActiveRecord;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string|null $site_name
 * @property string|null $email
 * @property string|null $cord_x
 * @property string|null $cord_y
 */
class Settings extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['site_name', 'email'], 'string', 'max' => 50],
            [['cord_x', 'cord_y'], 'string', 'max' => 9],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_name' => 'Название сайта',
            'email' => 'Электронный адрес',
            'cord_x' => 'Координата X',
            'cord_y' => 'Координата Y',
        ];
    }

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }
}
