<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <?php
                $database = [
                    [
                        'title' => 'New Jersey',
                        'author' => 'Bon Jovi',
                        'year' => 1988,
                        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
                    ],
                    [
                        'title' => 'Live at Wembley 86',
                        'author' => 'Queen',
                        'year' => 1992,
                        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
                    ],
                    [
                        'title' => 'Ten\'s Summoner\'s Tales',
                        'author' => 'Sting',
                        'year' => 1993,
                        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
                    ],
                    [
                        'title' => 'Steve Gadd band',
                        'author' => 'Steve Gadd Band',
                        'year' => 2018,
                        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
                    ],
                    [
                        'title' => 'Brave new World',
                        'author' => 'Iron Maiden',
                        'year' => 2000,
                        'poster' => 'https://i.ebayimg.com/images/g/1GwAAOSwFytaKr7l/s-l300.jpg'
                    ],
                    [
                        'title' => 'One more car, one more rider',
                        'author' => 'Eric Clapton',
                        'year' => 2002,
                        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
                    ]
                ];

                foreach($database as $song) {
                    echo $song["title"] . "<br>";
                    echo $song["author"] . "<br>";
                    echo $song["year"] . "<br>";
                    echo "<img src=\"{$song["poster"]}\"> <br>";
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>