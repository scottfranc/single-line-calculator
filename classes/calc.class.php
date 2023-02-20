<?php

class Calc {
    private $operator;
    private $firstNum;
    private $secondNum;

    public function __construct(string $operator, int $num1, int $num2){
        $this->operator = $operator;
        $this->firstNum = $num1;
        $this->secondNum = $num2;
    }

    public function calculate(){
        //A lot of calculator tutorials use IF or SWITCH statements as commented-out below
        // switch ($this->operator) {
        //     case 'add':
        //         $result = $this->num1 + $this->num2;
        //         return $result;
        //         break;
            
        //     default:
        //         # code...
        //         break;
        // }

        //But in our case, we use a single line as below:
        $result =  eval("return {$this->firstNum} {$this->operator} {$this->secondNum};");

        return $result;
    }
}
