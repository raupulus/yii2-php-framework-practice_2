<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Inmuebles */

$this->title = 'Create Inmuebles';
$this->params['breadcrumbs'][] = ['label' => 'Inmuebles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inmuebles-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
