<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_barang".
 *
 * @property int $id
 * @property string $kode
 * @property string $jenis_barang
 */
class JenisBarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'jenis_barang'], 'required'],
            [['kode'], 'string', 'max' => 50],
            [['jenis_barang'], 'string', 'max' => 100],
            [['kode'], 'unique'],
            [['keterangan'],'safe'],
            [['jenis_barang'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'jenis_barang' => 'Jenis Barang',
        ];
    }
}
