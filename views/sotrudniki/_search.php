<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SotrudnikiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sotrudniki-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Имя') ?>

    <?= $form->field($model, 'Фамилия') ?>

    <?= $form->field($model, 'Должность') ?>

    <?= $form->field($model, 'Дата_ПриемаНаРаб') ?>

    <?php // echo $form->field($model, 'Зарплата') ?>

    <?php // echo $form->field($model, 'График_Работы') ?>

    <?php // echo $form->field($model, 'Номер') ?>

    <?php // echo $form->field($model, 'Примечание') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
