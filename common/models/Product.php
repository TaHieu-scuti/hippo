<?php

namespace common\models;

use Yii;
/**
 * This is the model class for table "{{%products}}".
 *
 * @property integer $id
 * @property integer $company_id
 * @property integer $user_id
 * @property integer $name
 * @property string $title
 * @property string $description
 * @property string $price
 * @property string $product_cnt
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $deleted_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%products}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'user_id', 'name', 'status','product_cnt', 'created_at', 'updated_at', 'category_id'], 'integer'],
            [['company_id', 'user_id'], 'required', 'message' => '{attribute} không được để trống'],
            [['description'], 'string'],
            [['deleted_at'], 'safe'],
            [['title', 'price'], 'string', 'max' => 255],
            [['public_image'], 'file', 'skipOnEmpty' => true]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Nhà cung cấp',
            'user_id' => 'User ID',
            'name' => 'Tên sản phẩm',
            'category_id' => 'Loại sản phẩm',
            'title' => 'Tiêu đề',
            'description' => 'Mô tả',
            'price' => 'Giá',
            'product_cnt' => 'Số lượng',
            'status' => 'Trạng thái',
            'public_image' => 'Ảnh hiển thị',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->public_image->saveAs('uploads/' . $this->public_image->baseName . '.' . $this->public_image->extension);
            return true;
        } else {
            return false;
        }
    }

    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
