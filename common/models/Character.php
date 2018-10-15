<?php

namespace common\models;

use paulzi\jsonBehavior\JsonBehavior;
use paulzi\jsonBehavior\JsonValidator;

/**
 * This is the model class for table "character".
 *
 * @property integer $id
 * @property integer $user_id
 *
 * Core information
 * @property string $name
 * @property string $security_clearance
 * @property string $home_sector
 * @property integer $clone_number
 * @property string $gender
 * @property string $personality
 *
 * Development
 * @property integer $treason_stars
 * @property integer $xp_points
 * @property array $stats
 *
 * Skills
 * @property array $skills
 *
 * Wellbeing
 * @property integer $moxie
 * @property integer $max_moxie
 * @property integer $wounds
 * @property string $memory
 *
 * Equipment
 * @property string $equipment
 *
 * @property Users $user
 */
class Character extends \yii\db\ActiveRecord
{

    const GENDER_MALE = 'm';
    const GENDER_FEMALE = 'f';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'character';
    }

    public function behaviors()
    {
        return [
            [
                'class' => JsonBehavior::class,
                'attributes' => ['stats', 'skills'],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'security_clearance', 'home_sector', 'clone_number'], 'required'],
            [['user_id', 'clone_number', 'treason_stars', 'xp_points', 'moxie', 'max_moxie', 'wounds'], 'integer'],
            [['personality', 'memory', 'equipment'], 'string'],
            [['name', 'security_clearance', 'home_sector'], 'string', 'max' => 50],
            [['stats', 'skills'], JsonValidator::class],
            ['gender', 'default', 'value' => self::GENDER_MALE],
            ['gender', 'in', 'range' => [self::GENDER_MALE, self::GENDER_FEMALE]],
        ];
    }

    public function attributeLabels()
    {
        return [
            'clone_number' => 'Clone#'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    public function securityClearanceList()
    {
        return array_combine($this->securityClearances(), array_map('ucfirst', $this->securityClearances()));
    }

    public function securityClearances()
    {
        return [
            'infrared',
            'red',
            'orange',
            'yellow',
            'green',
            'blue',
            'indigo',
            'violet',
            'ultraviolet',
        ];
    }

    public function stats()
    {
        return [
            'violence',
            'chutzpah',
            'brains',
            'mechanics'
        ];
    }

    public function skills()
    {
        return [
            'athletics',
            'guns',
            'melee',
            'throw',
            'science',
            'psychology',
            'bureaucracy',
            'alpha complex',
            'bluff',
            'charm',
            'intimidate',
            'stealth',
            'operate',
            'engineer',
            'program',
            'demolitions',
        ];
    }

    public function getFullName()
    {
        return $this->name . '-' . ucfirst($this->security_clearance[0]) . '-' . mb_strtoupper($this->home_sector);
    }

    public function getStat($stat)
    {
        return isset($this->stats[$stat]) ? $this->stats[$stat] : null;
    }

    public function getSkill($skill)
    {
        return isset($this->skills[$skill]) ? $this->skills[$skill] : null;
    }

}