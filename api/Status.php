<?php

namespace andmemasin\survey\api;

class Status
{
    // all statuses separately
    const STATUS_CREATED    = "created";
    const STATUS_CONFIRMED  = "confirmed";
    const STATUS_ACTIVE     = "active";
    const STATUS_TESTING    = "testing";
    const STATUS_INACTIVE   = "inactive";
    const STATUS_ARCHIVED   = "archived";


    /**
     * Returns all possible status values with description.
     * @return array
     */
    public static function getAllStatuses(){
        return [
            self::STATUS_CREATED=>'Initial default status (unconfirmed by app)',
            self::STATUS_CONFIRMED=>'Whether app has confirmed the key',
            self::STATUS_ACTIVE=>'Fully active',
            self::STATUS_TESTING=>'Active for testing only',
            self::STATUS_INACTIVE=>'Inactive state',
            self::STATUS_ARCHIVED=>'Archived',
        ];
    }

    /**
     * Returns all statuses that do not allow the to edit the model KEY any more
     * @return array
     */
    public static function getLockedStatuses(){
        return [
            self::STATUS_CONFIRMED=>self::getStatusLabel(self::STATUS_CONFIRMED),
            self::STATUS_ACTIVE=>self::getStatusLabel(self::STATUS_ACTIVE),
            self::STATUS_TESTING=>self::getStatusLabel(self::STATUS_TESTING),
            self::STATUS_INACTIVE=>self::getStatusLabel(self::STATUS_INACTIVE),
            self::STATUS_ARCHIVED=>self::getStatusLabel(self::STATUS_ARCHIVED),
        ];

    }

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