<?php

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

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotels</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                foreach ($hotels as $item) {   ?>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-text">
                                <?php echo $item['name'] ?> 
                                </p>
                                <p class="card-text">
                                <?php echo $item['description'] ?> 
                                </p>
                                <p class="card-text">
                                <?php echo $item['parking'] ?> 
                                </p>
                                <p class="card-text">
                                <?php echo $item['vote'] ?> 
                                </p>
                                <p class="card-text">
                                <?php echo $item['distance_to_center'] ?> 
                                </p>
                            </div>
                    </div>
                </div>
                <?php   }
                ?>
              
                
                
                
                 
        </div>
    </div>
</body>
</html>