<?php
$dir = "kkt/img/gallery/"; 
$images = array();

// Scan the directory for image files
if (is_dir($dir)) {
    $files = scandir($dir);
    foreach ($files as $file) {
        if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
            $images[] = $file;
        }
    }
}

// Return images as JSON
header('Content-Type: application/json');
echo json_encode($images);
?>
