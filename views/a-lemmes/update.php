<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ALemmes */

$this->title = 'Update A Lemmes: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'A Lemmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alemmes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
