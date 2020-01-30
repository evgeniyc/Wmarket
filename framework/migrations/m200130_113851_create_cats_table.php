<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cats}}`.
 */
class m200130_113851_create_cats_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cats}}', [
            'id' => $this->primaryKey(3),
            'name' => $this->string(24),
            'parent' => $this->tinyInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cats}}');
    }
}
