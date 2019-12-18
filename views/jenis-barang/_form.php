<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenisBarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-barang-form">

    <?php $form = ActiveForm::begin(); ?>
        <?= $form->errorSummary($model) ?> <!-- ADDED HERE -->

     <div class="row">
        <label class="col-md-3 col-form-label"><?=$model->getAttributeLabel('kode') ?></label>
        <div class="col-md-6"><?=$form->field($model, 'kode')->textInput(['maxlength' => true])->label(false)?></div></div> 

     <div class="row">
        <label class="col-md-3 col-form-label"><?=$model->getAttributeLabel('jenis_barang') ?></label>
        <div class="col-md-6"><?=$form->field($model, 'jenis_barang')->textInput(['maxlength' => true])->label(false)?></div></div> 

        <div class="row">
        <label class="col-md-3 col-form-label"><?=$model->getAttributeLabel('keterangan') ?></label>
        <div class="col-md-6"><?=$form->field($model, 'keterangan')->textArea()->label(false)?></div></div> 
      

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
