<?php
header('Cache-Control: max-age=86400');
$img = $_GET['img'];

$filename = md5($img);
$w = intval($_GET['w']);
$h = intval($_GET['h']);
if(!file_exists($filePath = 'uploads/' . $filename.'.jpg')) {
    file_put_contents($filePath, file_get_contents($img));
}
if(!file_exists($thumbPath = 'uploads/' . $filename . '-' . $w . '-' . $h .'.jpg')) {
    require_once 'thumb/image.class.php';
    $img = new Zubrag_image();
    $img->max_x        = $w;
	$img->max_y        = $h;
	$img->cut_x        = 0;
	$img->cut_y        = 0;
	$img->quality      = 75;
	$img->save_to_file = 1;
    $img->image_type   = 2;
    $img->GenerateThumbFile($filePath, $thumbPath);
}
header('Location: /' . $thumbPath);
//header('Location: ' . $img.'&w='.$w.'&h='.$h);