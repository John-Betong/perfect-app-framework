<?php declare(strict_types=1);

$title = 'RTFM - Version: 002';
$css   = 'rtfm.css';
require VIEWS .'/incs/doctype.php';

?>
<body>
<?php require VIEWS .'/incs/header.php'; ?>

<main class="grid">
  <div id="lft"> 
    <?php require VIEWS .'/incs/side-rtfm.php'; ?>
  </div>

  <div id="location"> 
    <?php require 'assets/docs/blurb.php'; ?>
  </div>
</main>
 
<?php require VIEWS .'/incs/footer-side.php'; ?> 
<?php require VIEWS .'/incs/footer.php'; ?>

<script src="assets/js/ajax.js"> </script>

</body>
</html>

