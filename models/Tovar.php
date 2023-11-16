<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tovar".
 *
 * @property int $id
 * @property string $Название
 * @property string $Размер
 * @property string $Ингридиенты
 * @property string $Цена
 * @property string $Вес
 * @property string $Категория
 * @property string $Наличие
 * @property string $Описание
 */
class Tovar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tovar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Название', 'Размер', 'Ингридиенты', 'Цена', 'Вес', 'Категория', 'Наличие', 'Описание'], 'required'],
            [['Название', 'Размер', 'Ингридиенты', 'Цена', 'Вес', 'Категория', 'Наличие', 'Описание'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Название' => 'Название',
            'Размер' => 'Размер',
            'Ингридиенты' => 'Ингридиенты',
            'Цена' => 'Цена',
            'Вес' => 'Вес',
            'Категория' => 'Категория',
            'Наличие' => 'Наличие',
            'Описание' => 'Описание',
        ];
    }
}
