<?php

$people = array(
    "brother1"=> "Taro",
    "brother2" => "Jiro",
    "brother3" => "Saburo"
    );

var_dump($people);

echo $people["brother1"] ;


$human= array(
    "Taro" => "25歳men",
    "jiro" => "20歳men",
    "nanao" => "19歳woman"
);

foreach ($human as $hito => $age) {
    print $hito."(".$age.")"."<br />";
}



$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}

