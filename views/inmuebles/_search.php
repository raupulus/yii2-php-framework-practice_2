<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InmueblesSearch */
/* @var $form yii\widgets\ActiveForm */


$tiene = ['' => 'No Seleccionado', true => 'Si', false => 'No'];
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

    <?= $form->field($model, 'has_lavavajillas')->dropDownList($tiene) ?>

    <?= $form->field($model, 'has_garage')->dropDownList($tiene) ?>

    <?= $form->field($model, 'has_trastero')->dropDownList($tiene) ?>

    <?php // echo $form->field($model, 'detalles') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
