<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
<?php
function print_image($imagepath)
{ 
$img_sizes = getimagesize($imagepath);
$width = $img_sizes[0];
$height = $img_sizes[1];
echo "<img src='".$path."' ".
"style='width:".$width."px; height:".$height."px' />";
}
?>
<?php
    $file = "logo.png";           //Nuestra imagen
    $imagen = getimagesize($file);    //Sacamos la informacion de la imagen
    $ancho = $imagen[0];              //Ancho de la imagen
    $alto = $imagen[1];               //Alto de la imagen
    echo "Ancho: $ancho<br>";
    echo "Alto: $alto<br>";
?>

<!-- MAYUSCULAS Y MINUSCULAS -->
<?php
echo strtoupper("hola usuario <br>");
echo strtolower("hola USUARIO<br>");
echo ucfirst("hola<br>"); 
echo ucwords ("hola usuario<br>"); 
?>
<!-- OBTENER URL-->
<?php function obtenerURL() {
  $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
  $protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/") . $s;
  $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
  return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
}

function strleft($s1, $s2) {
  return substr($s1, 0, strpos($s1, $s2));
}

$url = obtenerUrl();
$datos = parse_url($url);

foreach ($datos as $key=>$value) {
  echo "$key: $value <br  >";
}

$url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

echo "<b>$url_actual</b>";
?>
</body>

</html>
