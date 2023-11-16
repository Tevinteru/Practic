<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Sotrudniki $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sotrudnikis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sotrudniki-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Имя',
            'Фамилия',
            'Должность',
            'Дата_ПриемаНаРаб',
            'Зарплата',
            'График_Работы',
            'Номер',
            [
                'attribute'=>'Примечание',
                'value'=>'img/'.$model->Примечание,
                'format'=>['image', ['width'=>100, 'height'=>100 ]]
            ],
        ],
    ]) ?>

</div>
