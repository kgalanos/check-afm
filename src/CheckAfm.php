<?php

namespace Kgalanos\CheckAfm;

class CheckAfm
{
    public static function checkAfm(string $afm): self
    {
        return new static($afm);
    }

    public function __construct(protected string $afm)
    {
    }

    public function isValid(): bool
    {
        //The count of numbers must be 9 including 0 if afm starts with 0
        if (! (strlen($this->afm) === 9)) {
            return false;
        }
        $arr = str_split($this->afm);
        //convert char to int
        for ($i = 0;$i <= 8;$i++) {
            if (! is_numeric($arr[$i])) {
                return false;
            }
            $arr[$i] = (int) $arr[$i];
        }
        //keep the last number
        $chk_num = $arr[8];
        $sum = 0;
        //calculate the
        for ($i = 0;$i <= 7;$i++) {
            $sum = $sum + $arr[$i] * 2 ** (8 - $i);
        }
        $sum %= 11;
        $sum %= 10;
        if ($chk_num !== $sum) {
            return false;
        }

        return true;
    }
}
