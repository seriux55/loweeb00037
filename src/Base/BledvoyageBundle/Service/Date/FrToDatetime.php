<?php

namespace Base\BledvoyageBundle\Service\Date;

class FrToDatetime {
    
    /**
     * Convertie la date Fr 29/10/1984 en datetime 1984-10-29
     *
     * @param string $date
     * @return string
     */
    public function toDatetime($date)
    {
        $day        = substr($date,0,2);
        $month      = substr($date,3,2);
        $year       = substr($date,6,4);
        $timestamp  = mktime('00','00','00',$month,$day,$year);
        return date('Y-m-d',$timestamp);
    }
}
