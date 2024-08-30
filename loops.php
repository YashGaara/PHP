<?php 
 // while loop 
 $i= 1;
 $ch=10;
 while ($i <= 10) {
    echo "$ch x $i =" ,$ch*$i ,"<br>";
    $i++;
 }
 $m=1;
 do{
    echo $m.", <br>";
    $m++;
 } while( $m <= 10);

 //    for(initialized ; condition; increment/decrement)
 for( $i=2;$i<=10;$i+=2){
    echo $i ,"<br>";
 }
 //  syntax :

$colors=["red","white","blue"];
foreach( $colors as $color ){
    echo $color.", <br>";
}

// break and continue
for ( $i= 1;$i<= 10;$i++){
    if( $i== 5){
        break;
    }
    echo $i ,"<br>";
}
for( $i= 1;$i<= 10;$i+= 1){
    if( $i== 5){
        continue;
    }
}
echo $i ,"<br>";



?>