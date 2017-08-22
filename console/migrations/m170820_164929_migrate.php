<?php

use yii\db\Migration;

class m170820_164929_migrate extends Migration
{
    public function safeUp()
    {
         $this->addColumn('{{%user}}', 'name', $this->string());
    }

    public function safeDown()
    {
        echo "m170820_164929_migrate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170820_164929_migrate cannot be reverted.\n";

        return false;
    }
    */
}
