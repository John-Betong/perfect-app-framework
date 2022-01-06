<?php declare(strict_types=1);

?>
<header>  
  <nav> 
    <?php require VIEWS .'/incs/navigation.php'; echo $links ?>
  </nav>
  <h1> <?= $title ?> </h1>
</header>
<?=  $alinkClrs ?> 


<?php if(0) : ?>
  <pre style="background-color: lime; color:#000;"> 
    <?= $_SESSION['clr'] ?>
    <?= print_r($_GET) ?>
    <?= $cssVars ?> 
  </pre>
<?php endif;
