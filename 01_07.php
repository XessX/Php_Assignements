<?php

function age_grp($age){
if ($age<=5 && $age>=1)
{
	$age_grp = "Toddler";
}
else if($age<=10 && $age>=6)
{
	$age_grp = "Middle Childhood";
}
else if($age<=16 && $age>=11)
{
	$age_grp = "Teenager";
}
else if($age<=22 && $age>=17)
{
	$age_grp = "Young Adult";
}
else if($age<=30 && $age>=23)
{
	$age_grp = "Adult";
}
else if($age<=40 && $age>=31)
{
	$age_grp = "Late Adult";
}
else
{
	$age_grp = "Older";
}
echo "The person is: $age_grp";
}
age_grp(30);

?>