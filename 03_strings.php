<?php
    $str="this";
    $len=strlen($str);
    echo " the length of the string is=".$len ."<br>";
    echo " the number od words in the string is".str_word_count($str)." <br>";
    echo " the reversed string is ".strrev($str)."<br>";
    echo " the search for the position in  the string is ".strpos($str,"is")."<br>";
    echo " the replaced string is ".str_replace("is", "at",$str)."<br>";


?>
