<?php

$im = imagecreatefromjpeg("image.jpg");
imagefilter($im, IMG_FILTER_GRAYSCALE);

$x  = 0;
$y  = 0;

$lineCou = 0;
$lineDat = array();

while($x<57){
	$y = 0;
	while($y<300){
		$rgb = imagecolorat($im, $y, $x);
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = $rgb & 0xFF;

		if($rgb>1679555){
			echo "█";
		}else{
			echo "░";
			$lineCou++;
		}
		$lineDat[$y] = $lineCou;
		$lineCou=0;
		$y++;
	}
	echo "<br>";
	$x++;
}

echo "<hr>";
print_r($lineDat);

?>
