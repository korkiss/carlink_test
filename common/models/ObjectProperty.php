<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "object_properties".
 *
 * @property integer $id
 * @property integer $id_object
 * @property integer $id_property
 * @property string $value
 */
class ObjectProperty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'object_properties';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_object', 'id_property'], 'integer'],
            [['value'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_object' => 'Id Object',
            'id_property' => 'Id Property',
            'value' => 'Value',
        ];
    }
}
