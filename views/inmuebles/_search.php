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

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'propietario_id') ?>

    <?= $form->field($model, 'n_habitaciones') ?>

    <?= $form->field($model, 'n_wc') ?>

    <?= $form->field($model, 'precio') ?>

    <?php // echo $form->field($model, 'has_lavavajillas')->checkbox() ?>

    <?php // echo $form->field($model, 'has_garage')->checkbox() ?>

    <?php // echo $form->field($model, 'has_trastero')->checkbox() ?>

    <?php // echo $form->field($model, 'detalles') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
