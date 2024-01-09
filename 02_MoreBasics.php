<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Tutorial</title>
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .container {
      max-width: 80%;
      background-color: rgb(193, 144, 144);
      margin: auto;
      padding: 23px;
    }
  </style>
  <body>
    <div class="container">
      <h1>Lets learn about PHP</h1>
      <p>Your party status is here: </p>
      <?php
        $age = 6;
        if($age>18){
            echo "You can go to the party";
        }
        else if($age==7){
            echo "You are 7 years old";
        }
        else if($age==6){
            echo "You are 6 years old";
        }
        else{
            echo "You cannot go to the party";
        }
        echo "<br>";
        //Arrays in PHP
        $languages = array("Python", "C++", "Java", "Php", "NodeJS");
        // echo $languages[2];
        // echo count($languages);

        //Loops in PHP
        $a = 0;
        // while ($a <= 10) {
        //     echo "<br> The value of a is:";
        //     echo $a;
        //     $a++;
        // }

        //Iterating arrays in PHP using while loops
        $a = 0;
        while ($a < count($languages)) {
            echo "<br> The value of languages is:";
            echo $languages[$a];
            $a++;
        }
        //Do While Loops in PHP
        $a = 200;
        do{
            echo "<br> The value of a is:";
            echo $a;
            $a++;
        }while ($a < 10); 
        
        //For loops
        // for ($a=0; $a < 10; $a++) { 
        //     echo "<br> The value of a from the for loop is:";
        //     echo $a;
        // }
        //here a=0 is assigned then a<10 is checked then the loop is run once then updation of a++ is done

        foreach ($languages as $value) {
            echo "<br> the value from foreach is ";
            echo $value;
        }
        
        //functions
        function print5(){
            echo "FIVE";
        }

        echo "<br>";
        print5();

        echo "<br>";
        print5();
        echo "<br>";
        print5();
        echo "<br>";
        print5();
        echo "<br>";
        print5();

        function print_number($number){
            echo "<br> Your number is ";
            echo $number;
        }

        print_number(45);
        print_number(435);
        print_number(5);
        ?>
    </div>
  </body>
</html>
