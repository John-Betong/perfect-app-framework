<?php declare(strict_types=1);

$aLinks = <<< ____EOT
      \n
    <section class="faq">
      <input type="radio" id="radio1" name="radio">
      <label class="faq-label" for="radio1">
        Blurb
      </label>
      <h4 class="faq-content">
         <button onclick="test('blurb.php')">
            Blurb
         </button>
      </h4>
      \n
      <h4 class="faq-content">
         <button onclick="test('tree.php')">
            File Tree View 
         </button>
      </h4>
    </section>

    <section class="faq">
      <input type="radio" id="radio2" name="radio">
      <label class="faq-label" for="radio2">
        Features:
      </label>

      <h4 class="faq-content">
         <button onclick="test('features.php')">
            Features
         </button>
      </h4>
      
      \n
      <h4 class="faq-content">
         <button onclick="test('initial-installation.php')">
            Initial installation
         </button>
       </h4>

      \n
      <h4 class="faq-content">
         <button onclick="test('introducing.php')">
            Introducing
         </button>
       </h4>
      \n
      <h4 class="faq-content">
         <button onclick="test('programming.php')">
            Programming
         </button>
       </h4>
      \n
      <h4 class="faq-content">
         <button onclick="test('requirements.php')">
            Requirements
         </button>
       </h4>
      \n
      <h4 class="faq-content">
         <button onclick="test('spare-001.php')">
            Stuff: 004
         </button>
       </h4>
      \n
      <h4 class="faq-content">
         <button onclick="test('spare-002.php')">
            Stuff: 001
         </button>
       </h4>
    </section>
____EOT;

$links = [
   '001' => 'Requirements',
   '002' => 'Installation',
   '003' => 'Models',
   '004' => 'Views',
   '005' => 'Controllers',
   '006' => 'Controller-001',
   '007' => 'Controllers',
   '008' => 'Controllers',
   '009' => 'Controllers',
   '010' => 'Controller-010',
];

# echo '<pre>'; print_r($links); die;
$cnt = 10;
$tmp = '';
foreach($links as $key => $item) :
   # echo '<br>'. $cnt++ . ' : ' .$key . ' ==> ' .$item;
   # echo side_single($cnt++, $key, $item);
  # $tmp .= side_single($cnt++, $key, $item);
   $tmp .= side_single($cnt++, 'spare-001.php', $item);
endforeach;
# die;

echo '', 
   $tmp = $aLinks . $tmp;

//====================================================
function side_single($cnt, $url, $page) : string 
{
   return $result = <<< ____EOT
      \n
    <section class="faq">
      <input type="radio" id="radio{$cnt}" name="radio">
      <label class="faq-label" for="radio{$cnt}">
        $page
      </label>
      <h4 class="faq-content">
         <button onclick="test('spare-001.php')">
            $url
         </button>
       </h4>
    </section>
____EOT;

}//

