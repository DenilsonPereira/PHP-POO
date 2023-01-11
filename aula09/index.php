<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício prático POO em PHP</title>
</head>
<body>
    <?php
        require_once 'pessoa.php';
        require_once 'livro.php';

        $p[0] = new Pessoa("Carlos", 35, "M");
        $p[1] = new Pessoa("Maria", 21, "F");

        $l[0] = new Livro("Caverna do Império", "George Claiton", 489, $p[1]);
        $l[1] = new Livro("Coruja do Mar", "Ana Rodriguez", 120, $p[0]);

        $l[1]->abrir();
        $l[1]->avancarPag();
        $l[1]->detalhes();
        $l[0]->detalhes();
        
    ?>
</body>
</html>