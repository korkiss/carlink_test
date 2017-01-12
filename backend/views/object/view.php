<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Objects */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Objects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objects-view">

  <h1><?= Html::encode($this->title) ?> - <?= $model->type->name ?></h1>

  <p>
    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    <?=
    Html::a('Delete', ['delete', 'id' => $model->id], [
      'class' => 'btn btn-danger',
      'data' => [
        'confirm' => 'Are you sure you want to delete this item?',
        'method' => 'post',
      ],
    ])
    ?>
  </p>

  <?=
  DetailView::widget([
    'model' => $model,
    'attributes' => [
      'id',
      'name:ntext',
      'date_created'
    ],
  ])
  ?>
  
  <?php
  $attributes = Array();
  foreach ($model->properties as $row) {
    $attributes[] = Array('label' => $row->name->name, 'value' => $row->value);
  }
  ?>

  <?=
  DetailView::widget([
    'model' => $model->properties,
    'attributes' => $attributes,
  ])
  ?>

</div>
