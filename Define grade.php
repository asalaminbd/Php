<?php
echo"\n\n";
// subject name and number

$bangla_first =58; //75 out of 100 mark.
$bangla_first_point;

$bangla_second = 20; //35 out of 50 mark.
$bangla_second_point;
$bangla_point;

$english_fist = 53; //75 out of 100 mark.
$english_fist_point;

$english_second = 48; //40 out of 50 mark.
$english_second_point;

$math = 48; //95 out of 100 mark.
$math_point;

$higher_math = 40; //70 out of 100 mark.
$higher_math_point;

$biology = 75; //65 out of 100 mark.
$biology_point;

$physics =45; //82 out of 100 mark.
$physics_point;

$chemistry = 55; // 55 out of 100 mark.
$chemistry_point;

$social_science = 58; // 88 out of 100 mark.
$social_science_point;

$islam = 45; // 95 out of 100 mark.
$islam_point;
$total_point;

// Bangla Result

if( $bangla_first >= 33 && $bangla_second >=16 ){
  $bangla = $bangla_first + $bangla_second;
  $bangla_totalmark=150;
  // echo $bangla;
  
  
   if( ($bangla >= ($bangla_totalmark * 80)/100) &&
      ($bangla <= ($bangla_totalmark * 100)/100) ){
    echo "Bangla Grade: A+" . "\n";
     $bangla_point=5.00;
  }

   elseif( ($bangla >= ($bangla_totalmark * 70)/100)         && ($bangla<= ($bangla_totalmark * 79)/100) ){
    echo "Bangla Grade: A" . "\n";
     $bangla_point=4.00;
  }
  elseif( ($bangla >= ($bangla_totalmark * 60)/100)         && ($bangla<= ($bangla_totalmark * 69)/100) ){
    echo "Bangla Grade: A-" . "\n";
    $bangla_point=3.50;
  }
  elseif( ($bangla >= ($bangla_totalmark * 50)/100) &&
      ($bangla<= ($bangla_totalmark * 59)/100) ){
    echo "Bangla Grade: B" . "\n";
      $bangla_point=3.00;
  }
  elseif( ($bangla >= ($bangla_totalmark * 40)/100) &&
      ($bangla<= ($bangla_totalmark * 49)/100) ){
    echo "Bangla Grade: C" . "\n";
      $bangla_point=2.00;
  }
  elseif( ($bangla >= ($bangla_totalmark * 33)/100) &&
      ($bangla<= ($bangla_totalmark * 39)/100) ){
    echo "Bangla Grade: D" . "\n";
    $bangla_point=1.00;
  }
   
}
 else{
    echo "Bangla Grade: F" . "\n";
        $bangla_point=0.00;
  }

// English Result

if( $english_fist >= 33 && $english_second >=16 ){
  $english = $english_fist + $english_second;
  $english_totalmark=150;
  // echo $bangla;
   if( ($english >= ($english_totalmark * 80)/100) &&
      ($english<= ($english_totalmark * 100)/100) ){
    echo "English Grade: A+" . "\n";
     $english_point=5.00;
  }
   elseif( ($english >= ($english_totalmark * 70)/100) && ($english<= ($english_totalmark * 79)/100) ){
    echo "English Grade: A" . "\n";
     $english_point=4.00;
  }
  elseif( ($english >= ($english_totalmark * 60)/100) &&($english<= ($english_totalmark * 69)/100) ){
    echo "English Grade: A-" . "\n";
    $english_point=3.50;
  }
  elseif( ($english >= ($english_totalmark * 50)/100) &&
      ($english<= ($english_totalmark * 59)/100) ){
    echo "English Grade: B" . "\n";
      $english_point=3.00;
  }
  elseif( ($english >= ($english_totalmark * 40)/100) && ($english<= ($english_totalmark * 49)/100)){
    echo "English Grade: C" . "\n";
      $english_point=2.00;
  }
  elseif( ($english >= ($english_totalmark * 33)/100) &&($english<= ($english_totalmark * 39)/100) ){
    echo "English Grade: D" . "\n";
    $english_point=1.00;
  }
   
}
 else{
    echo "English Grade: F" . "\n";
    $english_point=0.00;
  }

