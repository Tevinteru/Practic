<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin() ?>u
<?= $form->field($model, 'image')->fileInput() ?>
<button>Загрузить</button>
<?php ActiveForm::end() ?>
