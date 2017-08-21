<?php

use yii\db\Migration;

class m170820_043114_alter_column_Table extends Migration
{
    public function safeUp()
    {
        $this->alterColumn('{{%orders}}', 'deleted_at', $this->dateTime());
        $this->alterColumn('{{%companies}}', 'deleted_at', $this->dateTime());
        $this->alterColumn('{{%shiper_orders}}', 'deleted_at', $this->dateTime());
        $this->alterColumn('{{%order_items}}', 'deleted_at', $this->dateTime());
        $this->alterColumn('{{%comments}}', 'deleted_at', $this->dateTime());
        $this->alterColumn('{{%product_comments}}', 'deleted_at', $this->dateTime());
        $this->alterColumn('{{%payment_logs}}', 'deleted_at', $this->dateTime());
        $this->alterColumn('{{%discount_codes}}', 'deleted_at', $this->dateTime());
        $this->alterColumn('{{%user}}', 'deleted_at', $this->dateTime());
        $this->alterColumn('{{%categories}}', 'deleted_at', $this->dateTime());
        $this->alterColumn('{{%products}}', 'deleted_at', $this->dateTime());
    }

    public function safeDown()
    {
        $this->alterColumn('{{%orders}}', 'deleted_at', $this->timestamp());
        $this->alterColumn('{{%companies}}', 'deleted_at', $this->timestamp());
        $this->alterColumn('{{%shiper_orders}}', 'deleted_at', $this->timestamp());
        $this->alterColumn('{{%order_items}}', 'deleted_at', $this->timestamp());
        $this->alterColumn('{{%comments}}', 'deleted_at', $this->timestamp());
        $this->alterColumn('{{%product_comments}}', 'deleted_at', $this->timestamp());
        $this->alterColumn('{{%payment_logs}}', 'deleted_at', $this->timestamp());
        $this->alterColumn('{{%discount_codes}}', 'deleted_at', $this->timestamp());
        $this->alterColumn('{{%user}}', 'deleted_at', $this->timestamp());
        $this->alterColumn('{{%categories}}', 'deleted_at', $this->timestamp());
        $this->alterColumn('{{%products}}', 'deleted_at', $this->timestamp());
    }
}
