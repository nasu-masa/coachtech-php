<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
print "私の名前は、" . $name . "です". "<br />";
$set = htmlspecialchars($_POST["set"], ENT_QUOTES);
print "ご希望商品は" . $set . "<br />";
$order = htmlspecialchars($_POST["order"], ENT_QUOTES);
print "注文数は、" . $order ;

