<?php declare(strict_types=1);

session_start();
# SET COLOURS
  $aClrs = ['blue', 'orange' ,'red','green', 'slate', 'gold', 'silver'];

  # SET DEFAULT COLOUR
  $_SESSION['clr'] = $_SESSION['clr'] ?? 'blue';  
  if( isset($_GET['clr']) && in_array($_GET['clr'], $aClrs)) :
    $_SESSION['clr'] = $_GET['clr'];
  endif;
  $clr = $_SESSION['clr'];
  
switch($clr) :
case 'orange' :  
  $cssVars = <<< ____EOT
    --ttb: #FBBC05;  /* ORANGE; */ 
    --ttf: SNOW;     
    --bdb: #4285F4;  /* BLUE; */    
    --bdf: BLACK;     
    --dvb: #34A853;  /* GREEN  */
    --dvf: DARKGRAY; /* hsl(0 50% 50%); */
____EOT;
break;

case 'blue' :  
  $cssVars = <<< ____EOT
    --ttb: BLUE;
    --ttf: SNOW;
    --bdb: #e8e8e8; /* LIGHTGRAY; */
    --bdf: hsl(0  0% 00% );
    --dvb: LIGHTGRAY; /* hsl(0 50% 98%); */
    --dvf: DARKGRAY;  /* hsl(0 50% 50%); */
____EOT;
break;

case 'green' :  
  $cssVars = <<< ____EOT
    --ttb: CHARTREUSE; /* hsl(120 88% 53%); */
    --ttf: SNOW;
    --bdb: #e8e8e8; /* LIGHTGRAY; */
    --bdf : hsl(0  0% 00% );
    --dvb : LIGHTGRAY; /* hsl(0 50% 98%); */
    --dvf : DARKGRAY;  /* hsl(0 50% 50%); */
____EOT;
break;

case 'slate' :  
  $cssVars = <<< ____EOT
    --ttb: LIGHTGRAY; /* hsl(0 0% 42%); */
    --ttf: hsl(0 50% 99% ); 
    --bdb: #e8e8e8; /* LIGHTGRAY; */
    --bdf : hsl(0  0% 00% );
    --dvb : LIGHTGRAY; /* hsl(0 50% 98%); */
    --dvf : DARKGRAY;  /* hsl(0 50% 50%); */
____EOT;
break;

case 'gold' :  
  $cssVars = <<< ____EOT
    --ttb: GOLD; /* hsl(0  90%  50%); */
    --ttf: hsl(0  50%  100% );
    --bdb: #e8e8e8; /* LIGHTGRAY; */
    --bdf : hsl(0  0% 00% );
    --dvb : LIGHTGRAY; /* hsl(0 50% 98%); */
    --dvf : DARKGRAY;  /* hsl(0 50% 50%); */
____EOT;
break;

case 'silver' :  
  $cssVars = <<< ____EOT
    --ttb: SILVER; /* hsl(0  90%  50%); */
    --ttf: hsl(0  50%  100% );
    --bdb: #e8e8e8; /* LIGHTGRAY; */
    --bdf : hsl(0  0% 00% );
    --dvb : LIGHTGRAY; /* hsl(0 50% 98%); */
    --dvf : DARKGRAY;  /* hsl(0 50% 50%); */
____EOT;
break;

endswitch;

$css = $css ?? 'home.css';

$RELOAD = 'reload=' .date('H-i-s');

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
<link rel="stylesheet" href="assets/css/main.css?$RELOAD">
<link rel="stylesheet" href="assets/css/$css?$RELOAD">
<title> $title </title>  
</head>
____EOT;

