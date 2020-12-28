<?php
$items = Array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$i=0;


$db = new SQLite3('md5.db');

// $db->exec('CREATE TABLE hashes (id INTEGER PRIMARY KEY AUTOINCREMENT, hashes varchar(255), original varchar (255))');

 $db->exec('CREATE VIRTUAL TABLE hash_text USING fts4 (hashes varchar(255), original varchar (255))');



while ($i<=1000000) {

$i1 = $items[array_rand($items)];
$i2 = $items[array_rand($items)];

$i3 = $items[array_rand($items)];
$i4 = $items[array_rand($items)];

$i5 = $items[array_rand($items)];
$i6 = $items[array_rand($items)];

$i7 = $items[array_rand($items)];
$i8 = $items[array_rand($items)];
$i9 = $items[array_rand($items)];
$i10 = $items[array_rand($items)];


$m = hash('md5', $i1.$i2.$i3.$i4.$i5.$i6.$i7.$i8.$i9.$i10);
$j = $i1.$i2.$i3.$i4.$i5.$i6.$i7.$i8.$i9.$i10;
$string =  $m.':'.$j;


$db->exec("INSERT INTO hashes_virtual (id, hashes, original) VALUES (NULL, '$m', '$j')");

//  $db->exec("INSERT INTO hash_text (hashes, original) VALUES ('$m', '$j')");





$i = $i+1;
}

?>