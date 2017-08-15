<?php

use yii\db\Migration;

class m170814_163347_create_product_comments_Table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%product_comments}}', [
            'id' => $this->primaryKey(),            
            'comment_id' => $this->integer(11),
            'product_id' => $this->integer(11),
            'status' => $this->integer()->defaultValue(0)->comment('0 : show, 1 : hide '),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'deleted_at' => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%product_comments}}');
    }
}
