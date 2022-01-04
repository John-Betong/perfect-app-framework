<?php declare(strict_types=1);

$title  = 'Perfect App Framework';
$css    = 'style.css';

require VIEWS .'/incs/doctype.php';

$aDocs = [
  'blurb',
  'features',
  'initial-installation',
  'requirements',
  'programming',
  'spare-001',
  'spare-002',
  'spare-003',
];

?>
 
<body>
<?php require VIEWS .'/incs/header.php'; ?>

<?php if(0 && LOCALHOST) : echo tbl(QQQ); endif; ?>
    
<main>
  <?php 
    foreach($aDocs as $key => $doc) :
      require 'assets/docs/' .$doc .'.php';
     endforeach;
   ?>   

  <details>
      <summary> Source code:  </summary>
      <div class="description">
        <h2> &nbsp; </h2>
        <dl>
          <dt> XXX </dt>
          <dd>
            <?= highlight_file(__FILE__, TRUE); ?> 
          </dd>
        </dl>    
      </div>
    </details>   
</main>

<?php require VIEWS .'/incs/footer-side.php'; ?>
<?php require VIEWS .'/incs/footer.php'; ?>

</body>
</html>