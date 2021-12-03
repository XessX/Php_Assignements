<?php
function rect_area($length = 2, $width = 4) //function has declared
{
    $area = $length * $width;
    echo "Area Of Rectangle with length " . $length . " & width " . $width . " is " . $area ."<br>" ;
}
rect_area(); // function has been called.

function sqr_area($length = 2) //function has declared
{
    $area = pow($length, 2);
    echo "Area Of Square " . $length . " is " . $area ."<br>" ;
}
sqr_area(); // function has been called.


function circle_area( $r) 
{ 
    $PI =3.142; 
    return $PI * pow($r, 2); 
} 
   
echo("Circle Area is "); 
echo(circle_area(5)); 
return 0; 
  

?>