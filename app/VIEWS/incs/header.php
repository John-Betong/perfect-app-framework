<?php declare(strict_types=1);

?>
<header>  
  <nav> 
    <?php require VIEWS .'/incs/navigation.php'; echo $links ?>
  </nav>
  <h1> <?= $title ?> </h1>
</header>
<?php if(0) : ?>
  <pre> <?= $cssVars ?> </pre>
<?php endif;
