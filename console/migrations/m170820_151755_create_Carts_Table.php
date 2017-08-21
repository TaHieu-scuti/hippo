<?php

use yii\db\Migration;

class m170820_151755_create_Carts_Table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%carts}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11),
            'product_id' => $this->integer(11),
            'product_cnt' => $this->integer(),
            'status' => $this->integer()->defaultValue(0)->comment('0 : show, 1 : hide '),
            'pay_date' => $this->dateTime(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'deleted_at' => $this->dateTime(),
        ]);
    }

    public function safeDown()
    {
        
    }
}
