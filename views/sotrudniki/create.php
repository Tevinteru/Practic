<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sotrudniki $model */

$this->title = 'Create Sotrudniki';
$this->params['breadcrumbs'][] = ['label' => 'Sotrudnikis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sotrudniki-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
