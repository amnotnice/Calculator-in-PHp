<?php
include '/calc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Calculator </title>
</head>
<body style="background-color:skyblue">

<h3> Sam's Multifunction Calculator</h3>
<br>
<br>

<h4>factorial</h4>
<form method="POST">
<input type="number" value="number" name="number" placeholder="enter the number">
<input type="submit" value="factorial" name="factorial" style="color:blue">
</form>

<br>
<br>

<h3>Calculate Area and Perimeter</h3>
<form method="POST">
<input type="number" value="radius" name="radius" placeholder="enter the radius of a circle">
<br>
<input type="submit" value="Perimeter" name="Perimeter" style="color:blue">
<br>
<input type="submit" value="Area" name="Area" style="color:blue">
</form>
<br>
<br>
<h3>Calculate Volume of Cone</h3>
<form method="POST">
<input type="number" value="height" name="height" placeholder="enter the height of cone">
<br>
<input type="number" value="radius" name="radius" placeholder="enter the radius of cone">
<br>
<input type="submit" value="volume" name="volume" style="color:blue">
</form>
<br>
<br>
RESULT DISPLAYS BELOW <BR>  

<?php

if(isset($_POST['volume'])){
    if(isset($_POST['height'])){
        $R=$_POST['radius'];  
        $H=$_POST['height'];      
        echo volume($R,$H);
    }

    else{
        echo "Please Write Something";
    }
}

if(isset($_POST['factorial'])){
    if(isset($_POST['number'])){
        $number=$_POST['number'];        
        echo factorial($number);
    }

    else{
        echo "Please Write Something";
    }
}

if (isset($_POST['Area'])){
    if(isset($_POST['radius'])){
        $R=$_POST['radius'];
        echo area($R);
    }    
    else{
        echo "Please Write Something";
    }
}

if (isset($_POST['Perimeter'])){
    if(isset($_POST['radius'])){
        $R=$_POST['radius'];
        echo Perimiter($R);
    }    
    else{
        echo "Please Write Something";
    }
}
?>
    
</body>
</html>
