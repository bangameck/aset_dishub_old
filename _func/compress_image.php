<?php

function compressImage($source, $destination, $quality)
{
    // Mendapatkan info gambar
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];

    // Membuat gambar baru dari file yang diupload
    switch ($mime) {
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($source);
            break;
        default:
            $image = imagecreatefromjpeg($source);
    }

    // simpan gambar
    imagejpeg($image, $destination, $quality);

    // Return gambar yang dikompres
    return $destination;
}
