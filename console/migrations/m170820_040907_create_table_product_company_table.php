<?php

use yii\db\Migration;

/**
 * Handles the creation of table `table_product_company`.
 */
class m170820_040907_create_table_product_company_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%company_product}}', [
            'product_id' => $this->integer(),
            'company_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%company_product}}');
    }
}
