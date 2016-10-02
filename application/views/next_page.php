<?php include_once('header.php'); ?>
    <h1>Hello!</h1>
    <?php if (isset($answer)) { ?>
    <h3>The answer is <?= $answer ?></h3>
    <?php } else { ?>
    <h3>Try to use the add_numbers method (2 params)</h3>
    <?php } ?>
<?php include_once('footer.php'); ?>