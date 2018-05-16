<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inmuebles".
 *
 * @property int $id
 * @property int $propietario_id
 * @property int $n_habitaciones
 * @property int $n_wc
 * @property string $precio
 * @property bool $has_lavavajillas
 * @property bool $has_garage
 * @property bool $has_trastero
 * @property string $detalles
 *
 * @property Propietarios $propietario
 */
class Inmuebles extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inmuebles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['propietario_id'], 'required'],
            [['propietario_id', 'n_habitaciones', 'n_wc'], 'default', 'value' => null],
            [['propietario_id', 'n_habitaciones', 'n_wc'], 'integer'],
            [['precio'], 'number'],
            [['has_lavavajillas', 'has_garage', 'has_trastero'], 'boolean'],
            [['detalles'], 'string', 'max' => 255],
            [['propietario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Propietarios::className(), 'targetAttribute' => ['propietario_id' => 'id']],
            [['min_precio', 'max_precio'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'propietario_id' => 'Propietario ID',
            'n_habitaciones' => 'N Habitaciones',
            'n_wc' => 'Nº Baños',
            'precio' => 'Precio',
            'has_lavavajillas' => 'Tiene Lavavajillas',
            'has_garage' => 'Tiene Garage',
            'has_trastero' => 'Tiene Trastero',
            'detalles' => 'Detalles',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropietario()
    {
        return $this->hasOne(Propietarios::className(), ['id' => 'propietario_id']);
    }
}
