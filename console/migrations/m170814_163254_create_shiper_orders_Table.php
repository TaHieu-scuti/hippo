<?php

use yii\db\Migration;

class m170814_163254_create_shiper_orders_Table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%shiper_orders}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer(11),
            'user_id' => $this->integer(11),
            'status' => $this->integer()->defaultValue(0)->comment('0 : show, 1 : hide '),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'deleted_at' => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%shiper_orders}}');
    }
}
