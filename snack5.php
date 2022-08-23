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
      $classe = [
         [
            'nome' => 'Gerardo',
            'cognome' => 'Maiella',
            [
                'matematica'=> 8,
                'italiano' => 5,
                'storia' => 6,
                'arte' => 9,
            ]
            ],
            [
                'nome' => 'Antonio',
                'cognome' => 'Priore',
                [
                    'matematica'=> 3,
                    'italiano' => 2,
                    'storia' => 5,
                    'arte' => 4,
                ]
            ],
            [
                'nome' => 'Roberta',
                'cognome' => 'Freci',
                [
                    'matematica'=> 4,
                    'italiano' => 9,
                    'storia' => 9,
                    'arte' => 2,
                ]
            ],
            [
                'nome' => 'Maria',
                'cognome' => 'Decia',
                [
                    'matematica'=> 9,
                    'italiano' => 3,
                    'storia' => 6,
                    'arte' => 10,
                ]
             ]
      ]
    ?>
    <p>
        <?php for ($i=0; $i <= count ($classe); $i++){ ?>
          <h4>  
            <?php
              echo $classe[$i]['nome'] . ' ' . $classe[$i]['cognome'] ;
            ?>
          </h4>
        <?php } ?>
    </p>
</body>
</html>