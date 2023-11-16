<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TovarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tovar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Название') ?>

    <?= $form->field($model, 'Размер') ?>

    <?= $form->field($model, 'Ингридиенты') ?>

    <?= $form->field($model, 'Цена') ?>

    <?php // echo $form->field($model, 'Вес') ?>

    <?php // echo $form->field($model, 'Категория') ?>

    <?php // echo $form->field($model, 'Наличие') ?>

    <?php // echo $form->field($model, 'Описание') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
