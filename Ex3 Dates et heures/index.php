<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'fonction.php';
    horaires($crenaux);
    isOpen($crenaux)
    ?>

    <form method='GET' action=''>

        <label value='jour'>Choisissez un jour</label>
        <select name="jour" id="jour">
            <?php jour($crenaux)?>
        </select>

        <label value="heure">Choisissez une heure</label>
        <input name='heure' type='number'>

        <button type='submit'>Submit</button>

        <?php disponibilité($crenaux) ?>

    </form>
</body>
</html>