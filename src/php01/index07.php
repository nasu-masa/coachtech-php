<?php

function outputNumber($a)
{
    echo 3+3*$a ."desu";
    return;
}
outputNumber(2);


function outputHello()
{
  echo "Hello world";
}

outputHello(); // ①


function text($number1,$number2)
{
    $value = $number1+$number2;
    return $value;
}

$total = text(2,4);
echo $total;

function te($a , $c)
{
    $value = $a + $c ;
    return $value ;
}
$ac = te(2,3);
echo $ac ;

echo "<br />";

function score($score1 , $score2 , $score3)
{   $total = $score1 + $score2 + $score3;
    if($total > 210 ){
        echo "合計点は〇〇なので合格です";
    }
    else{
        echo "合計点は〇〇なので不合格です";
}
    return $total;

}
$total = score( 70 , 70 , 90);

echo "<br />";

function corner($soko , $taka , $two )
{
    return $soko * $taka / $two ;
}
echo  corner(5 , 8 , 2) ;

function neko($kdkdkd,$tetete)
{
    return $kdkdkd+$tetete;
}
$tako = neko (9,4);
echo $tako;

$person = [
    "name" => "Masataka",
    "age" => 30,
    "city" => "Fukui"
];

foreach ($person as $key => $value) {
    echo " $key, $value\n";
}

$neko = 16;
$korehaneko = ($neko >=  15) ? "猫です" : "犬です" ;

echo $korehaneko ;