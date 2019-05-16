<?php
namespace classmap;

class Calculation
{
    
    public function romanConverter(int $nombre, $chaine ="") {
        if ($nombre == 0)
        {
            return $chaine;
        }
        $arrayRoman = [
            1000 => 'M',
            900 => 'CM',
            500 => 'D',
            100 => 'C',
            50 => 'L',
            10 => 'X',
            5 => 'V',
            4 => 'IV',
            1 => 'I'
        ];

        foreach ($arrayRoman as $key => $value) {          
            if ($nombre>=$key) {
                $chaine .= $value;
                $nombre -= $key;
                return $this->romanConverter($nombre,$chaine);
            }
        } //end for
    }
}