<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%orders}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name_recevice
 * @property string $location_recevice
 * @property string $phone_recevice
 * @property string $amount
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $deleted_at
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%orders}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'amount', 'status', 'created_at', 'updated_at'], 'integer'],
            [['deleted_at'], 'safe'],
            [['name_recevice', 'location_recevice', 'phone_recevice'], 'string', 'max' => 255],
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
            'name_recevice' => 'Name Recevice',
            'location_recevice' => 'Location Recevice',
            'phone_recevice' => 'Phone Recevice',
            'amount' => 'Amount',
            'status' => '0 : show, 1 : hide ',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public static function createNewOrder($member)
    {
        $model = new self;
        $model->user_id = $member->id;
        $model->name_recevice = $member->name;
        $model->location_recevice = $member->address;
        $model->phone_recevice = $member->phone;
        $model->amount = $_POST['price'];
        $model->save();

        return $model;
    }
}
