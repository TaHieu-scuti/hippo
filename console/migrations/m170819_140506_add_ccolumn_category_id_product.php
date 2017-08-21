<?php

use yii\db\Migration;

class m170819_140506_add_ccolumn_category_id_product extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%products}}', 'category_id', $this->integer(11));
    }

    public function safeDown()
    {
        $this->addColumn('{{%products}}', 'category_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170819_140506_add_ccolumn_category_id_product cannot be reverted.\n";

        return false;
    }
    */
}
