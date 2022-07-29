<?php
$fileName='count.txt';
if(!file_exists($fileName)) file_put_contents($fileName, '0');
$file=file($fileName);
(int)$file[0]++;
file_put_contents($fileName, $file[0]);
$img=file_get_contents('image.png');
echo $img;