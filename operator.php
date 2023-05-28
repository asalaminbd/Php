<?php
    echo "The types of operator in php:" . "\n";
    // Now we are useing Arithmetic operators.
    // Addition
    $a=10;
    $b=30;
    $sum= $a+$b;
    echo "Addition : $sum " . "\n\n";

    // Subtraction
    $total_cost =10050;
    $sell=15000;
    $Profit= $sell - $total_cost;
    echo "Subtraction : $Profit " . "\n\n";

    // Multiplication
    $x=10;
    $y=6;
    $multiplication=$x*$y;
    echo "Multiplication: $multiplication" ."\n\n";

    // Division_
    $a=50;
    $b=3;
    $division= $a/$b;
    echo "Division : $division" . "\n\n";

    // Modulus
    $a=15000;
    $b=450;
    $modulus= $a/$b;
    echo "Modulus : $modulus" . "\n\n";

    // Exponentiation
    $a=10;
    $b=6;
    $result= $a**$b;
    echo "Exponentiation : $result" . "\n\n\n";


    //Now we are useing Assignment Operators
    echo "PHP Assignment Operators:" . "\n";

        // Equal Assignment Operators(=)
    $a=50;
    $b=$a;
    echo "a eual b: $b" . "\n\n";

	// Addition Assignment Operators (+=)
    $x = 20;  
    $x += 100;
    echo "Addition: $x" . "\n\n";

    // Subtraction Assignment Operators (-=)
    $x = 120;  
    $x -= 50;
    echo "Subtraction: $x" . "\n\n";

    // Multiplication Assignment Operators (*=)
    $x = 20;  
    $x *= 10;
    echo "Multiplication: $x" . "\n\n";

    // Division Assignment Operators (*/)
    $x = 200;  
    $x /= 5;
    echo "Division: $x" . "\n\n";

    // Modulus Assignment Operators(%=)
    $x = 200;  
    $x %= 6;
    echo "Modulus: $x" . "\n\n";

    // Now we are useing Comparison Operators:

    echo "PHP Comparison Operators:" . "\n";

    // Equal(==)
    $x = 100;  
    $y = 100;
    var_dump($x == $y). "\n\n";
    // returns true because values are equal


    $x = 100;  
    $y = 10;
    var_dump($x == $y). "\n\n";
    // returns false because values are equal

	// Identical (===)
    $x = 100;  
    $y = "100";
    var_dump($x === $y). "\n\n";
    // result  false because values type  are not equal

    // Not equal (!=)
    $x = 100;  
    $y = "100";
    var_dump($x != $y). "\n\n";
    // result ture because vales are not eual

    // Not equal (<>)
    $x = 100;  
    $y = "100";
    var_dump($x <> $y). "\n\n";

    // Not identical(!==)
    $x = 100;  
    $y = "100";
    var_dump($x !== $y). "\n\n";
    // Resutl true beacuse value type are not same
    // Greater than(<)
    $x = 71;  
    $y = "11";
    var_dump($x < $y). "\n\n";
    // Resutl flase beacuse value are not right 

    // Less than(<)
    $x = 71;  
    $y = "11";
    var_dump($x > $y). "\n\n";
    // Resutl ture beacuse value are not right

    // Greater than or equal to(>=)
    $x = 71;  
    $y = "11";
    var_dump($x >= $y). "\n\n";
    // result is ture beacuse x  value are greater than to y

        // Less than or equal to(<=)
    $x = 45;  
    $y = "95";
    var_dump($x >= $y). "\n\n";
    // Result is fluse beacuse y value are not lees than to x

    // Spaceship(<=>)
    $x = 5;  
    $y = 95;
    echo ($x<=>$y) . "\n\n"; 
    // resutl is ture/-1 because x less than to y
    $x = 45;  
    $y = 45;
    echo ($x<=>$y) . "\n\n"; 
    // result is 0 because x and y value is same
    $x = 45;  
    $y = 15;
    echo ($x<=>$y) . "\n\n"; 
    // result is 1 because x greather than to y
    // PHP Increment / Decrement Operators

    $number = 99;  
    echo "Number Increment:" . ++$number . "\n\n"; //Increment

    $number = 100;  
    echo "Number Decrement:" . --$number . "\n\n"; //Decrement

    // $number = 10;  
    // echo "Number Decrement:" . (++$number) + ($number++) +($number++) . "\n\n"; 

    // PHP Logical Operators

    // And operators
    $x = 10;  
    $y = 30;

    if ($x == 10 and $y == 30) {
        echo "The result is right" . "\n\n";
    }

  // OR operators
  $x = 100;  
  $y = 50;

    if ($x <= 100 or $y != 80) {
        echo "Result is sucessful" . "\n\n";
    }

  // Xor operators
   $x = 100;  
   $y = 50;

  if ($x <= 100 Xor $y != 80) {
    echo "Result is sucess" . "\n\n";
  }

    // And operators
  $x = 20;  
   $y = 10;

  if ($x == 20 && $y != 50) {
    echo "Result is : $x" . "\n\n";
  }
    // Result is 20 because y value is notequal 10.
  else{
    echo "Result is: $y" . "\n\n";
  }


    // PHP String Operators
    echo "PHP String Operators:" . "\n\n";
    $text_first = "This is String";
    $text_second = " Operators";
    echo $text_first . $text_second . "\n\n";
    echo $text_first .= $text_second . "\n\n";



?>  