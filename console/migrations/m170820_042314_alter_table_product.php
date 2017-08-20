<?php

use yii\db\Migration;

class m170820_042314_alter_table_product extends Migration
{
    public function safeUp()
    {
        $this->dropColumn('{{%products}}', 'company_id');
    }

    public function safeDown()
    {
         
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170820_042314_alter_table_product cannot be reverted.\n";

        return false;
    }
    */
}
