<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%payment_logs}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $time_request
 * @property string $request
 * @property string $response
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $deleted_at
 */
class PaymentLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%payment_logs}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['time_request', 'deleted_at'], 'safe'],
            [['request', 'response'], 'string'],
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
            'time_request' => 'Time Request',
            'request' => 'Request',
            'response' => 'Response',
            'status' => '1 : successful, 0 : Not successful ',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}
