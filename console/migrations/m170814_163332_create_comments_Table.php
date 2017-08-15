<?php

use yii\db\Migration;

class m170814_163332_create_comments_Table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),            
            'user_id' => $this->integer(11),
            'content' => $this->text(),
            'status' => $this->integer()->defaultValue(0)->comment('0 : show, 1 : hide '),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'deleted_at' => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%comments}}');
    }
}
