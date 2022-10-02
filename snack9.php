<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $pomodori = [
        'cuore di bue' =>[
            'varieta' => 'pomodoris',
            'peso' => 3,
            'lunghezza in cm' => 23
        ],
        'cuore di bue' =>[
            'varieta' => 'rosso',
            'peso' => 2,
            'lunghezza in cm' => 10
        ],
        'cuore di bue' =>[
            'varieta' => 'blu',
            'peso' => 8,
            'lunghezza in cm' => 4
        ],
        'cuore di bue' =>[
            'varieta' => 'gallo',
            'peso' => 5,
            'lunghezza in cm' => 13
        ],
    ];
    

   $pesoTotale = 0;
   foreach($pomodori as $pomodoro){
    $pesoTotale += $pomodoro['peso'];
   }
   echo $pesoTotale;
    
    
    
    ?>
</body>
</html>