<?php
$e= $_POST['english'];
$m= $_POST['mathematics'];
$p= $_POST['physics'];
$ch= $_POST['chemistry'];
$co= $_POST['computer'];

echo "English :- "; echo $e;
echo "<br>";
echo "Mathematics :- "; echo $m;
echo "<br>";
echo "Physics :- "; echo $p;
echo "<br>";
echo "Chemistry :- "; echo $ch;
echo "<br>";
echo "Computer :- "; echo $co;
echo "<br>";
echo "<br>";

$English=$e;
switch ($e) {
	case $e>90:
		echo "English : Your grade is O";
		break;
	case $e>80 && $e<=90:
		echo "English : Your grade is E";
		break;
	case $e>70 && $e<=80:
		echo "English : Your grade is A";
		break;
	case $e>60 && $e<=70:
		echo "English : Your grade is B";
		break;
	case $e>50 && $e<=60:
		echo "English : Your grade is C";
		break;
	case $e>40 && $e<=50:
		echo "English : Your grade is D";
		break;							
	
	default:
		echo "English : Failed";
		break;
}
echo "<br>";
$Mathematics=$m;
switch ($m) {
	case $m>90:
		echo "Mathematics : Your grade is O";
		break;
	case $m>80 && $m<=90:
		echo "Mathematics : Your grade is E";
		break;
	case $m>70 && $m<=80:
		echo "Mathematics : Your grade is A";
		break;
	case $m>60 && $m<=70:
		echo "Mathematics : Your grade is B";
		break;
	case $m>50 && $m<=60:
		echo "Mathematics : Your grade is C";
		break;
	case $m>40 && $m<=50:
		echo "Mathematics : Your grade is D";
		break;							
	
	default:
		echo "Mathematics : Failed";
		break;
}
echo "<br>";
$Physics=$p;
switch ($p) {
	case $p>90:
		echo "Physics : Your grade is O";
		break;
	case $p>80 && $p<=90:
		echo "Physics : Your grade is E";
		break;
	case $p>70 && $p<=80:
		echo "Physics : Your grade is A";
		break;
	case $p>60 && $p<=70:
		echo "Physics : Your grade is B";
		break;
	case $p>50 && $p<=60:
		echo "Physics : Your grade is C";
		break;
	case $p>40 && $p<=50:
		echo "Physics : Your grade is D";
		break;							
	
	default:
		echo "Physics : Failed";
		break;
}
echo "<br>";
$Chemistry=$ch;
switch ($ch) {
	case $ch>90:
		echo "Chemistry : Your grade is O";
		break;
	case $ch>80 && $ch<=90:
		echo "Chemistry : Your grade is E";
		break;
	case $ch>70 && $ch<=80:
		echo "Chemistry : Your grade is A";
		break;
	case $ch>60 && $ch<=70:
		echo "Chemistry : Your grade is B";
		break;
	case $ch>50 && $ch<=60:
		echo "Chemistry : Your grade is C";
		break;
	case $ch>40 && $ch<=50:
		echo "Chemistry : Your grade is D";
		break;							
	
	default:
		echo "Chemistry : Failed";
		break;
}
echo "<br>";
$Computer=$co;
switch ($co) {
	case $co>90:
		echo "Computer : Your grade is O";
		break;
	case $co>80 && $co<=90:
		echo "Computer : Your grade is E";
		break;
	case $co>70 && $co<=80:
		echo "Computer : Your grade is A";
		break;
	case $co>60 && $co<=70:
		echo "Computer : Your grade is B";
		break;
	case $co>50 && $co<=60:
		echo "Computer : Your grade is C";
		break;
	case $co>40 && $co<=50:
		echo "Computer : Your grade is D";
		break;							
	
	default:
		echo "Computer : Failed";
		break;
}
?>