<?php

namespace andmemasin\survey;

use andmemasin\myabstract\StatusModel;
use Yii;

/**
 * Class Status
 * @package andmemasin\survey
 */
class Status extends StatusModel
{

    // all statuses separately
    const STATUS_CREATED        = "created";
    const STATUS_CONFIRMED      = "confirmed";
    const STATUS_ACTIVE         = "active";
    const STATUS_TESTING        = "testing";
    const STATUS_INACTIVE       = "inactive";
    const STATUS_ARCHIVED       = "archived";
    const STATUS_FAILED         = "failed";
    const STATUS_REJECTED       = "rejected";
    const STATUS_COMPLAINT      = "complaint";
    const STATUS_BOUNCED        = "bounced";

    // these are used for linking with main Results
    const STATUS_ANSWERED       = 'answered';
    const STATUS_SCREENED       = 'screened';
    const STATUS_END_QUOTA      = 'quota';

    /** {@inheritdoc} */
    public function getModelAttributes() : array
    {
        return array_merge(parent::getModelAttributes(), [
            self::STATUS_CONFIRMED => [
                'id' => self::STATUS_CONFIRMED,
                'label' => Yii::t('app','Confirmed'),
            ],
            self::STATUS_ACTIVE => [
                'id' => self::STATUS_ACTIVE,
                'label' => Yii::t('app','Active'),
            ],
            self::STATUS_TESTING => [
                'id' => self::STATUS_TESTING,
                'label' => Yii::t('app','Active for testing'),
            ],
            self::STATUS_INACTIVE => [
                'id' => self::STATUS_INACTIVE,
                'label' => Yii::t('app','Inactive'),
            ],
            self::STATUS_ARCHIVED => [
                'id' => self::STATUS_ARCHIVED,
                'label' => Yii::t('app','Archived'),
            ],
            self::STATUS_FAILED => [
                'id' => self::STATUS_FAILED,
                'label' => Yii::t('app','Failed'),
            ],
            self::STATUS_REJECTED => [
                'id' => self::STATUS_REJECTED,
                'label' => Yii::t('app','Rejected'),
            ],
            self::STATUS_COMPLAINT => [
                'id' => self::STATUS_COMPLAINT,
                'label' => Yii::t('app','Complaint'),
            ],

            self::STATUS_ANSWERED => [
                'id' => self::STATUS_ANSWERED,
                'label' => Yii::t('app','Answered'),
            ],
            self::STATUS_SCREENED => [
                'id' => self::STATUS_SCREENED,
                'label' => Yii::t('app','Screened out'),
            ],
            self::STATUS_END_QUOTA => [
                'id' => self::STATUS_END_QUOTA,
                'label' => Yii::t('app','Quota full'),
            ],
        ]);
    }



    /**
     * Returns statuses for simple active/inactive usage
     * @return Status[]
     */
    public static function getSimpleStatuses() : array
    {
        $statuses = [];
        $statuses[] = static::getById(self::STATUS_ACTIVE);
        $statuses[] = static::getById(self::STATUS_INACTIVE);
        return $statuses;
    }

    /**
     * Returns all statuses that allow active tasks
     * @return Status[]
     */
    public static function getActiveStatuses() : array
    {
        $statuses  =[];
        $statuses[] = self::getById(self::STATUS_ACTIVE);
        $statuses[] = self::getById(self::STATUS_TESTING);
        return $statuses;
    }

    public static function isLocked(string|int $status) : bool
    {
        $lockedStatuses = [
            self::STATUS_CONFIRMED, self::STATUS_ACTIVE, self::STATUS_TESTING,
            self::STATUS_INACTIVE, self::STATUS_ARCHIVED, self::STATUS_REJECTED,
            self::STATUS_COMPLAINT,
        ];
        return in_array($status,$lockedStatuses);
    }

    public function isAnswered(string|int $status) : bool
    {
        $statuses = [
            self::STATUS_ANSWERED,
            self::STATUS_SCREENED,
            self::STATUS_END_QUOTA,
        ];
        return in_array($status,$statuses);
    }

    /**
     * @param $status
     * @return bool Answered or rejected somehow
     */
    public function isClosed(string|int $status) : bool
    {
        $statuses = [
            self::STATUS_REJECTED,
            self::STATUS_COMPLAINT,
            self::STATUS_ANSWERED,
            self::STATUS_SCREENED,
            self::STATUS_END_QUOTA,
        ];
        return in_array($status,$statuses);
    }

    public function isActive(string|int $status) : bool
    {
        $statuses = [
            self::STATUS_ACTIVE,
            self::STATUS_TESTING,
        ];
        return in_array($status,$statuses);
    }

    public static function isArchived(string|int $status) : bool
    {
        $statuses = [
            self::STATUS_ARCHIVED,
        ];
        return in_array($status,$statuses);
    }

}
