<?php

namespace andmemasin\survey;

use andmemasin\myabstract\StaticModel;
use Yii;

/**
 * Class Status
 * @property integer $id
 * @property string $label
 * @package andmemasin\survey
 */
class Status extends StaticModel
{
    /** @var  integer $id*/
    public $id;

    /** @var  string $label */
    public $label;

    public static $keyColumn = 'id';

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

    // these are used for linking with main Results
    const STATUS_ANSWERED       = 'answered';
    const STATUS_SCREENED       = 'screened';
    const STATUS_END_QUOTA      = 'quota';

    /** @inheritdoc */
    public static function getModels()
    {
        return self::items();
    }

    /**
     * @return array
     * TODO use getModels instead!
     * @deprecated use getModels instead!
     */
    private static function items(){
        return [
            self::STATUS_CREATED => [
                'id' => self::STATUS_CREATED,
                'label' => Yii::t('app','Created'),
            ],
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
        ];
    }


    /**
     * @return Status[]
     */
    public static  function getAllStatuses(){
        $models = [];
        foreach (self::getModels() as $id=> $item){
            $models[] = self::getById($id);
        }
        return $models;
    }

    /**
     * Returns statuses for simple active/inactive usage
     * @return Status[]
     */
    public static function getSimpleStatuses(){
        $statuses  =[];
        $statuses[] = self::getById(self::STATUS_ACTIVE);
        $statuses[] = self::getById(self::STATUS_INACTIVE);
        return $statuses;
    }

    /**
     * Returns all statuses that allow active tasks
     * @return Status[]
     */
    public static function getActiveStatuses(){
        $statuses  =[];
        $statuses[] = self::getById(self::STATUS_ACTIVE);
        $statuses[] = self::getById(self::STATUS_TESTING);
        return $statuses;
    }

    /**
     * @param string $status
     * @return bool
     */
    public static function isLocked($status){
        $lockedStatuses = [
            self::STATUS_CONFIRMED, self::STATUS_ACTIVE, self::STATUS_TESTING,
            self::STATUS_INACTIVE, self::STATUS_ARCHIVED, self::STATUS_REJECTED,
            self::STATUS_COMPLAINT,
        ];
        return in_array($status,$lockedStatuses);
    }

    public static function isAnswered($status){
        $statuses = [
            self::STATUS_REJECTED,
            self::STATUS_COMPLAINT,
            self::STATUS_ANSWERED,
            self::STATUS_SCREENED,
            self::STATUS_END_QUOTA,
        ];
        return in_array($status,$statuses);
    }

    public static function isActive($status){
        $statuses = [
            self::STATUS_ACTIVE,
            self::STATUS_TESTING,
        ];
        return in_array($status,$statuses);
    }

    public static function isArchived($status){
        $statuses = [
            self::STATUS_ARCHIVED,
        ];
        return in_array($status,$statuses);
    }





    /**
     * Returns all status names in plain array without labels
     * @return array
     */
    public static function getAllStatusNames(){
        $out = [];
        foreach (self::getAllStatuses() as $name => $label) {
            $out = $name;
        }
        return $out;
    }


    public static function isStatus($id){
        return (!self::getById($id)==false);
    }


    public static function getStatusLabel($status){
        return self::getAllStatuses()[$status];
    }


}