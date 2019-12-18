<?php

use yii\db\Migration;

/**
 * Class m191218_032537_create_tb_jenis_barang
 */
class m191218_032537_create_tb_jenis_barang extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('jenis_barang', 
           [
               'id' => $this->primaryKey(),
               'kode' => $this->string(50)->notNull()->unique(),
               'jenis_barang'=> $this->string(100)->notNull()->unique(),
           ]

           );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191218_032537_create_tb_jenis_barang cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191218_032537_create_tb_jenis_barang cannot be reverted.\n";

        return false;
    }
    */
}
