<?php

$x = 1;
$i = 1;

while($i < 15 )
{
    $i++;
    $x++;
    if($x > 6 ) $x = 1;

    echo "<h$x>El numero es: </br></h$x>";
}


//$z = 0;

//while($z <= 100)
//{
//    echo "<u><h2><br>El numero es: $z </br></h2></u>";

//    $z += 10;
//} 
