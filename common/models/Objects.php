<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "objects".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_created
 * @property integer $id_type
 */
class Objects extends \yii\db\ActiveRecord
{

  public function getprop_counter()
  {
    
    return count($this->properties);;
  }
  public function getProperties()
  {
    return $this->hasMany(ObjectProperty::className(), ['id_object' => 'id']);
  }

  public function getType()
  {
    return $this->hasOne(Types::className(), ['id' => 'id_type']);
  }

  /**
   * @inheritdoc
   */
  public static function tableName()
  {
    return 'objects';
  }

  /**
   * @inheritdoc
   */
  public function rules()
  {
    return [
      [['id'], 'required'],
      [['id', 'id_type'], 'integer'],
      [['name'], 'string'],
      [['date_created'], 'safe'],
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
      'date_created' => 'Date Created',
      'id_type' => 'Id Type',
    ];
  }

}
