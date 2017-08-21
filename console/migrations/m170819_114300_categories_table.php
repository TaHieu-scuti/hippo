<?php

use yii\db\Migration;

class m170819_114300_categories_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%categories}}', [
            'id'          => $this->primaryKey(),
            'name'        => $this->string()->notNull()->unique(),
            'description' => $this->string(),
            'status'      => $this->integer()->defaultValue(0),
            'created_at'  => $this->integer(),
            'updated_at'  => $this->integer(),
            'deleted_at'  => $this->timestamp(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%categories}}');
    }
}
