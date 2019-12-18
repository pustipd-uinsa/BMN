<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JenisBarang */

$this->title = 'Jenis Barang Baru';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Jenis Barang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-barang-create">
<div class="row">
    <div class="col-md-12">
        <div class="x_panel ">
            <div class="x_title">
             
            <h3><?= Html::encode($this->title) ?></h3>

            </div>
            <div class="x_content">

           
<?= $this->render('_form', [
    'model' => $model,
]) ?>

            </div>
        </div>
    </div>
</div>

</div>

