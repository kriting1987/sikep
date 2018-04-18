<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiBank */

$this->title = 'Create Referensi Bank';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Bank', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-bank-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
