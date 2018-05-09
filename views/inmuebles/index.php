<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InmueblesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inmuebles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inmuebles-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php /* Html::a('Crear Inmueble', ['create'], ['class' => 'btn
        btn-success']) */ ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'propietario.dni',
            'n_habitaciones',
            'n_wc',
            'precio',
            'has_lavavajillas:boolean',
            'has_garage:boolean',
            'has_trastero:boolean',
            'detalles',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
