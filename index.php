<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
          
            require_once 'Lutador.php';
            require_once 'Luta.php';

            $l[0] = new Lutador('Pretty Boy', 'França', 31, 1.75, 58.9, 11, 3, 1);
            $l[1] = new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3);
            $l[2] = new Lutador('Snapshadow', 'EUA', 35, 1.55, 80.9, 12, 2, 1);
            $l[3] = new Lutador('Dead Code', 'Austrália', 28, 1.93, 81.6, 13, 0, 2);
            $l[4] = new Lutador('UFOCobol', 'Brasil', 38, 1.73, 119.6, 5, 3, 2);
            $l[5] = new Lutador('Nerdaart', 'Austrália', 30, 1.81, 105.9, 12, 2, 4);
        
            $uec01 = new Luta();
            $uec01->marcarLuta($l[0], $l[1]);
            $uec01->lutar();
            $l[0]->status();
            $l[1]->status();

        ?>  
    </pre>
</body>
</html>