<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Adverbe;

class AdverbeController extends Controller
{
    public function actionIndex()
    {
        $query = Adverbe::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $adverbes = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'adverbes' =>  $adverbes,
            'pagination' => $pagination,
        ]);
    }
}