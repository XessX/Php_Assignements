<?php

function bmi($mass,$height) {
    $bmi = $mass/($height*$height);
    return $bmi;
    } 
    $bmi = bmi($mass,$height);
    if ($bmi <= 18.5) {
    $output = "Under Weight";
    } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
    $output = "Normal Weight";
    } else if ($bmi > 24.9 AND $bmi<=29.9) {
    $output = "Over Weight";
    } else if ($bmi > 30.0) {
    $output = "OBESE";
    }
    echo "Your BMI value is " . $bmi . " and you are : "; 
    echo "$output";
    }
  
echo bmi(63,1.75)
?>