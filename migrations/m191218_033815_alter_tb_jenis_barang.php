<?php

use yii\db\Migration;

/**
 * Class m191218_033815_alter_tb_jenis_barang
 */
class m191218_033815_alter_tb_jenis_barang extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->addColumn('jenis_barang', 'keterangan', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191218_033815_alter_tb_jenis_barang cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191218_033815_alter_tb_jenis_barang cannot be reverted.\n";

        return false;
    }
    */
}
