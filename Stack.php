<?php

class Stack
{
    public array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function getBinary($number1)
    {
        $count = 0;
        $number = $number1;
        while ($number > 1) {
            if ($count < 50) {
                $a = $number % 2;
                $number = (float)($number / 2);
                array_unshift($this->stack, $a);
            } else {
                echo "Số to quá!!!";
                die();
            }
        }
    }

    public function showStack()
    {
        return implode('',$this->stack);
    }


}
