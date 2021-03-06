<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%order_items}}".
 *
 * @property integer $id
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $user_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $deleted_at
 */
class OrderItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order_items}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'user_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['deleted_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'user_id' => 'User ID',
            'status' => '0 : show, 1 : hide ',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public function createNewOrderItem($order, $productIds, $member)
    {
        foreach ($productIds as $key => $idProduct) {
            $model = new self;
            $model->order_id = $order->id;
            $model->product_id = $idProduct;
            $model->user_id = $member->id;
            $model->save();   
        }
    }
}
