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
                require_once __DIR__ . "/database.php";
                
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