<?php
// Stampare tutti i nostri hotel con tutti i dati disponibili.
// Bonus: 1
// Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
// Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

var_dump($_GET);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Hotels</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: lightcoral;
        }

        .row {
            height: max-content;
            padding-top: 3rem;
            justify-content: center;
        }

        .card {
            aspect-ratio: 5/2;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="index.php" method="GET">
            <select name="isParking">
                <option value="" selected disabled>All</option>
                <option value="with_parking">Con parcheggio</option>
                <option value="without_parking">Senza parcheggio</option>
            </select>
        </form>

        <div class="row row-cols-2 g-4">
            <?php foreach ($hotels as $hotel) : ?>
                <div class="col">
                    <div class="card p-3">
                        <div class="name">
                            <h2>
                                <?php echo $hotel['name'] ?>
                            </h2>
                        </div>
                        <div class="description">
                            <?php echo $hotel['description'] ?>
                        </div>
                        <div class="parking">
                            <?php if ($hotel['parking']) {
                                echo 'Parcheggio: Disponibile';
                            } else {
                                echo 'Parcheggio: Non disponibile';
                            } ?>
                        </div>
                        <div class="vote">
                            Voto:
                            <?php echo $hotel['vote'] ?>
                        </div>
                        <div class="distance">
                            Distanza dal centro:
                            <?php echo $hotel['distance_to_center'] ?>
                            km
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>