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
            [self::STATUS_CREATED=>'Initial default status (unconfirmed by app)'],
            [self::STATUS_CONFIRMED=>'Whether app has confirmed the key'],
            [self::STATUS_ACTIVE=>'Survey is fully active'],
            [self::STATUS_TESTING=>'Survey is active for testing only'],
            [self::STATUS_INACTIVE=>'Survey is inactive state'],
            [self::STATUS_ARCHIVED=>'Survey is archived'],
        ];
    }

    /**
     * Returns all statuses that do not allow the to edit the model KEY any more
     * @return array
     */
    public function getLockedStatuses(){
        return [
            [self::STATUS_CONFIRMED=>'Whether app has confirmed the key'],
            [self::STATUS_ACTIVE=>'Survey is fully active'],
            [self::STATUS_TESTING=>'Survey is active for testing only'],
            [self::STATUS_INACTIVE=>'Survey is inactive state'],
            [self::STATUS_ARCHIVED=>'Survey is archived'],
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