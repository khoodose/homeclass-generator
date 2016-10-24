<?php

$checkbox=$_POST['digis'];
$QNo=$_POST['question'];
//echo $checkbox.$QNo."<br />";

//print_r($checkbox);
$judgement=implode($checkbox);
//echo $checkbox;
echo "<ol>";
if($judgement==2){
$x=1;
while ($x <= $QNo){
       $a=rand(1,99);
       $b=rand(1,99);
       $c=$a+$b;
  echo "<li>".$a."+".$b."=".$c."</li> <br />";
  $x++;
      }
}
if($judgement==3){
$x=1;
while ($x <= $QNo){
       $a=rand(100,999);
       $b=rand(100,999);
       $c=$a+$b;
  echo "<li>".$a."+".$b."=".$c."</li> <br />";
  $x++;
      }
}
if($judgement==4){
$x=1;
while ($x <= $QNo){
       $a=rand(1000,9999);
       $b=rand(1000,9999);
       $c=$a+$b;
  echo "<li>".$a."+".$b."=".$c."</li> <br />";
  $x++;
      }
}
if($judgement==23){
$x=1;
while ($x <= $QNo){
       $a=rand(1,999);
       $b=rand(1,999);
       $c=$a+$b;
  echo "<li>".$a."+".$b."=".$c."</li> <br />";
  $x++;
      }
}
if($judgement==24){
$x=1;
while ($x <= $QNo){
       $a=rand(1,9999);
       $b=rand(1,9999);
       $c=$a+$b;
  echo "<li>".$a."+".$b."=".$c."</li> <br />";
  $x++;
      }
}
if($judgement==34){
$x=1;
while ($x <= $QNo){
       $a=rand(100,9999);
       $b=rand(100,9999);
       $c=$a+$b;
  echo "<li>".$a."+".$b."=".$c."</li> <br />";
  $x++;
      }
}
if($judgement==234){
$x=1;
while ($x <= $QNo){
       $a=rand(1,9999);
       $b=rand(1,9999);
       $c=$a+$b;
  echo "<li>".$a."+".$b."=".$c."</li> <br />";
  $x++;
      }
}
echo "</ol>";

//  echo "You have chosed the following question type(s): <br>";
//  foreach ($checkbox as $digis){
//    echo $digis."digis"."<br />";
//}
//echo "for ".$QNo." questions.";

?>