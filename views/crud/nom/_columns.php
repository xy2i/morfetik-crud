<?php

use kartik\editable\Editable;
use app\views\crud\GridHelper;

use app\models\crud\config\ConfigNomSouscatgram;
/* @var relatedModel Related model to this catégorie. */

$tmp = $relatedModel::find()->select(['Code'])->all();
foreach ($tmp as $m) {
    $flexArray[$m->Code] = $m->Code;
}

$tmp = ConfigNomSouscatgram::find()->select(['option'])->all();
foreach ($tmp as $m) {
    $sousCatgramArray[$m->option] = $m->option;
}

return [
    GridHelper::getCheckboxColumn(),
    GridHelper::getSerialColumn(),
    GridHelper::getExpandRowColumn(),
    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute' => 'ID',
        'vAlign' => 'middle',
        'editableOptions' => [
            'header' => Yii::t('app', 'ID'),
            'inputType' => Editable::INPUT_TEXT,
            'formOptions' => ['action' => ['editable']],
        ],
    ],
    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute' => 'Lemme',
        'vAlign' => 'middle',
        'editableOptions' => [
            'header' => Yii::t('app', 'Lemma'),
            'inputType' => Editable::INPUT_TEXT,
            'formOptions' => ['action' => ['editable']],
        ],
    ],
    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute' => 'CatGram',
        'vAlign' => 'middle',
        'editableOptions' => [
            'header' => Yii::t('app', 'Gramatical category'),
            'inputType' => Editable::INPUT_TEXT,
            'formOptions' => ['action' => ['editable']],
        ],
    ],
    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute' => 'souscatgram',
        'vAlign' => 'middle',
        'editableOptions' => [
            'header' => Yii::t('app', 'Sous-catégorie grammaticale'),
            'inputType' => Editable::INPUT_DROPDOWN_LIST,
            'data' => $sousCatgramArray,
            'formOptions' => ['action' => ['editable']],
        ],
    ],
    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute' => 'Flex',
        'vAlign' => 'middle',
        'editableOptions' => [
            'header' => Yii::t('app', 'Flexion'),
            'inputType' => Editable::INPUT_DROPDOWN_LIST,
            'data' => $flexArray,
            'formOptions' => ['action' => ['editable']],
        ],
    ],
    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute' => 'Dom',
        'vAlign' => 'middle',
        'editableOptions' => [
            'header' => Yii::t('app', 'Dom'),
            'inputType' => Editable::INPUT_DROPDOWN_LIST,
            'data' => ['+' => 'Oui', '' => 'Non'],
            'formOptions' => ['action' => ['editable']],
        ],
    ],
    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute' => 'Grs',
        'vAlign' => 'middle',
        'editableOptions' => [
            'header' => Yii::t('app', 'Grs'),
            'inputType' => Editable::INPUT_DROPDOWN_LIST,
            'data' => ['+' => 'Oui', '' => 'Non'],
            'formOptions' => ['action' => ['editable']],
        ],
    ],
    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute' => 'Maj',
        'vAlign' => 'middle',
        'editableOptions' => [
            'header' => Yii::t('app', 'Maj'),
            'inputType' => Editable::INPUT_DROPDOWN_LIST,
            'data' => ['+' => 'Oui', '' => 'Non'],
            'formOptions' => ['action' => ['editable']],
        ],
    ],
    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute' => 'Lig',
        'vAlign' => 'middle',
        'editableOptions' => [
            'header' => Yii::t('app', 'Ligature'),
            'inputType' => Editable::INPUT_TEXT,
            'formOptions' => ['action' => ['editable']],
        ],
    ],
    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute' => 'Standard',
        'vAlign' => 'middle',
        'editableOptions' => [
            'header' => Yii::t('app', 'Standard'),
            'inputType' => Editable::INPUT_TEXT,
            'formOptions' => ['action' => ['editable']],
        ],
    ],
    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute' => 'Notes',
        'vAlign' => 'middle',
        'editableOptions' => [
            'header' => Yii::t('app', 'Notes'),
            'inputType' => Editable::INPUT_TEXT,
            'formOptions' => ['action' => ['editable']],
        ],
    ],
    GridHelper::getActionColumn(),
];
