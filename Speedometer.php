<?php

class Speedometer{

    public const MILES_CONVERT = 0.621; 
    public const KM_CONVERT = 1.609; 

    public static function convertKmToMiles(int $km): float
    {
        return $km * self::MILES_CONVERT;
    }

    public static function converMilesTokm(int $km): float
{
    return $km * self::KM_CONVERT;
}
}