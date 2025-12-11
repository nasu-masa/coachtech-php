<?php

$a = 7 ;

if($a == 5){
echo "\$aは7です" ;
}
elseif($a == 6){
echo "\$aは6かな";
} 
elseif($a > 6){
echo "\$aは7です";
}
else {
echo "\$aは5以外です" ;
}
echo "<br />" ;

$people ="Saburo" ;

switch ($people) {
    case "ichiro" :
    echo "一郎です" ;
    break ;
    case "Jiro" :
    echo "二郎です" ;
    break ;
    case "Saburo" :
    echo "三郎です" ;
    break ;
}

echo "<br />" ;


$result = ($a===7) ? "TRUE" : "FALSE";
echo $result;
echo"<br />";

if($a === 6){
    echo "true";
}else{
    echo "sakana";
}