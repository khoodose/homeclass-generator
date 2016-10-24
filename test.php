<?php
$a=rand(1,9);
$b=rand(1,9);
$c=rand(1,9);
$d=rand(1,9);
echo $a;
echo $b;
echo "<br />";
echo $c;
echo $d;
echo "<br />";
echo $a*10+$b+$c*10+$d;

echo "<br />";

echo "1 carry set";
$e=rand(1,9);
$f=rand(1,9);
$g=rand(1,9);
$h=rand(1,9);

if($f+$h>=10 and $e+$g<9){
echo "<br />";
echo $e;
echo $f;
echo "<br />";
echo $g;
echo $h;
echo "<br />";
echo $e*10+$f+$g*10+$h;
}

?>