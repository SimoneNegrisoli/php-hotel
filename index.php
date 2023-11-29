<!-- Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Copiatelo su un vostro file per usarlo nell'esercizio

Prima stampate in pagina i dati, senza preoccuparvi dello stile ed effettuate un push con questo risultato.

Solo dopo aggiungete Bootstrap e mostrate le informazioni all'interno di una tabella.

Non è necessario spezzettare l'esercizio coi partials ma se ci riuscite tanto meglio

Bonus:

1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

NOTA :mega:: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>PHP Hotel</title>
</head>

<body>
    <?php
    include __DIR__ . "/partials/Header.php";
    ?>
    <?php
    include __DIR__ . "/partials/Main.php";
    ?>
    <?php
    include __DIR__ . "/partials/Footer.php";
    ?>
</body>

</html>