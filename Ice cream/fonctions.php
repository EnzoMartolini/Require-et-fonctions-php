<?php function titre($liste, string $name){
        echo <<<HTML
        <div class=titre>
        <h1>Choisissez votre $name</h1>
        </div>
HTML;
} ?>

<?php
function liste(array $data, string $name, string $type) {
    $liste='';
    foreach (array_keys($data) as $value) {
        $prix = $data[$value] . ' $';
        $liste.= <<<HTML
            <label>
                <input type="$type" name="{$name}[]" value="$value">
                <div class=img>
                <img src="./image/$value.png" alt="$value" width=100vh>
                <div class="superposition">
                <p> $prix </p>
                </div>
                </div>
                <p>$value</p>
            </label>
HTML;
    }
    return $liste;
}
?>

<?php function message(string $name, array $base) {
    if (isset($_GET[$name])){
        $message= $name . ' : ';
        foreach ($_GET[$name] as $value)
        {
        $message .= $value . ' ';
        }
        return $message;
    }
}
?>

<?php function prix(string $name, array $base) {
    if (isset($_GET[$name])){
        $prix=0;
        foreach ($_GET[$name] as $value)
        {
        $prix += $base[$value];
        }
        return $prix;
    }
}
