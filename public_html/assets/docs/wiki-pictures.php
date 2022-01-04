<?php declare(strict_types=1);

?>

  <details open>
    <summary> Wiki + Pretty Picture </summary>
    <div class="description">
      <h2>
          <a href="https://en.wikipedia.org/wiki/PHP"> 
            Wiki: PHP
          </a>  
      </h2>
      <p class="center">
        Uses PHP Native Utilities that have perfected during the last 
        <strong> TWENTY SIX </strong> years!
        <?php 
          $img  = 'assets/imgs/mvc-process.png';
          $dims = getimagesize($img)[3];
          echo '<img src="' .$img .'" ' .$dims .' alt="MVC">';
        ?>  
    </p>
    </div>
  </details>

  