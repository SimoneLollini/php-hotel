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

//var_dump($hotels);


// foreach ($hotels as $hotel) {
//     echo $hotel['name'];
//     echo '<br>';
//     echo $hotel['description'];
//     echo '<br>';
//     if ($hotel['parking']) {
//         echo 'Parcheggio: sì';
//     } else {
//         echo 'Parcheggio: no';
//     }
//     echo '<br>';
//     echo $hotel['vote'];
//     echo '<br>';
//     echo 'Distanza dal centro: ' . $hotel['distance_to_center'];
//     echo '<br>';
// }


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
        .card {
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row row-cols-2 g-4">
            <?php foreach ($hotels as $hotel) : ?>
                <div class="col">
                    <div class="card p-3">
                        <div class="name">
                            <?php echo $hotel['name'] ?>
                        </div>
                        <div class="description">
                            <?php echo $hotel['description'] ?>
                        </div>
                        <div class="parking">
                            <?php echo $hotel['parking'] ?>
                        </div>
                        <div class="vote">
                            <?php echo $hotel['vote'] ?>
                        </div>
                        <div class="distance">
                            <?php echo $hotel['distance_to_center'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>