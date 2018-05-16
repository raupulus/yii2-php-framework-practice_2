<?php

use yii\base\View;
use yii\grid\DataColumn;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InmueblesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inmuebles';
$this->params['breadcrumbs'][] = $this->title;

$mostrarBoton = <<<EOT
    $('.btnTelefono').on('click', function() { 
        var tel = $(this).data('tlf');
        $(this).val(tel);
    });    
EOT;

$this->registerJs($mostrarBoton);
?>

<div class="inmuebles-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php /* Html::a('Crear Inmueble', ['create'], ['class' => 'btn
        btn-success']) */ ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'propietario.dni',
            'n_habitaciones',
            'n_wc',
            'precio:currency',
            'has_lavavajillas:boolean',
            'has_garage:boolean',
            'has_trastero:boolean',
            'detalles',

            /*
            [
                'class' => DataColumn::className(), // this line is optional
                'attribute' => 'propietario.telefono',
                'format' => 'text',
                'label' => 'Contactar',
            ],
            */

            [
                'label' => 'Contactar',
                'format' => 'raw',
                'value' => function($model, $key) {
                    return Html::buttonInput('Estoy Interesado', ['class' => 'btn btn-success btnTelefono', 'data-tlf' => $model->propietario->telefono]).Html::hiddenInput('telefono', $model->propietario->telefono);
                }

            ],

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
