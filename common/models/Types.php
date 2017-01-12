<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "types".
 *
 * @property integer $id
 * @property string $name
 */
class Types extends \yii\db\ActiveRecord
{

  public function getProperties()
  {
    return $this->hasMany(Property::className(), ['id' => 'item_id'])
        ->viaTable('type_properties', ['order_id' => 'id']);
  }

  /**
   * @inheritdoc
   */
  public static function tableName()
  {
    return 'types';
  }

  /**
   * @inheritdoc
   */
  public function rules()
  {
    return [
      [['id'], 'required'],
      [['id'], 'integer'],
      [['name'], 'string', 'max' => 50],
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
    ];
  }

}
