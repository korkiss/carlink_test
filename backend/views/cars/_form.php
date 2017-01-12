<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Cars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cars-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'photo')->fileInput() ?>

    <?= $form->field($model, 'car_type')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'car_model')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'car_modification')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'car_year')->textInput() ?>

    <?= $form->field($model, 'car_mileage')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
