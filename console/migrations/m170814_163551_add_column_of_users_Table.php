<?php

use yii\db\Migration;

class m170814_163551_add_column_of_users_Table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'code_id', $this->integer());
        $this->addColumn('{{%user}}', 'address', $this->string());
        $this->addColumn('{{%user}}', 'phone', $this->string(50));
        $this->addColumn('{{%user}}', 'birthday', $this->string(50));
        $this->addColumn('{{%user}}', 'genger', $this->integer(2));
        $this->addColumn('{{%user}}', 'type', $this->integer());
        $this->addColumn('{{%user}}', 'deleted_at', $this->timestamp());
    }

    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'code');
        $this->dropColumn('{{%user}}', 'address');
        $this->dropColumn('{{%user}}', 'phone');
        $this->dropColumn('{{%user}}', 'birthday');
        $this->dropColumn('{{%user}}', 'genger');
        $this->dropColumn('{{%user}}', 'type');
        $this->dropColumn('{{%user}}', 'deleted_at');
    }
}
