<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CarsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-index">

  <h1><?= Html::encode($this->title) ?></h1>
  <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

  <p>
    <?= Html::a('Create Cars', ['create'], ['class' => 'btn btn-success']) ?>
  </p>
  <?=
  GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
      ['class' => 'yii\grid\SerialColumn'],
      'id',
      [
        'attribute' => 'ImageThumb1',
        'label' => 'Image',
        'format' => 'html',
        'content' => function($data) {
          $imageUrl = $data['ImageThumb1'];
          return Html::img($imageUrl, ['alt' => 'yii', 'width' => '250', 'height' => '100']);
        }
        ],
        'car_type:ntext',
        'car_model:ntext',
        'car_modification:ntext',
        // 'car_year',
        // 'car_mileage:ntext',
        ['class' => 'yii\grid\ActionColumn'],
      ],
    ]);
    ?>
</div>
