<?php

use yii\db\Migration;

class m170822_170025_add_coulm_content_product_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%products}}', 'content', $this->text());
    }

    public function safeDown()
    {
        echo "m170822_170025_add_coulm_content_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170822_170025_add_coulm_content_product_table cannot be reverted.\n";

        return false;
    }
    */
}
