<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InmueblesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inmuebles-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'propietario_id') ?>

    <?= $form->field($model, 'n_habitaciones') ?>

    <?= $form->field($model, 'n_wc') ?>

    Mínimo<?= $form->field($model, 'min_precio') ?>

    Máximo<?= $form->field($model, 'max_precio') ?>

    <?= $form->field($model, 'has_lavavajillas')->checkbox() ?>

    <?= $form->field($model, 'has_garage')->checkbox() ?>

    <?= $form->field($model, 'has_trastero')->checkbox() ?>

    <?php // echo $form->field($model, 'detalles') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
