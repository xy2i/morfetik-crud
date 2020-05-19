<?php

namespace app\models\search;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
use app\models\search\Forme;

/**
 * A general model class. Allows search on most fields.
 * Search is made only via Forme.
 */
class FormeSearch extends Forme
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['forme', 'lemme', 'primaryCategory'], 'safe'],
        ];
    }

    /**
     * Search with given parameters.
     * In 'searchParams' of the $params array, is stored various extra information
     * about how the search is to be performed.
     */
    public function search($params)
    {
        $query = Forme::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        //print_r($params);
        $this->load($params);
        /* Whether the search is accented or not. This is set via searchParams
         * in the controller. 
         */
        $isAccentSearch = boolval($params['searchParams']['accent']);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // Only find the first matching lemme if lemme is set, not all of them.
        /*
        if (isset($this->lemme)) {
            $query
                ->select('formes.*')
                ->from(['formes'])
                ->leftJoin(
                    ['f2' => 'formes'],
                    ['and', 'formes.lemme = f2.lemme', 'formes.forme > f2.forme',]
                )
                ->with('formes');
        }*/

        $query->andFilterWhere(['like', 'forme', $this->forme . '%', false])
            ->andFilterWhere(['like', 'primaryCategory', $this->primaryCategory]);

        /* If an accented search is set, use a MySQL collation that does accent-sensitive 
         * search.
         * Our queries have a utf8mb4 character set, so our desired collation that's
         * accent-sensitive is utf8mb4_bin.
         * See https://stackoverflow.com/questions/500826/how-to-conduct-an-accent-sensitive-search-in-mysql.
         */
        if ($isAccentSearch) {
            $query
                ->andFilterWhere(['like', 'lemme', $this->lemme . '% COLLATE utf8mb4_bin', false]);
        } else {
            $query
                ->andFilterWhere(['like', 'lemme', $this->lemme . '%', false]);
        }

        // Only find the first matching lemme if lemme is set, not all of them.
        /*
        if (isset($this->lemme)) {
            $query
                ->where(['f2.formeid' => null]);
        }*/

        return $dataProvider;
    }
}
