<?php

use yii\db\Migration;

class m170814_163158_create_companies_Table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%companies}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            'address' => $this->string(),
            'status' => $this->integer()->defaultValue(0)->comment('0 : show, 1 : hide '),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'deleted_at' => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%companies}}');
    }
}
