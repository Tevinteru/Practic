<?php

use app\models\Sotrudniki;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SotrudnikiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Sotrudnikis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sotrudniki-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sotrudniki', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
            
                'value' => function ($model) {
                    return 'img/'.$model->Примечание;
                },
                'format'=>['image', ['width'=>100, 'height'=>100 ]]
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sotrudniki $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
