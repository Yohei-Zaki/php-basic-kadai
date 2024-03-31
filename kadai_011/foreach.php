<!doctype html>

<head>
    <meta charset ="utf-8">
    <title>PHP基礎</title>
</head>

<p>
<?php
$commodity_details = ['名前' => '玉ねぎ',
                '値段' => '200',
                '産地' => '北海道'];
  foreach($commodity_details as $key => $value){
        echo "{$key} : {$value}<br>";
  }
?>
</p>