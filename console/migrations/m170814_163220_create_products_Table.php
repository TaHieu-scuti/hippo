<?php

use yii\db\Migration;

class m170814_163220_create_products_Table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer(11),
            'user_id' => $this->integer(11),
            'name' => $this->integer(11),
            'title' => $this->string(),
            'description' => $this->text(),
            'price' => $this->string(),
            'product_cnt' => $this->string()->comment('Total product count'),
            'status' => $this->integer()->defaultValue(0)->comment('0 : show, 1 : hide '),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'deleted_at' => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
