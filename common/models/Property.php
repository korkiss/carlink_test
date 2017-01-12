<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "properties".
 *
 * @property integer $id
 * @property string $name
 * @property string $property_type
 */
class Property extends \yii\db\ActiveRecord
{

  /**
   * @inheritdoc
   */
  public static function tableName()
  {
    return 'properties';
  }

  /**
   * @inheritdoc
   */
  public function rules()
  {
    return [
      [['name', 'property_type'], 'string', 'max' => 50],
    ];
  }

  /**
   * @inheritdoc
   */
  public function attributeLabels()
  {
    return [
      'id' => 'ID',
      'name' => 'Name',
      'property_type' => 'Property Type',
    ];
  }

}
