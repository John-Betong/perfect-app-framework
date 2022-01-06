<?php declare(strict_types=1);

$INFO = 'https://www.makeuseof.com/how-to-make-accordion-html-css/';

$clrs  = 'https://this-is-a-test-to-see-if-it-works.anetizer.com/sp-a/jb-swatch/';

$aLinks = [
  'index.php'      => 'Home',
  'rtfm.php'       => 'RTFM',
  'examples.php'   => 'Examples',
  "$clrs"          => 'Colours',
];
$links = '<ul id="pages" class="inline">';
  foreach($aLinks as $key => $page) :
    $links .= "
      <li> 
        <a href='$key'> $page </a>
      </li>  
    ";
  endforeach;  
$links .= '</ul>';
 
$aClrs = [
  '?clr=orange' => 'Orange',
  '?clr=blue'   => 'Blue',
  '?clr=green'  => 'Green',
  '?clr=slate'  => 'Slate',
  '?clr=gold'   => 'Gold',
  '?clr=silver' => 'Silver',
];
$alinkClrs = '<nav class="inline"> <ul id="colours">';
  foreach($aClrs as $key => $clr) :
    $alinkClrs .= "
      <li title='Built On Giants Shoulders'> 
        <a href='$key'> $clr </a>
      </li>  
    ";
  endforeach;  
$alinkClrs .= '</ul></nav>';

