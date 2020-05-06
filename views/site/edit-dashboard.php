<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Edition';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1 class="text-center">Interface de modification Morfetik</h1>
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">Lemmes</h2>
                <ul class="list-group">
                    <a class="list-group-item list-group-item-action text-center" href="<?= Url::toRoute('crud/adjectif'); ?>">Adjectifs</a>
                    <a class="list-group-item list-group-item-action text-center" href="<?= Url::toRoute('crud/nom'); ?>">Noms</a>
                    <a class="list-group-item list-group-item-action text-center" href="<?= Url::toRoute('crud/verbe'); ?>">Verbes</a>
                    <a class="list-group-item list-group-item-action text-center" href="<?= Url::toRoute('crud/adverbe'); ?>">Adverbes</a>
                    <a class="list-group-item list-group-item-action text-center" href="<?= Url::toRoute('crud/grammaire'); ?>">Grammaire</a>
                </ul>
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Codes</h2>
                <ul class="list-group">
                    <a class="list-group-item list-group-item-action text-center" href="<?= Url::toRoute('crud/codes-adjectif'); ?>">Adjectifs</a>
                    <a class="list-group-item list-group-item-action text-center" href="<?= Url::toRoute('crud/codes-nom'); ?>">Noms</a>
                    <a class="list-group-item list-group-item-action text-center" href="<?= Url::toRoute('crud/codes-verbe'); ?>">Verbes</a>
                </ul>
            </div>
        </div>
    </div>
</div>