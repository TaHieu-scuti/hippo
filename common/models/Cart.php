<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%carts}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $product_id
 * @property integer $product_cnt
 * @property integer $status
 * @property string $pay_date
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $deleted_at
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%carts}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'product_cnt', 'status', 'created_at', 'updated_at'], 'integer'],
            [['pay_date', 'deleted_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'product_id' => 'Product ID',
            'product_cnt' => 'Product Cnt',
            'status' => '0 : show, 1 : hide ',
            'pay_date' => 'Pay Date',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}
