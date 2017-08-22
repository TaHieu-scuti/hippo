<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "{{%companies}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $address
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $deleted_at
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%companies}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['deleted_at'], 'safe'],
            [['name', 'email', 'address'], 'string', 'max' => 255],
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
            'email' => 'Email',
            'address' => 'Address',
            'status' => 'Trạng thái ',
        ];
    }

    public static function getCompanies(){
        $companies = self::find()->andWhere(['status' => 0])->andWhere(['deleted_at' => null])->all();
        return ArrayHelper::map($companies, 'id', 'name');
    }

    public function getTextStatus(){
        $array = Yii::$app->params['status'];
        foreach ($array as $key => $value) {
            if ($this->status === $key) {
                return $value;
            }
        }
    }
}