// Math Resutl
$math_totalmark=100;
if( $math >= 33){
  if(($math >= (($math_totalmark*80)/100)) &&
    ($math <= (($math_totalmark*100)/100))){
    echo "Math Grade: A+" . "\n";
    $math_point=5.00;
  }
  elseif(($math >= ($math_totalmark*70)/100) &&
     ($math <= ($math_totalmark*79)/100) ){
    echo "Math Grade: A" . "\n";
     $math_point=4.00;
  }
  elseif(($math >= ($math_totalmark*60)/100) &&
     ($math <= ($math_totalmark*69)/100) ){
    echo "Math Grade: A-" . "\n";
     $math_point=3.50;
  }
  elseif(($math >= ($math_totalmark*50)/100) &&
     ($math <= ($math_totalmark*59)/100) ){
    echo "Math Grade: B" . "\n";
     $math_point=3.00;
  }
  elseif(($math >= ($math_totalmark*40)/100) &&
     ($math <= ($math_totalmark*49)/100) ){
    echo "Math Grade: C" . "\n";
     $math_point=2.00;
  }
  elseif(($math >= ($math_totalmark*33)/100) &&
     ($math <= ($math_totalmark*39)/100) ){
    echo "Math Grade: D" . "\n";
     $math_point=1.00;
    
  }
}
  
else{
  echo "Math Grade: F" . "\n";
   $math_point=0.00;
}

// Higher_Math Resutl
$higermath_totalmark=100;

if( $higher_math >= 33){
  if(($higher_math >= (($higermath_totalmark*80)/100)) &&($higher_math <= (($higermath_totalmark*100)/100))){
    echo "Higer Math Grade: A+" . "\n";
    $higher_math_point=5.00;
  }
  elseif(($higher_math >= ($higermath_totalmark*70)/100) && ($higher_math <= ($higermath_totalmark*79)/100)){
    echo "Higer Math Grade: A" . "\n";
    $higher_math_point=4.00;
  }
    
  elseif(($higher_matha >= ($higermath_totalmark*60)/100) &&
     ($higher_math <= ($higermath_totalmark*69)/100) ){
    echo "Higer Math Grade: A-" . "\n";
    $higher_math_point=3.50;
  }
  elseif(($higher_math >= ($higermath_totalmark*50)/100) &&
     ($higher_math <= ($higermath_totalmark*59)/100) ){
    echo "Higer Math Grade: B" . "\n";
    $higher_math_point=3.00;
  }
  elseif(($higher_math >= ($higermath_totalmark*40)/100) &&
     ($higher_math <= ($higermath_totalmark*49)/100) ){
    echo "Higer Math Grade: C" . "\n";
       $higher_math_point=2.00;
  }
  elseif(($higher_math >= ($higermath_totalmark*33)/100) && ($higher_math <= ($higermath_totalmark*39)/100) ){
    echo "Higer Math Grade: D" . "\n";
      $higher_math_point=1.00;
  }
}
  
else{
  echo "Higer Math Grade: F" . "\n";
   $higher_math_point=0.00;
}

//Biology Resutl
$biology_totalmark=100;

if( $biology >= 33){
  if(($biology >= (($biology_totalmark*80)/100)) &&
    ($biology <= (($biology_totalmark*100)/100))){
    echo "Biology Grade: A+" . "\n";
      $biology_point=5.00;
  }
  elseif(($biology >= ($biology_totalmark*70)/100) &&
     ($biology <= ($biology_totalmark*79)/100) ){
    echo "Biology Grade: A" . "\n";
      $biology_point=4.00;
  }
    
  elseif(($biology >= ($biology_totalmark*60)/100) &&
     ($biology <= ($biology_totalmark*69)/100) ){
    echo "Biology Grade: A-" . "\n";
      $biology_point=3.50;
  }
  elseif(($biology >= ($biology_totalmark*50)/100) &&
     ($biology <= ($biology_totalmark*59)/100) ){
    echo "Biology Grade: B" . "\n";
      $biology_point=3.00;
  }
  elseif(($biology >= ($biology_totalmark*40)/100) &&
     ($biology <= ($biology_totalmark*49)/100) ){
    echo "Biology Grade: C" . "\n";
      $biology_point=2.00;
  }
  elseif(($biology >= ($biology_totalmark*33)/100) &&
     ($biology <= ($biology_totalmark*39)/100) ){
    echo "Biology Grade: D" . "\n";
      $biology_point=1.00;
  }
}
  
