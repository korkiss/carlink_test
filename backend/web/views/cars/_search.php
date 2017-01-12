<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CarsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cars-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'photo') ?>

    <?= $form->field($model, 'car_type') ?>

    <?= $form->field($model, 'car_model') ?>

    <?= $form->field($model, 'car_modification') ?>

    <?php // echo $form->field($model, 'car_year') ?>

    <?php // echo $form->field($model, 'car_mileage') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
