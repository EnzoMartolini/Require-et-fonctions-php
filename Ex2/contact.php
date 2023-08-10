<?php require 'header.php' ?>
<?php require 'fonction.php' ?>

<h2> Horraires d'ouvertures : </h2>

<form action="" method="GET" >
    <label for="jour"> Choisi un jour </label>

    <select id="formulaire_crenaux" name="jour">
    <?= formulaire($crenaux) ?>
    </select>

    <input type="number" value="Rentrez l'heure desirée" name ="heure">
    <button type="submit">Voir si le magasin est ouvert</button> 
</form>

<ul>
    <?= CRENAUX($crenaux);
        isOpen($crenaux);
    ?>
</ul>

<h1>Nous contacter</h1>

<p>Telephone : 0606060606</p>
<p>Email : exemple@mail.fr</p>
<?php require 'footer.php' ?>