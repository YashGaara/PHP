<?php
    $pattern="/a*c/";
    $string="a.c";
    if(preg_match($pattern,$string)){
        echo "Match Found:";
    }
    else{
        echo "Not Match";
    }
    $word="/hello/";
    $str="hEllo";
    echo preg_match($word,$str);

    $word1="/student$/";
    $str1="hello student";
    echo preg_match($word1,$str1);

    $word2="/a*/"; // This will always match the string return true 
    $str2="77";
    echo preg_match($word2,$str2);

    $word3="/a+/"; // this will match first  value you can write any value after a 
    $str3="abchdhd";
    echo preg_match($word3,$str3);

    $word4="/a?/";
    $str4="AB";
    echo preg_match($word4,$str4);

    $word5="/[a]/";
    $str5="abk";
    echo preg_match($word5,$str5);

    $word6="/a|b/"; // This is work like and operator
    $str6="klk";
    echo preg_match($word6,$str6);

    $word6="/a{3}/"; // This will minimum 3 values in a line  and not limit in maximum 
    $str6="klkaaae";
    echo preg_match($word6,$str6);

    $word6="/s{3,5}/";
    $str6="ancsssssssss";
    echo preg_match($word6,$str6);

    $word6="/(abc)/";
    $str6="Aabc";
    echo preg_match($word6,$str6);

    $word6="/[a-z]/";
    $str6="klm";
    echo preg_match($word6,$str6);

    $word7="/[0-9]/";
    $str7="100";
    echo preg_match($word7,$str7);    


?>