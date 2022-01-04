<?php declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'TRUE');


# echo '<small> File : <br>' .__FILE__ .'</small>';
# echo '<br>';


if( is_numeric($_GET['doc']) ) :
  echo 'XXX<pre> $_GET [...]'; print_r($_GET); echo '</pre>';
  echo 'XXX<pre> $_GET [...]'; print_r($_GET); echo '</pre>';
  # echo '<hr>';
  # echo '<pre>$_POST[...]'; print_r($_POST); echo '</pre>';
  # echo '<hr>';

  $doc = $_GET['doc'] ?? 8;
  var_dump($doc);

  echo '<br>';
  for($i2=0; $i2 < (int) $doc; $i2++) :
    echo '<br>$doc ==> ' .$i2;
  endfor;  
else:
  # echo $_GET['doc'];
  require $_GET['doc'] ;
endif;    

