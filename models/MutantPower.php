<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mutant_power".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 */
class MutantPower extends \yii\db\ActiveRecord {
    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'mutant_power';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\MutantPowerQuery the active query used by this AR class.
     */
    public static function find() {
        return new \app\models\query\MutantPowerQuery(get_called_class());
    }
}
