<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiHukumanDisiplin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referensi-hukuman-disiplin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaHukumanDisiplin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TingkatHukumanDisiplin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
