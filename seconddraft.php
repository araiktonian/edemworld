

<?php
$image = ImageCreateFromPng("ImageParis.png");
Header ("Content-type: image/png");
ImagePng ($image);
ImageDestroy ($Image);
?>


