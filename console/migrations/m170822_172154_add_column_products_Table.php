<?php

use yii\db\Migration;

class m170822_172154_add_column_products_Table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%products}}', 'company_id', $this->integer());
    }

    public function safeDown()
    {

    }
}
