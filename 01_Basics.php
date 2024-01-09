<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
        define('PI', 3.14);
            echo "Hello World and this is printed using php" ;
            // single line comment
            /*
            This 
            is 
            a 
            multi
            line 
            comment
            */
            $variable1 = 5;
            $variable2 = 2;

            echo $variable1;
            echo $variable2;
            Echo $variable1 + $variable2;

            // Operator in php
            // Arithmetic Operators
            echo "<br>" ;
            echo "The value fo variable1 + variable2 is ";
            echo $variable1 + $variable2 ;
            echo "<br>" ;
            echo "The value fo variable1 - variable2 is ";
            echo $variable1 - $variable2 ;
            echo "<br>" ;
            echo "The value fo variable1 * variable2 is ";
            echo $variable1 * $variable2 ;
            echo "<br>" ;
            echo "The value fo variable1 / variable2 is ";
            echo $variable1 / $variable2 ;
            echo "<br>" ;
            // Assignment Operators
            $newVar = $variable1;
            //$newVar += 1;
            //$newVar -= 1;
            //$newVar *= 2;
            $newVar /= 2;
            echo "The value of newvar is ";
            echo $newVar;
            echo "<br>";
            // Comparison Operators
            echo "<h1> Comparison Operators </h1>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>";
            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>";
            echo "The value of 1>=4 is ";
            echo var_dump(1>=4);
            echo "<br>";
            echo "The value of 1<=4 is ";
            echo var_dump(1<=4);
            echo "<br>";
            // Increment / Decrement Operators
            // echo $variable1++;
            //echo $variable1--;
            //echo ++$variable1;
            echo --$variable1;
            echo "<br>";            
            echo $variable1;
            echo "<br>";
            
            // Logical Operators
            // and (&&)
            // or (||)
            // xor
            // not (!)
            //$newVar = (true and true);
            //$newVar = (false and true);
            //$newVar = (false and false);
            //$newVar = (true and false);
            //$newVar = (true or false);
            //$newVar = (false or false);

            //$newVar = (true xor true);
            //$newVar = (false xor true);
            //$newVar = (false xor false);
            //echo var_dump($newVar)
        ?>
        <?php
            // Data types in php
            // 1. String
            // 2. Integer
            // 3. Float
            // 4. Boolean
            // 5. Array
            // 6. Object
            echo "Data Types of PHP <br>";
            $var = "This is a string";
            echo var_dump($var);
            echo "<br>";

            $var = 67;
            echo var_dump($var);
            echo "<br>";  

            $var = 67.1;
            echo var_dump($var);
            echo "<br>";  

            $var = True ;
            echo var_dump($var);
            echo "<br>";  

            echo PI;
        ?>
    </div>
</body>
</html>
