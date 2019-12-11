<?php require('partials/head.php'); ?>

<?php foreach ($ingredients as $ingredient) : ?>
    <li><?= $ingredient->name; ?></li>
<?php endforeach; ?>

<form method = "POST" action="material">
    <input name="material_name">

</form>
 
<?php require('partials/footer.php'); ?>