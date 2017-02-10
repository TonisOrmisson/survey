<?php

namespace andmemasin\survey;

class Status
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

    const STATUS_ANSWERED       = 'answered';
    const STATUS_SCREENED       = 'screened';
    const STATUS_END_QUOTA      = 'quota';



    /**
     * Returns all possible status values with description.
     * @return array
     */
    public static function getAllStatuses(){
        return [
            self::STATUS_CREATED    =>'Created',
            self::STATUS_CONFIRMED  =>'Confirmed',
            self::STATUS_ACTIVE     =>'Fully active',
            self::STATUS_TESTING    =>'Active for testing only',
            self::STATUS_INACTIVE   =>'Inactive state',
            self::STATUS_ARCHIVED   =>'Archived',
            self::STATUS_FAILED     =>'Failed',
            self::STATUS_REJECTED   =>'Rejected',
            self::STATUS_COMPLAINT  =>'Complaint',

            self::STATUS_ANSWERED   =>'Answered',
            self::STATUS_SCREENED   =>'Screened out',
            self::STATUS_END_QUOTA  =>'Quota Full',
        ];
    }

    /**
     * Returns statuses for simple active/inactive usage
     * @return string[]
     */
    public static function getSimpleStatuses(){
        return [
            self::STATUS_ACTIVE=>self::getStatusLabel(self::STATUS_ACTIVE),
            self::STATUS_INACTIVE=>self::getStatusLabel(self::STATUS_INACTIVE),
        ];
    }

    /**
     * Returns all statuses that do not allow the to edit the model KEY any more
     * @return string[]
     */
    public static function getLockedStatuses(){
        return [
            self::STATUS_CONFIRMED=>self::getStatusLabel(self::STATUS_CONFIRMED),
            self::STATUS_ACTIVE=>self::getStatusLabel(self::STATUS_ACTIVE),
            self::STATUS_TESTING=>self::getStatusLabel(self::STATUS_TESTING),
            self::STATUS_INACTIVE=>self::getStatusLabel(self::STATUS_INACTIVE),
            self::STATUS_ARCHIVED=>self::getStatusLabel(self::STATUS_ARCHIVED),
            self::STATUS_REJECTED=>self::getStatusLabel(self::STATUS_REJECTED),
            self::STATUS_COMPLAINT=>self::getStatusLabel(self::STATUS_COMPLAINT),
        ];
    }

    /**
     * @return string[]
     */
    public static function getResponseStatuses(){
        return [
            self::STATUS_ACTIVE=>self::getStatusLabel(self::STATUS_ACTIVE),
            self::STATUS_INACTIVE=>self::getStatusLabel(self::STATUS_INACTIVE),
            self::STATUS_ARCHIVED=>self::getStatusLabel(self::STATUS_ARCHIVED),
            self::STATUS_REJECTED=>self::getStatusLabel(self::STATUS_REJECTED),
            self::STATUS_COMPLAINT=>self::getStatusLabel(self::STATUS_COMPLAINT),
            self::STATUS_ANSWERED=>self::getStatusLabel(self::STATUS_ANSWERED),
            self::STATUS_SCREENED=>self::getStatusLabel(self::STATUS_SCREENED),
            self::STATUS_END_QUOTA=>self::getStatusLabel(self::STATUS_END_QUOTA),
        ];
    }

    /**
     * @return string[]
     */
    public static function getResponseClosedStatuses(){
        return [
            self::STATUS_REJECTED=>self::getStatusLabel(self::STATUS_REJECTED),
            self::STATUS_COMPLAINT=>self::getStatusLabel(self::STATUS_COMPLAINT),
            self::STATUS_ANSWERED=>self::getStatusLabel(self::STATUS_ANSWERED),
            self::STATUS_SCREENED=>self::getStatusLabel(self::STATUS_SCREENED),
            self::STATUS_END_QUOTA=>self::getStatusLabel(self::STATUS_END_QUOTA),
        ];
    }

    /**
     * Returns all statuses that are not archived
     * @return string[]
     */
    public static function getUnArchivedStatuses(){
        return [
            self::STATUS_CONFIRMED=>self::getStatusLabel(self::STATUS_CONFIRMED),
            self::STATUS_ACTIVE=>self::getStatusLabel(self::STATUS_ACTIVE),
            self::STATUS_TESTING=>self::getStatusLabel(self::STATUS_TESTING),
            self::STATUS_INACTIVE=>self::getStatusLabel(self::STATUS_INACTIVE),
            self::STATUS_REJECTED=>self::getStatusLabel(self::STATUS_REJECTED),
            self::STATUS_COMPLAINT=>self::getStatusLabel(self::STATUS_COMPLAINT),
        ];
    }

    /**
     * Returns all statuses that allow active tasks
     * @return array
     */
    public static function getActiveStatuses(){
        return [
            self::STATUS_ACTIVE=>self::getStatusLabel(self::STATUS_ACTIVE),
            self::STATUS_TESTING=>self::getStatusLabel(self::STATUS_TESTING),
        ];

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


    public static function getStatusLabel($status){
        return self::getAllStatuses()[$status];
    }


}