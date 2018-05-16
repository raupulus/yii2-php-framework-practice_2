<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "propietarios".
 *
 * @property int $id
 * @property string $nombre
 * @property string $dni
 *
 * @property Inmuebles[] $inmuebles
 */
class Propietarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propietarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'dni'], 'required'],
            [['nombre', 'dni'], 'string', 'max' => 255],
            [['dni'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'dni' => 'Dni',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInmuebles()
    {
        return $this->hasMany(Inmuebles::className(), ['propietario_id' => 'id']);
    }
}
