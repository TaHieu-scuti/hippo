<?php

use yii\db\Migration;

class m170814_163415_create_discount_codes_Table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%discount_codes}}', [
            'id' => $this->primaryKey(),            
            'code' => $this->integer(11),
            'type' => $this->string(30),
            'status' => $this->integer()->defaultValue(0)->comment('0 : show, 1 : hide '),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'deleted_at' => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%discount_codes}}');
    }
}
