<?php

use yii\db\Migration;

class m170814_163002_create_orders_Table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11),
            'name_recevice' => $this->string(),
            'location_recevice' => $this->string(),
            'phone_recevice' => $this->string(),
            'amount' => $this->bigInteger(),
            'status' => $this->integer()->defaultValue(0)->comment('0 : show, 1 : hide '),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'deleted_at' => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%orders}}');
    }
}
