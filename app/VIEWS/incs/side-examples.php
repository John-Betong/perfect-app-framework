<?php declare(strict_types=1);

$aLinks = <<< ____EOT
      \n
    <section class="faq">
      <input type="radio" id="radio1" name="radio">
      <label class="faq-label" for="radio1">
        Example-001
      </label>
      <h4 class="faq-content">
         <button onclick="test('example.php')">
            Blurb
         </button>
      </h4>
      \n
    </section>

    <section class="faq">
      <input type="radio" id="radio2" name="radio">
      <label class="faq-label" for="radio2">
        Example-002:
      </label>

      <h4 class="faq-content">
         <button onclick="test('example.php')">
            Example-003
         </button>
      </h4>
      \n

      <h4 class="faq-content">
         <button onclick=:"test('example.php')">
            Example-004
         </button>
      </h4>
      \n
      <h4 class="faq-content">
         <button onclick="test('example.php')">
            Example-005
         </button>
       </h4>
      \n
      <h4 class="faq-content">
         <button onclick=test('example.php');>
            Example-006
         </button>
       </h4>
      \n
      <h4 class="faq-content">
         <button onclick=test('example.php');>
            Example-007
         </button>
       </h4>
      \n
      <h4 class="faq-content">
         <button onclick=test('example.php');>
            Example-008
         </button>
       </h4>
      \n
      <h4 class="faq-content">
         <button onclick=test('example.php');>
            Example-009
         </button>
       </h4>
      \n
      <h4 class="faq-content">
         <button onclick=test('example.php');>
            Example-010
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
   $tmp .= side_single($cnt++, $key, $item);
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
         <button onclick=test($url);>
            $url
         </button>
       </h4>
    </section>
____EOT;

}//

