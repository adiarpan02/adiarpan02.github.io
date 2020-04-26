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

if ($e>$m && $e>$p && $e>$ch && $e>$co) {
	echo "You have maximum marks in English";
}
elseif ($m>$e && $m>$p && $m>$ch && $m>$co) {
	echo "You have maximum marks in Mathematics";
}
elseif ($p>$e && $p>$m && $p>$ch && $p>$co) {
	echo "You have maximum marks in Physics";
}
elseif ($ch>$e && $ch>$m && $ch>$p && $ch>$co) {
	echo "You have maximum marks in Chemistry";
}
elseif ($co>$e && $co>$m && $co>$p && $co>$ch) {
	echo "You have maximum marks in Computer";
}
?>