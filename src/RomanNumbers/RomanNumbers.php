<?php
/**
 * Created by PhpStorm.
 * User: Webconsults
 * Date: 04.06.2015
 * Time: 09:45
 */

namespace CleanCode\RomanNumbers;

class RomanNumbers {

    public function intToRoman($Eingabe) {
        $Ausgabe = '';
        $Rest = $Eingabe;



       while($Rest > 0) {
           list($Rest, $Ausgabe) = $this->getRomanCharAndReduce($Rest,$Ausgabe, 10, 'X');
           if($Rest % 10 == (10-1)) {
               $Rest = $Rest - (10-1);
               $Ausgabe = 'IX';
           }
           list($Rest, $Ausgabe) = $this->getRomanCharAndReduce($Rest,$Ausgabe, 5, 'V');
           if($Rest % 5 == (5-1)) {
               $Rest = $Rest - (5-1);
               $Ausgabe = 'IV';
           }
            if(($Rest / 1) >= 1) {
                $Rest = $Rest - 1;
                $Ausgabe = $Ausgabe . 'I';
            }

        }

        return $Ausgabe;
    }

    /**
     * @param $Rest
     * @return array
     */
    public function getRomanCharAndReduce($Rest, $Ausgabe, $intValue, $romanValue)
    {
        if (($Rest / $intValue) >= 1) {
            $Rest = $Rest - $intValue;
            $Ausgabe = $romanValue;
            return array($Rest, $Ausgabe);
        }
        return array($Rest, $Ausgabe);
    }
}