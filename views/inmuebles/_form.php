<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inmuebles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inmuebles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'propietario_id')->textInput() ?>

    <?= $form->field($model, 'n_habitaciones')->textInput() ?>

    <?= $form->field($model, 'n_wc')->textInput() ?>

    <?= $form->field($model, 'precio')->textInput() ?>

    <?= $form->field($model, 'has_lavavajillas')->checkbox() ?>

    <?= $form->field($model, 'has_garage')->checkbox() ?>

    <?= $form->field($model, 'has_trastero')->checkbox() ?>

    <?= $form->field($model, 'detalles')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
