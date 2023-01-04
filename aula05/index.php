<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Denilson</title>
</head>
<body>
    <pre>
        <?php
            require_once 'conta.php';

            $c1 = new ContaBanco;
            $c1->setNumConta(25);
            $c1->setTipo("CC");
            $c1->setDono("José");
            $c1->setSaldo(100);
            $c1->setStatus(true);

            print_r($c1);
        ?>
    </pre>
</body>
</html>