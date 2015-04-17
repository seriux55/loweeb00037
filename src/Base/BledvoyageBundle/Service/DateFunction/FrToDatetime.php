<?php

namespace Base\BledvoyageBundle\Service\DateFunction;

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
        if(date('Y-m-d',$timestamp) == '1999-11-30'){
            $response = '0000-00-00';
        }else{
            $response = date('Y-m-d',$timestamp);
        }
        return $response;
    }
}
