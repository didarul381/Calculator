<?php

class Calculator{
    public function addition($n1,$n2){
        return $n1+$n2;
    }
    public function subtraction($n1,$n2){
        return $n1-$n2;
    }
    public function multipication($n1,$n2){
        return $n1*$n2;
    }
    public function division($n1,$n2){
        if( $n2!= 0){
        return $n1/$n2;
        }else{
            return "Divide by zero is not possible...";
        }
    }
}

?>