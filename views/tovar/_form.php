<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tovar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tovar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Название')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Размер')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ингридиенты')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Цена')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Вес')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Категория')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Наличие')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Описание')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
