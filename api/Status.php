<?php
/**
 * Created by PhpStorm.
 * User: tonis_o
 * Date: 4.09.16
 * Time: 15:38
 */

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

    public static function getAllStatuses(){
        return [
            self::STATUS_CREATED,
            self::STATUS_CONFIRMED,
            self::STATUS_ACTIVE,
            self::STATUS_TESTING,
            self::STATUS_INACTIVE,
            self::STATUS_ARCHIVED,
        ];
    }
}