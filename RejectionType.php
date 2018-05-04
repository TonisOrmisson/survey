<?php

namespace andmemasin\survey;

use andmemasin\myabstract\StaticModel;
use Yii;

class RejectionType extends StaticModel
{
    const TYPE_HARD_BOUNCE = 'hard';
    const TYPE_SOFT_BOUNCE = 'soft';
    const TYPE_COMPLAINT = 'complaint';
    const TYPE_ANSWERED = 'answered';
    const TYPE_OTHER = 'other';

    /** {@inheritdoc} */
    public static $keyColumn = 'name';

    /** {@inheritdoc} */
    public static function getModels(){
        return [
            self::TYPE_HARD_BOUNCE => [
                'type' => self::TYPE_HARD_BOUNCE,
                'name'=> Yii::t('app','Email hard bounce'),
                'description' => Yii::t('app','Hard bounce'),
            ],
            self::TYPE_SOFT_BOUNCE => [
                'type' => self::TYPE_SOFT_BOUNCE,
                'name'=> Yii::t('app','Email soft bounce'),
                'description' => Yii::t('app','Soft bounce'),
            ],
            self::TYPE_COMPLAINT => [
                'type' => self::TYPE_COMPLAINT,
                'name'=> Yii::t('app','Email spam complaint'),
                'description' => Yii::t('app','Email spam complaint'),
            ],
            self::TYPE_ANSWERED => [
                'type' => self::TYPE_ANSWERED,
                'name'=> Yii::t('app','Answered already'),
                'description' => Yii::t('app','Answered already'),
            ],
            self::TYPE_OTHER => [
                'type' => self::TYPE_OTHER,
                'name'=> Yii::t('app','Other'),
                'description' => Yii::t('app','Other'),
            ],

        ];
    }

}