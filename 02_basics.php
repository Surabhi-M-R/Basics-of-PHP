<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;

    }
    .container{
        max-width: 80%;
    background-color: grey;
    margin: auto;
    padding: 23px;
    }
</style>
<body>
    <div class="container">
        <H1>
            This is all about  PHP
        </H1>
        this is the php website
        <p>
            Your party status is here 
        </p>
        <?php
        $age =7;
        if($age>18){
            echo "<br> you can go to party";
        }
        elseif($age==7){
            echo" your 7 years old ";
        }
        else {
            echo " you cannot go to the party";
        }
        // Arrays in php
        $code=array(" python","cpp","c","java","php"," js");
        echo count($code);
        echo "<br>";

        echo $code[0];
        echo "<br>";
        echo $code[1];
        echo "<br>";
        echo $code[2];
        echo "<br>";
        echo $code[3];
        echo "<br>";
        echo $code[4];
        echo "<br>";
        // loops in php
        $a=0;
        while($a<=10){
            echo " <br> the value is ";
            echo $a;
            $a++;
                }
        // iterating arrays in php using while loop
        $a=0;
        while($a<count($code)){
            echo " <br> the value languages is : ";
            echo $code[$a];
            $a++;
                }
         // iterating arrays in php using do while loop
        $a=0;
        while($a<count($code)){
            echo " <br> the value languages is : ";
            echo $code[$a];
            $a++;
                }do()

        ?>
    </div>
</body>
</html>