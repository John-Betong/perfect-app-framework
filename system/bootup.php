<?php declare(strict_types=1);

setConstants();

# ========================================
function vd($val) : string
{
  $style = 'width:88%; margin:2em auto; background-color: LIME; color:#000;';

  $result = '<pre style="' .$style .'">$val ==> ';
    $result .= print_r($val, TRUE);
  $result .= '</pre>';  

  return $result;
}

# ========================================
function vdd($val) : string
{
  $style = 'width:88%; margin:2em auto; background-color: AQUA; color:#000;';

  $result = '<pre style="' .$style .'">$val ==> ';
    $result .= print_r($val, TRUE);
  $result .= '</pre>';  

  return $result;
}

# ========================================
function tbl($aVal=[], $title = '') : string
{
  $style = 'width: 88%; margin: 2em auto; padding: 0.88em;
            background-color: SNOW; color: #345; 
            border: solid 1px #ccc;
            font-size: smaller;
            ';

  $result = '';          
# $result  = '<h2: <b>' .$title .'</b>';
  $result .= '<table style="' .$style .'">';
    foreach($aVal as $key => $item) :
      $result .= <<< ______EOT
        <tr>
          <td> {$key} &nbsp; &nbsp; </td>
          <td> {$item} </td>
        </tr>  
______EOT;
    endforeach;
  $result .= '</table>';  

  return $result;
}

# ================================================
function setConstants()
{
# dynamic BaseUrl - https://forum.codeigniter.com/thread-74649.html  
  $tmpUrl = (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) 
      && 
      ('on' == $_SERVER['HTTPS']) 
      ? "https://" 
      : "http://") .$_SERVER['HTTP_HOST']
      ;
  $tmpUrl .= str_replace
  (
    basename($_SERVER['SCRIPT_NAME']), 
    '', 
    $_SERVER['SCRIPT_NAME']
  );
  defined('BASEURL') ?: define('BASEURL', $tmpUrl); # app/Paths.php, etc

  define('BASEPATH'   , getcwd());
  define('APP'        , '../app' );
  define('CONTROLLER' , APP .'/CONTROLLERS');
  define('MODELS'      ,APP .'/MODELS');
  define('VIEWS'      , APP .'/VIEWS');
  define('SYSTEM'     , '../system');
  define('TEMP'       , '../TEMP');
$tmp = [
  'BASEURL'     => BASEURL, 
  'BASEPATH'    => BASEPATH, 
  'APP'         => APP, 
  'CONTROLLER'  => CONTROLLER, 
  'MODELS'      => MODELS, 
  'VIEWS'       => VIEWS, 
  'SYSTEM'      => SYSTEM, 
  'TEMP'        => TEMP, 
];
define('QQQ', $tmp);

  defined('LOG_FILE')
  || 
  define('LOG_FILE',  '../TEMP/logs/log-' .date('Y-m-d') .'.php');
  define('LOCALHOST', 'localhost'===$_SERVER['SERVER_NAME']);

# CLEANER - only shows last error logs
  if(LOCALHOST && file_exists(LOG_FILE)):
    $ok = unlink(LOG_FILE);
  endif; 
}
