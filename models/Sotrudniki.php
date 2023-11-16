<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sotrudniki".
 *
 * @property int $id
 * @property string $Имя
 * @property string $Фамилия
 * @property string $Должность
 * @property string $Дата_ПриемаНаРаб
 * @property string $Зарплата
 * @property string $График_Работы
 * @property string $Номер
 * @property string $Примечание
 */
class Sotrudniki extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sotrudniki';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Имя', 'Фамилия', 'Должность', 'Дата_ПриемаНаРаб', 'Зарплата', 'График_Работы', 'Номер', 'Примечание'], 'required'],
            [['Имя', 'Фамилия', 'Должность', 'Дата_ПриемаНаРаб', 'Зарплата', 'График_Работы', 'Номер', 'Примечание'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Имя' => 'Имя',
            'Фамилия' => 'Фамилия',
            'Должность' => 'Должность',
            'Дата_ПриемаНаРаб' => 'Дата Приема На Раб',
            'Зарплата' => 'Зарплата',
            'График_Работы' => 'График Работы',
            'Номер' => 'Номер',
            'Примечание' => 'Примечание',
        ];
    }
}
