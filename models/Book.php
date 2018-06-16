<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $ship
 * @property string $route
 * @property string $event
 * @property int $guests
 * @property string $name
 * @property string $phone
 * @property string $datefrom
 * @property string $dateto
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ship', 'route', 'event', 'guests', 'name', 'phone', 'datefrom', 'dateto'], 'required'],
            [['guests'], 'integer'],
            [['ship', 'route', 'event', 'name', 'phone', 'datefrom', 'dateto'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ship' => 'Ship',
            'route' => 'Route',
            'event' => 'Event',
            'guests' => 'Guests',
            'name' => 'Name',
            'phone' => 'Phone',
            'datefrom' => 'Datefrom',
            'dateto' => 'Dateto',
        ];
    }
}
