<?php

use yii\db\Migration;

/**
 * Handles the creation of table `messages`.
 */
class m170728_144126_create_messages_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') { // Тип БД, далее тип таблицы и стандартная кодировка для этой таблицы.
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('messages', [
            'id' => $this->primaryKey(),
            'text' => $this->text()->notNull(),
            'userId' => $this->integer()->notNull(),
            'receiver' => $this->integer()->notNull(),
            'dateSent' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'status' => $this->integer()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('messages');
    }
}
