<?php

include "../phpqrcode/qrlib.php";

if(!file_exists("qr_images"))
{
    mkdir("qr_images");
}

$text = "Name: rinkal
Mobile: 7069201694
Email: rinkalvadhiya766@gmail.com";

$file = "qr_images/myqr.png";

QRcode::png(
    $text,
    $file,
    QR_ECLEVEL_H,
   4
);

echo "<h2>QR Generated Successfully</h2>";
echo "<img src='$file'>";
?>