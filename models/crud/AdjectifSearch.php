<?php

namespace app\models\crud;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\crud\Adjectif;

/**
 * AdjectifSearch represents the model behind the search form about `app\models\Adjectif`.
 */
class AdjectifSearch extends Adjectif
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Lemme', 'CatGram', 'souscatgram', 'Flex', 'Notes'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Adjectif::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'ID', $this->ID])
            ->andFilterWhere(['like', 'Lemme', $this->Lemme])
            ->andFilterWhere(['like', 'CatGram', $this->CatGram])
            ->andFilterWhere(['like', 'souscatgram', $this->souscatgram])
            ->andFilterWhere(['like', 'Flex', $this->Flex])
            ->andFilterWhere(['like', 'Notes', $this->Notes]);

        return $dataProvider;
    }
}
