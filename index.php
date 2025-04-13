<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">0        This is my first website
        <?php
        define('PI',3.142);
        echo " this is written using PHP ";
        $var1=5;
        $var2=3;
        echo $var1;
        echo $var2;
        echo $var1 +$var2 ;
         // operators in php=============
        echo " <br>";
         // arithmetic  operator
        echo " the value of var1 +var2 is =";
        echo $var1 + $var2;
        echo "<br>";
        echo " the value of var1 -var2 is =";
        echo $var1 - $var2;
        echo "<br>";
        echo " the value of var1 *var2 is =";
        echo $var1 * $var2;
        echo "<br>";
        echo " the value of var1 /var2 is =";
        echo $var1 / $var2;
        echo "<br>";
        echo " the value of var1 % var2 is =";
        echo $var1 % $var2;
        echo "<br>";

         //assignment operator
        
        $var3=$var1;
        echo " the value of new variable is ";
        echo $var3;
        echo " <br>";
        $var3+=3;
        echo " <br>";
        echo " the value of new variable is ";
        $var3-=3;
        echo $var3;
        echo " <br>";
        echo " the value of new variable is ";
        $var3*=3;
        echo $var3;
        echo " <br>";
        echo " the value of new variable is ";
        $var3/=3;
        echo $var3;
        echo " <br>";
        echo " the value of new variable is ";
        $var3%=3;
        echo $var3;
        echo " <br>";
        echo " the value of new variable is ";

        echo " <br>";
// comparision operator=
        echo " <h1> Comparison Operator </h1>";
        echo var_dump(1==4); //false
        echo " <br>";
        echo var_dump(1!=4); // true
        echo " <br>";
        echo var_dump(1>=4);//false
        echo " <br>";
        echo var_dump(1<=4); // true
        echo " <br>";



         // increment /decrement operator
        $var1++;
        $var1--;
        ++$var1;
        --$var1;

         // logical operator
        
        ?>
        <?php
        echo " <br>";
        // DATA types==
        // 1.string
        // 2.Integer
        // 3.Float
        // 4.Boolean
        // 5. Array
        // 6. Object
        echo " <h1>Data Types</h1>";
            $var="<br> this is a string";
            echo  var_dump($var);
            echo " <br>";
            $var=23;
            echo  var_dump($var);
            echo " <br>";
            $var=23.465;
            echo  var_dump($var);
            echo " <br>";
            $var=23;
            echo  var_dump($var);
            echo " <br>";
            $var=true;
            echo  var_dump($var);
            echo PI;
        ?>


    </div>
</body>
</html>