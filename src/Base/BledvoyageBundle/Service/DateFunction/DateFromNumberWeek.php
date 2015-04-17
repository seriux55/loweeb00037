<?php

namespace Base\BledvoyageBundle\Service\DateFunction;

class DateFromNumberWeek {
    
    /**
     * Renvoi les dates de debut et de fin de semaine
     *
     * @params int $week, int $year, string $format
     * @return array
     */
    public function toTwoDate($week, $year, $format="Y-m-d")
    {
        $firstDayInYear = date("N",mktime(0,0,0,1,1,$year));
        if ($firstDayInYear<5) {
            $shift = -($firstDayInYear-1)*86400;
        }else{
            $shift = (8-$firstDayInYear)*86400;
        }
        if ($week>1) {
            $weekInSeconds = ($week-1)*604800; 
        }else {
            $weekInSeconds = 0;
        }
        $timestamp_dimanche = mktime(0,0,0,1,0,$year) + $weekInSeconds + $shift;
        $timestamp_samedi   = mktime(0,0,0,1,6,$year) + $weekInSeconds + $shift;

        return array(date($format,$timestamp_dimanche), date($format,$timestamp_samedi));
    }
}