else{
  echo "Biology Grade: F" . "\n";
    $biology_point=0.00;
}

// Physic Resutl

$physics_totalmark=100;

if( $physics >= 33){
  if(($physics >= (($physics_totalmark*80)/100)) &&
    ($physics <= (($physics_totalmark*100)/100))){
    echo "Physics Grade: A+" . "\n";
        $physics_point=5.00;
  }
  elseif(($physics >= ($physics_totalmark*70)/100) &&
     ($physics <= ($physics_totalmark*79)/100) ){
    echo "Physics Grade: A" . "\n";
        $physics_point=4.00;
  }
    
  elseif(($physics >= ($physics_totalmark*60)/100) &&
     ($physics <= ($physics_totalmark*69)/100) ){
    echo "Physics Grade: A-" . "\n";
        $physics_point=3.50;
  }
  elseif(($physics >= ($physics_totalmark*50)/100) &&
     ($physics <= ($biology_totalmark*59)/100) ){
    echo "Physics Grade: B" . "\n";
        $physics_point=3.00;
  }
  elseif(($physics >= ($physics_totalmark*40)/100) &&
     ($physics <= ($physics_totalmark*49)/100) ){
    echo "Physics Grade: C" . "\n";
        $physics_point=2.00;
  }
  elseif(($physics >= ($physics_totalmark*33)/100) &&
     ($physics <= ($physics_totalmark*39)/100) ){
    echo "Physics Grade: D" . "\n";
        $physics_point=1.00;
  }
}
  
else{
  echo "Physics Grade: F" . "\n";
      $physics_point=0.00;
}


// Chemistry Resutl

$chemistry_totalmark=100;

if( $chemistry >= 33){
  if(($chemistry >= (($chemistry_totalmark*80)/100)) &&
    ($chemistry <= (($chemistry_totalmark*100)/100))){
    echo "Chemistry Grade: A+" . "\n";
        $chemistry_point=5.00;
  }
  elseif(($chemistry >= ($chemistry_totalmark*70)/100) &&
     ($chemistry <= ($chemistry_totalmark*79)/100) ){
    echo "Chemistry Grade: A" . "\n";
      $chemistry_point=4.00;
  }
    
  elseif(($chemistry >= ($chemistry_totalmark*60)/100) &&
     ($chemistry <= ($chemistry_totalmark*69)/100) ){
    echo "Chemistry Grade: A-" . "\n";
      $chemistry_point=3.50;
  }
  elseif(($chemistry >= ($chemistry_totalmark*50)/100) &&
     ($chemistry <= ($chemistry_totalmark*59)/100) ){
    echo "Chemistry Grade: B" . "\n";
      $chemistry_point=3.00;
  }
  elseif(($chemistry >= ($chemistry_totalmark*40)/100) &&
     ($chemistry <= ($chemistry_totalmark*49)/100) ){
    echo "Chemistry Grade: C" . "\n";
      $chemistry_point=2.00;
  }
  elseif(($chemistry >= ($chemistry_totalmark*33)/100) &&
     ($chemistry <= ($chemistry_totalmark*39)/100) ){
    echo "Chemistry Grade: D" . "\n";
      $chemistry_point=1.00;
  }
}
  
else{
  echo "Chemistry Grade: F" . "\n";
    $chemistry_point=0.00;
}


// Social Science Resutl

$social_science_totalmark=100;

