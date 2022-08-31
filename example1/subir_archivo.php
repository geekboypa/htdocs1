<?php
error_reporting(0);
$nombre_de_archivo = $_FILES["uploadfile"]["name"];
$nombre_temporal = $_FILES["uploadfile"]["tmp_name"];
$folder = "upload-images/".$nombre_de_archivo;
move_uploaded_file($nombre_temporal,$folder);
echo "<img src='$folder' height=100 width=100 />";
?>
