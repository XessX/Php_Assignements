<?php

//function to find grade/Cgpa
function grade($marks){
if ($marks>=90)
{
	$grade = "A = 3.75";
}
else if($marks>=86)
{
	$grade = "A- = 3.5";
}
else if($marks>=80)
{
	$grade = "B = 3.25";
}
else if($marks>=74)
{
	$grade = "B- = 3.0";
}
else if($marks>=69)
{
	$grade = "C = 2.75";
}
else if($marks>=64)
{
	$grade = "C- = 2.50";
}
else
{
	$grade = "Fail";
}
echo "Student grade: $grade";
}
grade(90);

?>