if( $social_science >= 33){
  if(($social_science >= (($social_science_totalmark*80)/100)) &&
    ($social_science <= (($social_science_totalmark*100)/100))){
    echo "Social Science Grade: A+" . "\n";
        $social_science_point=5.00;
  }
  elseif(($social_science >= ($social_science_totalmark*70)/100) &&
     ($social_science <= ($social_science_totalmark*79)/100) ){
    echo "Social Science Grade: A" . "\n";
       $social_science_point=4.00;
  }
    
  elseif(($social_science >= ($social_science_totalmark*60)/100) &&
     ($social_science <= ($social_science_totalmark*69)/100) ){
    echo "Social Science Grade: A-" . "\n";
       $social_science_point=3.50;
  }
  elseif(($social_science >= ($social_science_totalmark*50)/100) &&
     ($social_science <= ($social_science_totalmark*59)/100) ){
    echo "Social Science Grade: B" . "\n";
       $social_science_point=3.00;
  }
  elseif(($social_science >= ($social_science_totalmark*40)/100) &&
     ($social_science <= ($social_science_totalmark*49)/100) ){
    echo "Social Science Grade: C" . "\n";
       $social_science_point=2.00;
  }
  elseif(($social_science >= ($social_science_totalmark*33)/100) &&
     ($social_science <= ($social_science_totalmark*39)/100) ){
    echo "Social Science Grade: D" . "\n";
          $social_science_point=1.00;
  }
}
  
else{
  echo "Social Science Grade: F" . "\n";
      $social_science_point=0.00;
}


// Islam  Resutl

$islam_totalmark=100;

if( $islam >= 33){
  if(($islam >= (($islam_totalmark*80)/100)) &&
    ($islam <= (($islam_totalmark*100)/100))){
    echo "Islam_education Grade: A+" . "\n";
          $islam_point=5.00;                                
  }
  elseif(($islam >= ($islam_totalmark*70)/100) &&
     ($islam <= ($islam_totalmark*79)/100) ){
    echo "Islam_education Grade: A" . "\n";
          $islam_point=4.00;
  }
    
  elseif(($islam >= ($islam_totalmark*60)/100) &&
     ($islam <= ($islam_totalmark*69)/100) ){
    echo "Islam_education Grade: A-" . "\n";
         $islam_point=3.50;
  }
  elseif(($islam >= ($islam_totalmark*50)/100) &&
     ($islam <= ($islam_totalmark*59)/100) ){
    echo "Islam_education Grade: B" . "\n";
         $islam_point=3.00;
  }
  elseif(($islam >= ($islam_totalmark*40)/100) &&
     ($islam <= ($islam_totalmark*49)/100) ){
    echo "Islam_education Grade: C" . "\n";
         $islam_point=2.00;
  }
  elseif(($islam >= ($islam_totalmark*33)/100) &&
     ($islam <= ($islam_totalmark*39)/100) ){
    echo "Islam_education Grade: D" . "\n";
        $islam_point=1.00;
  }
}
  
else{
  echo "Islam_education Grade: F" . "\n";
         $islam_point=0.00;
}

echo "\n\n";

// Average grade
$full_sub_mark=100+50+100+50+100+100+100+100+100+100+100;
// echo "Full subject mark is: $full_sub_mark" . "\n";

$total_mark=$bangla_first+$bangla_second+$english_fist+$english_second+$math+$higher_math+$biology+$physics+$chemistry+$social_science+$islam;
// echo "Total mark is: $total_mark" . "\n";


if($total_mark >= ($full_sub_mark*33)/100){
  if(($total_mark >= ($full_sub_mark*80)/100) && ($total_mark <= ($full_sub_mark*100)/100) ){
    echo "Total GPA: A+" . "\n";
      $total_point;
  }
  elseif(($total_mark >= ($full_sub_mark*70)/100) && ($total_mark <= ($full_sub_mark*79)/100) ){
    echo "Total GPA: A" . "\n";
  }
  elseif(($total_mark >= ($full_sub_mark*60)/100) && ($total_mark <= ($full_sub_mark*69)/100) ){
    echo "Total GPA: A-" . "\n";
  }
  elseif(($total_mark >= ($full_sub_mark*50)/100) && ($total_mark <= ($full_sub_mark*59)/100) ){
    echo "Total GPA: B" . "\n";
  }
  elseif(($total_mark >= ($full_sub_mark*40)/100) && ($total_mark <= ($full_sub_mark*49)/100) ){
    echo "Total GPA: C" . "\n";
  }
  elseif(($total_mark >= ($full_sub_mark*33)/100) && ($total_mark <= ($full_sub_mark*39)/100) ){
    echo "Total GPA: D" . "\n";
  }
 
}


?>