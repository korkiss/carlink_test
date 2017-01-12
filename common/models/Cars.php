<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property integer $id
 * @property resource $photo
 * @property string $car_type
 * @property string $car_model
 * @property string $car_modification
 * @property integer $car_year
 * @property string $car_mileage
 */
class Cars extends \yii\db\ActiveRecord
{

  /**
   * @inheritdoc
   */
  public static function tableName()
  {
    return 'cars';
  }

  /**
   * @inheritdoc
   */
  public function rules()
  {
    return [
      [['car_type', 'car_model', 'car_modification', 'car_year', 'car_mileage'], 'required'],
      [['car_type', 'car_model', 'car_modification', 'car_mileage'], 'string'],
      [['car_year'], 'integer'],
      [['photo'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
    ];
  }

  public function behaviors()
  {
    return [
      [
        'class' => '\yiidreamteam\upload\ImageUploadBehavior',
        'attribute' => 'photo',
        'thumbs' => [
          'thumb' => ['width' => 400, 'height' => 300],
          'thumb2' => ['width' => 100, 'height' => 50],
        ],
        'filePath' => '@webroot/images/[[pk]].[[extension]]',
        'fileUrl' => '/images/[[pk]].[[extension]]',
        'thumbPath' => '@webroot/images/[[profile]]_[[pk]].[[extension]]',
        'thumbUrl' => '/images/[[profile]]_[[pk]].[[extension]]',
      ],
    ];
  }
  
  public function getImageThumb1() {
    return $this->getThumbFileUrl('photo', 'thumb2');
  }

  /**
   * @inheritdoc
   */
  public function attributeLabels()
  {
    return [
      'id' => 'ID',
      'photo' => 'Photo',
      'car_type' => 'Car Type',
      'car_model' => 'Car Model',
      'car_modification' => 'Car Modification',
      'car_year' => 'Car Year',
      'car_mileage' => 'Car Mileage',
    ];
  }

}
