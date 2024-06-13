<?php
$data = $_POST['data'];
$data = str_replace('data:image/png;base64,', '', $data);
$data = str_replace(' ', '+', $data);
$imageData = base64_decode($data);

// specify the path where you want to save the image
$file = 'images/image.png';
file_put_contents($file, $imageData);
echo "Image saved successfully";
?>