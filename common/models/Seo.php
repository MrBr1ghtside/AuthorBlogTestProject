<?php

namespace common\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "seo".
 *
 * @property int $id
 * @property int|null $item_id
 * @property string $modelName
 * @property string|null $h1
 * @property string|null $title
 * @property string|null $keywords
 * @property string|null $description
 * @property string|null $text
 * @property string|null $meta_index
 * @property string|null $redirect_301
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id'], 'integer'],
            [['modelName'], 'required'],
            [['text'], 'string'],
            [['modelName'], 'string', 'max' => 150],
            [['h1', 'title', 'keywords', 'meta_index'], 'string', 'max' => 255],
            [['description', 'redirect_301'], 'string', 'max' => 522],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',
            'modelName' => 'Model Name',
            'h1' => 'H 1',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'text' => 'Text',
            'meta_index' => 'Meta Index',
            'redirect_301' => 'Redirect  301',
        ];
    }

     public function search($params)
    {
    $query = Seo::find();

    $dataProvider = new ActiveDataProvider([
        'query' => $query,
        'pagination' => [
          'pageSize' => 10,
        ],
    ]);

    $this->load($params);

    if (!$this->validate()) {
        return $dataProvider;
    }
    $query->orFilterWhere(['like', 'title', $this->text]);

    return $dataProvider;
    }
}
