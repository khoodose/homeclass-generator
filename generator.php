<?php

$CheckBox=$_POST['digis'];
$QNo=$_POST['question'];
$CarrySet=$_POST['carry'];
//output the checkbox value to string
$Judgement=implode($CheckBox);
echo "<ol>";

    //2 digis generating section
    if($Judgement==2 && $CarrySet==1){ //2 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(1,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(1,9);
      $FourthDigi=rand(0,9);
      $Product=$FirstDigi*10+$SecondDigi+$ThirdDigi*10+$FourthDigi;
    if($FirstDigi+$ThirdDigi<9){
      echo "<li>".$FirstDigi.$SecondDigi."+".$ThirdDigi.$FourthDigi."=".$Product."</li> <br />";
      $QuestionCounting++;
      }
      }
    }
    elseif($Judgement==2){ //2 digis and carryset=2
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(1,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(1,9);
      $FourthDigi=rand(0,9);
      $Product=$FirstDigi*10+$SecondDigi+$ThirdDigi*10+$FourthDigi;
      echo "<li>".$FirstDigi.$SecondDigi."+".$ThirdDigi.$FourthDigi."=".$Product."</li> <br />";
      $QuestionCounting++;
      
    }
    }
    //end of 2 digis generating section
    
      //3 digis generating section

    if($Judgement==3 && $CarrySet==1){ //3 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
           $FirstDigi=rand(1,9);
           $SecondDigi=rand(0,9);
           $ThirdDigi=rand(0,9);
           $FourthDigi=rand(1,9);
           $FifthDigi=rand(0,9);
           $SixthDigi=rand(0,9);
           $Product=$FirstDigi*100+$SecondDigi*10+$ThirdDigi+$FourthDigi*100+$FifthDigi*10+$SixthDigi;           
           if($SecondDigi+$FifthDigi<=8 and $FirstDigi+$FourthDigi<=9){
      echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
      $QuestionCounting++;
      }
      }
    }    
    elseif($Judgement==3 && $CarrySet==2){ //3 digis and carryset=2
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
           $FirstDigi=rand(1,9);
           $SecondDigi=rand(0,9);
           $ThirdDigi=rand(0,9);
           $FourthDigi=rand(1,9);
           $FifthDigi=rand(0,9);
           $SixthDigi=rand(0,9);
           $Product=$FirstDigi*100+$SecondDigi*10+$ThirdDigi+$FourthDigi*100+$FifthDigi*10+$SixthDigi;           
           if($FirstDigi+$FourthDigi<=8){
      echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
      $QuestionCounting++;
      }
      }
    }   
    elseif($Judgement==3){ //3 digis and carryset=3 or 4
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
           $FirstDigi=rand(1,9);
           $SecondDigi=rand(0,9);
           $ThirdDigi=rand(0,9);
           $FourthDigi=rand(1,9);
           $FifthDigi=rand(0,9);
           $SixthDigi=rand(0,9);
           $Product=$FirstDigi*100+$SecondDigi*10+$ThirdDigi+$FourthDigi*100+$FifthDigi*10+$SixthDigi;           
      echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
      $QuestionCounting++;
      }
    }
    //end of 3 digis generating section
    
    //4 digis generating section
  if($Judgement==4 && $CarrySet==1){ //4 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(1,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(0,9);
      $FourthDigi=rand(0,9);
      $FifthDigi=rand(1,9);
      $SixthDigi=rand(0,9);
      $SeventhDigi=rand(0,9);
      $EighthDigi=rand(0,9);
      $Product=$FirstDigi*1000+$SecondDigi*100+$ThirdDigi*10+$FourthDigi+$FifthDigi*1000+$SixthDigi*100+$SeventhDigi*10+$EighthDigi; 
    if($ThirdDigi+$SeventhDigi<=8 and $SecondDigi+$SixthDigi<=9 and $FirstDigi+$FifthDigi<=9){
      echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
      $QuestionCounting++;
      }
      }
    }
    
  elseif($Judgement==4 && $CarrySet==2){ //4 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(1,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(0,9);
      $FourthDigi=rand(0,9);
      $FifthDigi=rand(1,9);
      $SixthDigi=rand(0,9);
      $SeventhDigi=rand(0,9);
      $EighthDigi=rand(0,9);
      $Product=$FirstDigi*1000+$SecondDigi*100+$ThirdDigi*10+$FourthDigi+$FifthDigi*1000+$SixthDigi*100+$SeventhDigi*10+$EighthDigi; 
    if($SecondDigi+$SixthDigi<=8 and $FirstDigi+$FifthDigi<=9){
      echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
      $QuestionCounting++;
      }
      }
    }
     
  elseif($Judgement==4 && $CarrySet==3){ //4 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(1,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(0,9);
      $FourthDigi=rand(0,9);
      $FifthDigi=rand(1,9);
      $SixthDigi=rand(0,9);
      $SeventhDigi=rand(0,9);
      $EighthDigi=rand(0,9);
      $Product=$FirstDigi*1000+$SecondDigi*100+$ThirdDigi*10+$FourthDigi+$FifthDigi*1000+$SixthDigi*100+$SeventhDigi*10+$EighthDigi; 
    if( $FirstDigi+$FifthDigi<=8){
      echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
      $QuestionCounting++;
      }
      }
    }
    
    elseif($Judgement==4 && $CarrySet==4){ //4 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(1,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(0,9);
      $FourthDigi=rand(0,9);
      $FifthDigi=rand(1,9);
      $SixthDigi=rand(0,9);
      $SeventhDigi=rand(0,9);
      $EighthDigi=rand(0,9);
      $Product=$FirstDigi*1000+$SecondDigi*100+$ThirdDigi*10+$FourthDigi+$FifthDigi*1000+$SixthDigi*100+$SeventhDigi*10+$EighthDigi; 
      echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
      $QuestionCounting++;
      }
    }
 
    //end of 4 digis generating section
    
    //2digis and 3 digis generating section
    if($Judgement==23 && $CarrySet==1){ //2 digis and3 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(0,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(0,9);
      $FourthDigi=rand(0,9);
      $FifthDigi=rand(0,9);
      $SixthDigi=rand(0,9);
      $Product=$FirstDigi*100+$SecondDigi*10+$ThirdDigi+$FourthDigi*100+$FifthDigi*10+$SixthDigi;
      if($FirstDigi+$SecondDigi+$ThirdDigi>0 or $FourthDigi+$FifthDigi+$SixthDigi>0){ 
       if($SecondDigi+$FifthDigi<=8 and $FirstDigi+$FourthDigi<=9){
          if($FirstDigi==0 and $SecondDigi==0 and $FourthDigi==0 and $FifthDigi==0){     //case1 1th digi, 2nd digi, 4th digi and 5th digi is both 0 
            echo "<li>".$ThirdDigi."+".$SixthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi==0 and $FourthDigi==0){   //case2 1st and 4th digi is both 0
            echo "<li>".$SecondDigi.$ThirdDigi."+".$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
          }
          elseif($FourthDigi+$FifthDigi==0){     //case3 4th digi and 5th digi is both 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$SixthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$SecondDigi==0){    //case4 1st digi and 2nd digi is both 0
            echo "<li>".$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
          }
          elseif($FourthDigi==0){      //case5 4th digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi==0){          //case1 1st digi is 0
            echo "<li>".$SecondDigi.$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
          }
          else{
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
          }
                $QuestionCounting++;
      }
      }
      }
    }
    
    elseif($Judgement==23 && $CarrySet==2){ //2 digis and3 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(0,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(0,9);
      $FourthDigi=rand(0,9);
      $FifthDigi=rand(0,9);
      $SixthDigi=rand(0,9);
      $Product=$FirstDigi*100+$SecondDigi*10+$ThirdDigi+$FourthDigi*100+$FifthDigi*10+$SixthDigi;
      if($FirstDigi+$SecondDigi+$ThirdDigi>0 or $FourthDigi+$FifthDigi+$SixthDigi>0){  
       if($FirstDigi+$FourthDigi<=8){
          if($FirstDigi==0 and $SecondDigi==0 and $FourthDigi==0 and $FifthDigi==0){     //case1 1th digi, 2nd digi, 4th digi and 5th digi is both 0 
            echo "<li>".$ThirdDigi."+".$SixthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi==0 and $FourthDigi==0){   //case2 1st and 4th digi is both 0
            echo "<li>".$SecondDigi.$ThirdDigi."+".$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
          }
          elseif($FourthDigi+$FifthDigi==0){     //case3 4th digi and 5th digi is both 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$SixthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$SecondDigi==0){    //case4 1st digi and 2nd digi is both 0
            echo "<li>".$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
          }
          elseif($FourthDigi==0){      //case5 4th digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi==0){          //case1 1st digi is 0
            echo "<li>".$SecondDigi.$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
          }
          else{
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
          }
        $QuestionCounting++;
      }
      }
      }
    }
         elseif($Judgement==23){ //2 digis and3 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(0,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(0,9);
      $FourthDigi=rand(0,9);
      $FifthDigi=rand(0,9);
      $SixthDigi=rand(0,9);
      $Product=$FirstDigi*100+$SecondDigi*10+$ThirdDigi+$FourthDigi*100+$FifthDigi*10+$SixthDigi;  
      if($FirstDigi+$SecondDigi+$ThirdDigi>0 or $FourthDigi+$FifthDigi+$SixthDigi>0){
        if($FirstDigi==0 and $SecondDigi==0 and $FourthDigi==0 and $FifthDigi==0){     //case1 1th digi, 2nd digi, 4th digi and 5th digi is both 0 
          echo "<li>".$ThirdDigi."+".$SixthDigi."=".$Product."</li> <br />";
        }
        elseif($FirstDigi==0 and $FourthDigi==0){   //case2 1st and 4th digi is both 0
          echo "<li>".$SecondDigi.$ThirdDigi."+".$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
        }
        elseif($FourthDigi+$FifthDigi==0){     //case3 4th digi and 5th digi is both 0
          echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$SixthDigi."=".$Product."</li> <br />";
        }
        elseif($FirstDigi+$SecondDigi==0){    //case4 1st digi and 2nd digi is both 0
          echo "<li>".$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
        }
        elseif($FourthDigi==0){      //case5 4th digi is 0
          echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
        }
        elseif($FirstDigi==0){          //case1 1st digi is 0
          echo "<li>".$SecondDigi.$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
        }
        else{
          echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi."+".$FourthDigi.$FifthDigi.$SixthDigi."=".$Product."</li> <br />";
        }
      $QuestionCounting++;
      }
      }
      }
    //end of 2 digis and 3 digis generating section
    
    //2digis, 3 digis and 4 digis generating section
    if($Judgement==234 && $CarrySet==1){ //2 digis and3 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(0,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(0,9);
      $FourthDigi=rand(0,9);
      $FifthDigi=rand(0,9);
      $SixthDigi=rand(0,9);
      $SeventhDigi=rand(0,9);
      $EighthDigi=rand(0,9);
      $Product=$FirstDigi*1000+$SecondDigi*100+$ThirdDigi*10+$FourthDigi+$FifthDigi*1000+$SixthDigi*100+$SeventhDigi*10+$EighthDigi;
      if($FirstDigi+$SecondDigi+$ThirdDigi+$FourthDigi>0 or $FifthDigi+$SixthDigi+$SeventhDigi+$EighthDigi>0){ 
       if($ThirdDigi+$SeventhDigi<=8 and $SecondDigi+$SixthDigi<=9 and $FirstDigi+$FifthDigi<=9){
          if($FirstDigi+$SecondDigi+$ThirdDigi==0 and $FourthDigi+$FifthDigi+$SixthDigi==0){     //case1 1th digi, 2nd digi, 3th digi, 4th digi, 5th digi and 6th digi is both 0 
            echo "<li>".$FourthDigi."+".$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$SecondDigi==0 and $FifthDigi+$SixthDigi==0){   //case2 1st, 2nd, 5th and 6th digi is both 0
            echo "<li>".$ThirdDigi.$FourthDigi."+".$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$FifthDigi==0){     //case3 1th digi and 5th digi is both 0
            echo "<li>".$SecondDigi.$ThirdDigi.$FourthDigi."+".$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$SecondDigi+$ThirdDigi==0){    //case4 1st digi, 2nd digi, 3rd digi is both 0
            echo "<li>".$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi+$SixthDigi+$SeventhDigi==0){      //case5 5th digi, 6th digi, 7th digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$EighthDigi."=".$Product."</li> <br />";
          }                                                                            
          elseif($FirstDigi+$SecondDigi==0){          //case6 1st and 2nd digi is 0
            echo "<li>".$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi+$SixthDigi==0){          //case7 5th and 6th digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi==0){          //case8 1st digi is 0
            echo "<li>".$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi==0){          //case6 1st and 2nd digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          else{
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
                $QuestionCounting++;
      }
      }
      }
    }
    
    elseif($Judgement==234 && $CarrySet==2){ //2 digis and3 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(0,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(0,9);
      $FourthDigi=rand(0,9);
      $FifthDigi=rand(0,9);
      $SixthDigi=rand(0,9);
      $SeventhDigi=rand(0,9);
      $EighthDigi=rand(0,9);
      $Product=$FirstDigi*1000+$SecondDigi*100+$ThirdDigi*10+$FourthDigi+$FifthDigi*1000+$SixthDigi*100+$SeventhDigi*10+$EighthDigi;
      if($FirstDigi+$SecondDigi+$ThirdDigi+$FourthDigi>0 or $FifthDigi+$SixthDigi+$SeventhDigi+$EighthDigi>0){ 
       if($SecondDigi+$SixthDigi<=8 and $FirstDigi+$FifthDigi<=9){
          if($FirstDigi+$SecondDigi+$ThirdDigi==0 and $FourthDigi+$FifthDigi+$SixthDigi==0){     //case1 1th digi, 2nd digi, 3th digi, 4th digi, 5th digi and 6th digi is both 0 
            echo "<li>".$FourthDigi."+".$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$SecondDigi==0 and $FifthDigi+$SixthDigi==0){   //case2 1st, 2nd, 5th and 6th digi is both 0
            echo "<li>".$ThirdDigi.$FourthDigi."+".$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$FifthDigi==0){     //case3 1th digi and 5th digi is both 0
            echo "<li>".$SecondDigi.$ThirdDigi.$FourthDigi."+".$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$SecondDigi+$ThirdDigi==0){    //case4 1st digi, 2nd digi, 3rd digi is both 0
            echo "<li>".$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi+$SixthDigi+$SeventhDigi==0){      //case5 5th digi, 6th digi, 7th digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$EighthDigi."=".$Product."</li> <br />";
          }                                                                            
          elseif($FirstDigi+$SecondDigi==0){          //case6 1st and 2nd digi is 0
            echo "<li>".$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi+$SixthDigi==0){          //case7 5th and 6th digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi==0){          //case8 1st digi is 0
            echo "<li>".$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi==0){          //case6 1st and 2nd digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          else{
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
                $QuestionCounting++;
      }
      }
      }
    }
         elseif($Judgement==234 && $CarrySet=3){ //2 digis and3 digis and carryset=1
    $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(0,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(0,9);
      $FourthDigi=rand(0,9);
      $FifthDigi=rand(0,9);
      $SixthDigi=rand(0,9);
      $SeventhDigi=rand(0,9);
      $EighthDigi=rand(0,9);
      $Product=$FirstDigi*1000+$SecondDigi*100+$ThirdDigi*10+$FourthDigi+$FifthDigi*1000+$SixthDigi*100+$SeventhDigi*10+$EighthDigi;
      if($FirstDigi+$SecondDigi+$ThirdDigi+$FourthDigi>0 or $FifthDigi+$SixthDigi+$SeventhDigi+$EighthDigi>0){ 
       if($FirstDigi+$FifthDigi<=8){
          if($FirstDigi+$SecondDigi+$ThirdDigi==0 and $FourthDigi+$FifthDigi+$SixthDigi==0){     //case1 1th digi, 2nd digi, 3th digi, 4th digi, 5th digi and 6th digi is both 0 
            echo "<li>".$FourthDigi."+".$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$SecondDigi==0 and $FifthDigi+$SixthDigi==0){   //case2 1st, 2nd, 5th and 6th digi is both 0
            echo "<li>".$ThirdDigi.$FourthDigi."+".$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$FifthDigi==0){     //case3 1th digi and 5th digi is both 0
            echo "<li>".$SecondDigi.$ThirdDigi.$FourthDigi."+".$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$SecondDigi+$ThirdDigi==0){    //case4 1st digi, 2nd digi, 3rd digi is both 0
            echo "<li>".$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi+$SixthDigi+$SeventhDigi==0){      //case5 5th digi, 6th digi, 7th digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$EighthDigi."=".$Product."</li> <br />";
          }                                                                            
          elseif($FirstDigi+$SecondDigi==0){          //case6 1st and 2nd digi is 0
            echo "<li>".$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi+$SixthDigi==0){          //case7 5th and 6th digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi==0){          //case8 1st digi is 0
            echo "<li>".$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi==0){          //case6 1st and 2nd digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          else{
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
                $QuestionCounting++;
      }
      }
      }
      }
      
   elseif($Judgement==234 && $CarrySet=4){  //2 digis and3 digis and carryset=1
     $QuestionCounting=1;
    while ($QuestionCounting <= $QNo){
      $FirstDigi=rand(0,9);
      $SecondDigi=rand(0,9);
      $ThirdDigi=rand(0,9);
      $FourthDigi=rand(0,9);
      $FifthDigi=rand(0,9);
      $SixthDigi=rand(0,9);
      $SeventhDigi=rand(0,9);
      $EighthDigi=rand(0,9);
      $Product=$FirstDigi*1000+$SecondDigi*100+$ThirdDigi*10+$FourthDigi+$FifthDigi*1000+$SixthDigi*100+$SeventhDigi*10+$EighthDigi;
      if($FirstDigi+$SecondDigi+$ThirdDigi+$FourthDigi>0 or $FifthDigi+$SixthDigi+$SeventhDigi+$EighthDigi>0){ 
          if($FirstDigi+$SecondDigi+$ThirdDigi==0 and $FourthDigi+$FifthDigi+$SixthDigi==0){     //case1 1th digi, 2nd digi, 3th digi, 4th digi, 5th digi and 6th digi is both 0 
            echo "<li>".$FourthDigi."+".$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$SecondDigi==0 and $FifthDigi+$SixthDigi==0){   //case2 1st, 2nd, 5th and 6th digi is both 0
           echo "<li>".$ThirdDigi.$FourthDigi."+".$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$FifthDigi==0){     //case3 1th digi and 5th digi is both 0
            echo "<li>".$SecondDigi.$ThirdDigi.$FourthDigi."+".$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi+$SecondDigi+$ThirdDigi==0){    //case4 1st digi, 2nd digi, 3rd digi is both 0
            echo "<li>".$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi+$SixthDigi+$SeventhDigi==0){      //case5 5th digi, 6th digi, 7th digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$EighthDigi."=".$Product."</li> <br />";
          }                                                                            
          elseif($FirstDigi+$SecondDigi==0){          //case6 1st and 2nd digi is 0
            echo "<li>".$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi+$SixthDigi==0){          //case7 5th and 6th digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FirstDigi==0){          //case8 1st digi is 0
            echo "<li>".$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          elseif($FifthDigi==0){          //case6 1st and 2nd digi is 0
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
          }
          else{
            echo "<li>".$FirstDigi.$SecondDigi.$ThirdDigi.$FourthDigi."+".$FifthDigi.$SixthDigi.$SeventhDigi.$EighthDigi."=".$Product."</li> <br />";
        }
              $QuestionCounting++;
      }
      }
      }

    //end of 2 disigs, 3 digis and 4 digis generating section

  echo "</ol>";
?>