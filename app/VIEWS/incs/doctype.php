<?php declare(strict_types=1);

session_start();
$_SESSION['clr'] = $_SESSION['clr'] ?? 'slate';

$clr = $_GET['clr'] ?? $_SESSION['clr'];
 
/*
hsla(hue, saturation, lightness, alpha)
  hue
     a degree on the color circle (from 0 to 360) - 
     0   is red, // (or 360) 
     120 is green, 
     240 is blue

  saturation
    0% is a shade of gray and 100% is the full color (full saturation)

  lightness
    0%   is black 
    50%  is normal 
    100% is white

  alpha
    opacity as a number between 0.0 (fully transparent) and 1.0 (fully opaque)
    # The alpha parameter is a number between 0.0 (fully transparent) 
    # and 1.0 (not transparent at all):
*/

switch($clr) :
case 'orange' :  
  $cssVars = <<< ____EOT
    --ttb: hsl(0 99% 53%); 
    --ttf: hsl(0  0% 99% );
____EOT;
break;

case 'green' :  
  $cssVars = <<< ____EOT
    --ttb: hsl(120 88% 53%); 
    --ttf: hsl(0  0% 9% );
____EOT;
break;

case 'blue' :  
  $cssVars = <<< ____EOT
    --ttb: hsl(240 52% 50%); 
    --ttf: hsl(0  0% 99% );
____EOT;
break;

case 'slate' :  
  $cssVars = <<< ____EOT
    --ttb: hsl(0 0% 42%); 
    --ttf: hsl(0 50% 99% ); 
____EOT;
break;

case 'none' :  
default :
  $cssVars = <<< ____EOT
    --ttb: hsl(0  90%  50%); 
    --ttf: hsl(0  50%  100% );
____EOT;
break;
endswitch;

$cssVars .= "
  --bdb : hsl(0  0% 00% );
  --bdf : hsl(0  0% 00% );

  --dvb : LIGHTGRAY; /* hsl(0 50% 98%); */
  --dvf : DARKGRAY;  /* hsl(0 50% 50%); */
";
$css = $css ?? 'style.css';

echo $doctype = <<< ____EOT
<!doctype html><html lang="en-GB">
<head> 
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">  
<style>
/* $clr */
:root {
$cssVars
}
</style>
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/$css">
<title> $title </title>  
</head>
____EOT;

