<?php


$Pi = (22/7);

function area($R){
    $result= $GLOBALS['Pi']*$R*$R;
    return $result;
}

function volume($R,$H){
     $result= 1/3*$GLOBALS['Pi']*$R*$R*$H;
     return $result;
    }

function Perimiter($R){
     $result= 2*$GLOBALS['Pi']*$R;
     return $result;
}

function Factorial($number){
    $result=$number;

    for ($i = $number-1; $i>0; $i--){
        $result=$result*$i;
    }
     return $result;
    }
