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
            
            // echo "<br>";
            
            // echo "<br>";
            // echo ++$variable1;
            // echo "<br>";
            // Logical Operators
        ?>
        <?php
            //echo "Hello World again" ;
            // secret algo
        ?>
    </div>
</body>
</html>