<?php declare(strict_types=1);

$title = 'Example go here';
$css   = 'rtfm.css';
require VIEWS .'/incs/doctype.php';

?>
<body>
<?php require VIEWS .'/incs/header.php'; ?>

<main class="grid">
  <section id="lft"> 
    <?php require VIEWS .'/incs/side-examples.php'; ?>
  </section>

  <section id="location"> 
    No left selection yet :) 
    <?php require 'assets/docs/blurb.php'; ?>
  </section>
</main>
 
<?php require VIEWS .'/incs/footer-side.php'; ?> 
<?php require VIEWS .'/incs/footer.php'; ?>

<script src="assets/js/ajax.js"> </script>

</body>
</html>

