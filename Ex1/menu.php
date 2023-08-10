<?php 
    if (!function_exists('html'))

    { 
        function html (string $lien, string $titre, string $classe=''):string
        { 
                $class= "";
                if ($_SERVER['SCRIPT_NAME']===$lien)
                    { 
                    $class = $classe . ' active';
                    }

            return <<<HTML
            <li><a class="$class" href="$lien">$titre</a></li>
    HTML;

        }
    }
?>

<?= html ('/site.php', "Accueil", $class); ?>
<?= html ('/contact.php', "Contact", $class); ?>