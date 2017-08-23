<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "{{%categories}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $deleted_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%categories}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['deleted_at'], 'safe'],
            [['name', 'description'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public static function getCategory(){
        $categories = self::find()->andWhere(['status' => 0])->andWhere(['deleted_at' => null])->all();
        return ArrayHelper::map($categories, 'id', 'name');
    }

    public function getTextStatus(){
        $array = Yii::$app->params['status'];
        foreach ($array as $key => $value) {
            if ($this->status === $key) {
                return $value;
            }
        }
    }

    public static function getAllCategory()
    {
        $category = self::find()
            ->andWhere(['status' => 0])
            ->andWhere(['deleted_at' => null])
            ->all();

        return $category;
    }

    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    public static function getCategoryLitmit()
    {
        $category = self::find()
            ->andWhere(['status' => 0])
            ->andWhere(['deleted_at' => null])
            ->orderBy(['id' => SORT_DESC ])
            ->limit(3)
            ->all();
        $array = [];
        foreach ($category as $key => $value) {
            $array[$key] = $value->id;
        }
        return $array;
    }
}
