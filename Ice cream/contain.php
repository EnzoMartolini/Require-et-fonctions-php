<?php require 'fonctions.php' ?>

<?php 
    $liste_parfums=(liste($parfums, 'parfum', 'checkbox'));
    $liste_recipients=(liste($recipients, 'recipient', 'radio'));
    $liste_supplements=(liste($supplements, 'supplement', 'checkbox')); 
?>

    <form action="index.php#prix">
        <div id="container_choice">
            <div class=container_parfum>
            <?= titre($liste_parfums, 'parfum')?>
            <div class=parfum_choice> <?=$liste_parfums?> </div>
            </div>

            <div class=container_recipient>
            <?= titre($liste_recipients, 'recipient')?>
            <div class=recipient_choice> <?=$liste_recipients?> </div>
            </div>

            <div class=container_supplements>
            <?= titre($liste_supplements, 'supplément')?>
            <div class=supplement_choice><?=$liste_supplements?></div>
            </div>

            <div class=btn>
            <button type="submit" id="btn">Soumettre</button>
            </div>
        </div>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
    echo <<<HTML
    <h3 class=msg> Vous avez choisis : </h3>
    HTML;
    }?>

<p class=msg><?= message('parfum', $parfums) ?></p>
<p class=msg><?= message('recipient', $recipients) ?></p>
<p class=msg><?= message('supplement', $supplements) ?></p>

<?php $prix=0;?>
<?php $prix+=prix('parfum', $parfums) ?>
<?php $prix+=prix('recipient', $recipients) ?>
<?php $prix+=prix('supplement', $supplements) ?>
<?php $message = "Pour un total de " . $prix . " $"?>
<?php if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
    echo <<<HTML
    <h3 id="prix" class=msg> $message </h3>
HTML;
}?>

