<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Sotrudniki $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sotrudniki-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'Имя')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Фамилия')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Должность')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Дата_ПриемаНаРаб')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Зарплата')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'График_Работы')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Номер')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Примечание')->FileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
