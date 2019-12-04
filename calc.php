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

if(isset($_GET['addbutton']))
{
$firstnumber=$_GET['first'];
$secondnumber=$_GET['second'];

$result= $firstnumber+$secondnumber;

echo $result;
}

if(isset($_GET['minusbutton']))
{
$firstnumber=$_GET['first'];
$secondnumber=$_GET['second'];

$result= $firstnumber-$secondnumber;

echo $result;
}

if(isset($_GET['multiplybutton']))
{
$firstnumber=$_GET['first'];
$secondnumber=$_GET['second'];

$result= $firstnumber*$secondnumber;

echo $result;
}

if(isset($_GET['dividebutton']))
{
$firstnumber=$_GET['first'];
$secondnumber=$_GET['second'];

$result= $firstnumber/$secondnumber;

echo $result;
}