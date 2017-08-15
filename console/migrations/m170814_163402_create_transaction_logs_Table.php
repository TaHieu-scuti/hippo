<?php

use yii\db\Migration;

class m170814_163402_create_transaction_logs_Table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%payment_logs}}', [
            'id' => $this->primaryKey(),            
            'user_id' => $this->integer(11),
            'time_request' => $this->dateTime(),
            'request' => $this->text(),
            'response' => $this->text(),
            'status' => $this->integer()->comment('1 : successful, 0 : Not successful '),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'deleted_at' => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%payment_logs}}');
    }
}
