<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sotrudniki $model */

$this->title = 'Update Sotrudniki: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sotrudnikis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sotrudniki-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
