<?php declare(strict_types=1);

$INFO = 'https://www.makeuseof.com/how-to-make-accordion-html-css/';

$clrs  = 'https://this-is-a-test-to-see-if-it-works.anetizer.com/sp-a/jb-swatch/';

$aLinks = [
# 'index-001.php'  => 'Plain',
# 'index-002.php'  => 'CheckBox',
#  'index-003.php' => 'Radio',
#  'index-005.php' => 'all',
#  'index-006.php' => 'single',
# 'index-paul.php'=> 'Paul',
  'index.php'      => 'Home',
  'rtfm.php'       => 'RTFM',
  'examples.php'   => 'Examples',
  "$clrs"          => 'Colours',
];
$links = '<ul id="pages">';
  foreach($aLinks as $key => $page) :
    $links .= "
      <li> 
        <a href='$key'> $page </a>
      </li>  
    ";
  endforeach;  
$links .= '</ul>';
 
$aClrs = [
  '?clr=blue'   => 'Blue',
  '?clr=orange' => 'Orange',
  '?clr=green'  => 'Green',
  '?clr=slate'  => 'Slate',
//'?clr=red'    => 'Red',
//'?clr=none'   => 'None',
];
$links .= '<ul id="colours">';
  foreach($aClrs as $key => $clr) :
    $links .= "
      <li title='Built On Giants Shoulders'> 
        <a href='$key'> $clr </a>
      </li>  
    ";
  endforeach;  
$links .= '</ul>';

