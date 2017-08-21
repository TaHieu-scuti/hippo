<?php

use yii\db\Migration;

class m170819_160819_add_ccolumn_public_image_product extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%products}}', 'public_image', $this->string());


    }

    public function safeDown()
    {
        echo "m170819_160819_add_ccolumn_public_image_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170819_160819_add_ccolumn_public_image_product cannot be reverted.\n";

        return false;
    }
    */
}
