<?php

use yii\db\Migration;

class m170820_034638_alter_colom_products_Table extends Migration
{
    public function safeUp()
    {
        $this->alterColumn('{{%products}}', 'name', $this->string());
    }

    public function safeDown()
    {
        $this->alterColumn('{{%products}}', 'name', $this->integer());
    }
}
