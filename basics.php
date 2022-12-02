<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            margin: auto;
            max-width: 60%;
            background-color : rgb(213, 159, 159);
            height : 50vh;
            overflow: auto;
        }
    </style>
</head>
<body>
    <div class="container">

        <?php

            /*
            //basics in php

            // constants in php --> whose values wont be changed
            define('pi', 3.142);
            echo "<br>";
            echo "this is the constant value of the PI : " , pi;



            echo "<br>";
            echo "Hello world this is using php";

            // arithmatic operators
            $var1 = 56;
            $var2 = 67;
            echo "<br>";
            echo $var1 * $var2;
            echo "<br>";
            echo $var1 + $var2;
            echo "<br>";
            echo $var1 - $var2;
            echo "<br>";
            echo $var1 / $var2;

            // assignment operators --> +, +=, -=, *=, /=, %= 
            echo "<br>";
            $var3 = 67;
            $var3 += 10;
            echo $var3;

            // comparison operator --> >, <, >=, <=, !=, ==
            echo "<br>";
            echo var_dump(1==4);
            echo "<br>";
            echo var_dump(1>4);
            echo "<br>";
            echo var_dump(1<4);
            echo "<br>";
            echo var_dump(1!=4);

            // increment/decrement operator
            $var4 = 10;
            echo "<br>";
            echo $var4++; 
            echo "<br>";
            echo $var4--; 
            echo "<br>";
            echo ++$var4; 
            echo "<br>";
            echo --$var4; 

            // logical operators --> and(&&), or(||), xor, !,
            echo "<br>"; 
            $age = 17;
            if ($age >= 18) {
                echo "You can drive...";
            }
            else {
                echo "sorry you cant drive";
            }
            
            // datatypes --> string, integer, float, boolean, array, Object
            echo "<br>"; 
            $str = "this is the string"; // = 56, = 56.2, = true
            echo var_dump($str);

            */

            // more basics in php

            // 1) if else statements
            // 2) loops in php
                // arrays in php
            $arr = array("python", "c++","java");
            echo "<br>";
            echo $arr[2];
            echo "<br>";
            echo count($arr);
            echo "<br>";

                // while loops
            $a = 0;
            while ($a <= 10) {
                echo $a;
                echo "<br>";
                $a++;
            }

                // iterating arrays in php using while loop
            $b = 0;
            while($b < count($arr)){
                echo $arr[$b];
                echo "<br>";
                $b++;
            }

                // do while loops in php
            $c = 0;
            do{
                echo $arr[$c];
                echo "<br>";
                $c++;
            }while($c < 2);

                // for loop in php
            for ($d=0; $d < 10; $d++) { 
                echo "the value of d is : ", $d;
                echo "<br>";
            }

                // foreach loop in php
                // it stores each value of the array variable inside the value variable
            foreach ($arr as $value) {
                echo $value;
                echo "<br>";
            }

            // functions in php
            function print10(){
                for ($i=1; $i <= 10; $i++) { 
                    echo $i;
                    echo "<br>";
                }
            }
            print10();

                // passing parameters in functions
            function Print_numbers($num){
                for ($i=1; $i <= $num; $i++) { 
                    echo $i;
                    echo "<br>";
                }
            }
            Print_numbers(5);

            // strings in php
            echo "<br>";
            $str = "this is the string";
            echo $str;
            $strln = strlen($str);
            echo "<br>";
            echo "the length of the above string is : ".$strln; // dot is the concatenation oprator
            echo "<br>";
            // word count
            echo str_word_count($str); 
            // echo $str[3];
            // reversing the string
            echo "<br>" . strrev($str);
            // starting position of the first character of the string or a word
            echo "<br>" . strpos($str , "the");  // 8th position
            echo "<br>" . strpos($str , "is");   // 2nd position

            // repacing the substring in the string 
            echo "<br>" . str_replace(" is " , " was ", $str);
         
        ?>
        


    </div>
</body>
</html>