<?php

namespace app\models\crud;

use yii\db\ActiveRecord;

class Adjectif extends ActiveRecord
{
    public static function tableName()
    {
        return 'alemmes';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Lemme', 'CatGram', 'Flex',], 'required'],
            [['Lig', 'souscatgram'], 'default', 'value' => ''],
            [['Standard', 'Notes'], 'default']
        ];
    }
}
