<?php

namespace Src;

class SequenceAssignment
{
    public function manipulateSequenceArray($sequence, $fizzNr=null, $buzzNr=null)
    {
        $sequenceArray=[];

        for ($i=1; $i <= $sequence ; $i++) { 
            
            $seqNumber = $i;

            if($fizzNr || $buzzNr){
                
                $fizzResult = $this->calculateMultiple($i, $fizzNr, 'fizz');
                $buzzResult = $this->calculateMultiple($i, $buzzNr, 'buzz');
                
                if($fizzResult['multipleOf'] === true && $buzzResult['multipleOf'] === true)
                {
                    $seqNumber = $fizzResult['type'] . $buzzResult['type'];

                    if($fizzResult['representation'] === true || $buzzResult['representation'] === true){
                        $seqNumber = 'lucky';
                    }
                }
                elseif($fizzResult['type'] != null)
                {
                    $seqNumber = $fizzResult['type'];
                    
                    if($buzzResult['type'] != null && $buzzResult['multipleOf'] === true)
                    {
                        $seqNumber = $buzzResult['type'];
                    }
                }
                elseif($buzzResult['type'] != null)
                {
                    $seqNumber = $buzzResult['type'];

                    if($fizzResult['type'] != null && $fizzResult['multipleOf'] === true)
                    {
                        $seqNumber = $fizzResult['type'];
                    }
                }
            }

            array_push($sequenceArray, $seqNumber);

        }

        return $sequenceArray;
    }

    public function calculateMultiple($sequenceNr, $number, $type)
    {
        $calcNr = $sequenceNr / $number;
        $result = array(
            'type' => null, 
            'multipleOf' => false,
            'representation' => false
        );
        
        if(ctype_digit((string) $calcNr))
        {
            $result['type'] = $type;
            $result['multipleOf'] = true;
        }

        if(strpos((string)$sequenceNr, $number) !== false)
        {
            if($result['type'] != null){
                $result['type'] = $result['type'].' '.$type;    
            }
            else
            {
                $result['type'] = $type;       
            }

            $result['representation'] = true;
        }
    
        return $result;
    }

}

