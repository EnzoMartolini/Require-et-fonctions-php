<?php require 'header.php' ?>
<?php require 'fonction.php' ?>

<h2> Horraires d'ouvertures : </h2>
<ul>
    <?= CRENAUX($CRENAUX);
        isOpen($CRENAUX);
    ?>
</ul>

<h1>Nous contacter</h1>



<p>Telephone : 0606060606</p>
<p>Email : exemple@mail.fr</p>
<?php $currentTime = (int)date('H:i:s');
echo $currentTime; ?>
<?php require 'footer.php' ?>