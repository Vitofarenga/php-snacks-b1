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
    $posts = [
         '19/05/24' =>[
            'title' => 'Rocchetta',
            'author' => 'Rofrsdaa',
            'text' => 'Rrfsda'
         ],
         '13/65/84' =>[
            'title' => 'vfsd',
            'author' => 'Rfdsa',
            'text' => 'Rfrsed'
         ],
         '11/07/34' =>[
            'title' => 'Rrfds',
            'author' => 'Rocfreewdwa',
            'text' => 'Rerfewdta'
         ],
         '14/17/64' =>[
            'title' => 'Roewds',
            'author' => 'Rorfwedwa',
            'text' => 'Rocfdsaa'
         ],
         '13/05/24' =>[
            'title' => 'Rrfdesa',
            'author' => 'Rofrds',
            'text' => 'Rocfredsaa'
         ]
        ]
    ?>
    <p>
        <?php 
         foreach($posts as $date => $post){ ?>
         <?php
            echo $date;
            foreach($post as $dpost){
                echo $post['title'];
            }
         }
        
        ?>
    </p>
</body>
</html>