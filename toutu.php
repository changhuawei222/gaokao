<?php
header("content-type:image/jpeg");

$name = $_GET['name']?$_GET['name']:"溜溜溜";
$sex = $_GET['sex']?$_GET['sex']:"男";
$shen = $_GET['shen']?$_GET['shen']:"男";

$yu = mt_rand(100,150);
$shu = mt_rand(100,150);
$yin = mt_rand(100,150);
$zon = mt_rand(230,300);
$he = $yu+$shu+$yin+$zon;

$im = imagecreatetruecolor(1241, 1754);
$bg = imagecreatefromjpeg('toutu.jpg');
imagecopy($im,$bg,0,0,0,0,1241,1754);
imagedestroy($bg);
$black = imagecolorallocate($im, 20, 20, 20);
$text = $name;
$font = 'font/xhkt.ttf';
imagettftext($im, 20, 0, 280, 565, $black, $font, $text);
imagettftext($im, 20, 0, 280, 605, $black, $font, $sex);
imagettftext($im, 20, 0, 280, 735, $black, $font, $shen);

imagettftext($im, 20, 0, 440, 895, $black, $font, $yu);
imagettftext($im, 20, 0, 440, 940, $black, $font, $shu);
imagettftext($im, 20, 0, 440, 985, $black, $font, $yin);
imagettftext($im, 20, 0, 440, 1030, $black, $font, $zon);
imagettftext($im, 20, 0, 440, 1075, $black, $font, $he);

imagejpeg($im);
imagedestroy($im);
?>