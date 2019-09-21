<?php


namespace HashMaker;
use IntlChar;

class FNV
{

    const INIT = 2166136261;
    const NUMBER = 0x0ffffffff;

    private function _get_byte($value)
    {
        return IntlChar::ord($value);
    }

    private function fnv(string $data,$init,$number)
    {
        $hval = $init;
        foreach(str_split($data) as $byte){
            $hval ^= ord($byte);
            $hval += ($hval << 1) + ($hval << 4) + ($hval << 7) + ($hval << 8) + ($hval << 24);
            $hval = $hval & $number;
        }
        $hval = $hval & 0x0ffffffff;
        return $hval;
    }

    public function hash($data)
    {
        return $this->fnv((string) $data,self::INIT,self::NUMBER);
    }


}
