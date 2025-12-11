<?php
for ($i = 1; $i <= 5 ; $i++){
    echo $i * 2 ."<br />" ;
}


$a = 0 ;

while ($a < 100) {
  if ($a == 20) {
    $a++;
    break;
  }
  if($a %3  == 0 ) {
    $a++;
    continue;
  }
  echo $a ."<br />";
  $a++  ;
}

$num = 0 ;

do {
    echo "num = ".$num ."<br />";
    $num++;
}while ($num<=2) ;


for ($h = 0 ; $h < 5 ; $h++ ){
    for ($g = 0 ; $g < 5 ;  $g++ ){
    echo "●" ;

}   echo "<br />" ;
}

$p = 0 ;

while ($p < 100) {
    if ($p == 20){
        $p++ ;
        break ;
    }
    if ($p % 3 == 0) {
        $p++ ;
        continue ;
    }

    echo "count -" . $p . "<br />" ;
    $p++ ;

}

$neko = 0 ;

do {
    echo "num =". $neko. "<br />" ;
    $neko++;
} while ($neko < 3) ;

$f = "Fizz" ;
$b = "Buzz" ;
$fb = "FizzBuzz" ;


for ($n = 1 ; $n <= 50 ; $n++ ) {
    if ($n % 3 == 0 and $n % 5 == 0){
        echo $fb ;
        echo"<br />";
    }
    elseif ($n % 3 == 0) {
        echo $f ."<br />";
    }
    elseif($n % 5 == 0) {
        echo $b ."<br />";
    }
    elseif($n ) {
        echo $n ."<br />";
    }
}


