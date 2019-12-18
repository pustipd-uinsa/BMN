<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisBarang */

$this->title = 'Update Jenis Barang: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Jenis Barang', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-barang-update">
<div class="jenis-barang-create">

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">access_time</i>
                </div>
                <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
            </div>
            <div class="card-body ">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
        </div>
    </div>
</div>

</div>

