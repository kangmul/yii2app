<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php if (Yii::$app->session->hasFlash('success')) : ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= Yii::$app->session->getFlash('success'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>


<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name'); ?>
<?= $form->field($model, 'email'); ?>
<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']); ?>
<?php $form->end(); ?>