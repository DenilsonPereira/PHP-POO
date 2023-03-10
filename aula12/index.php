<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo (parte 1)</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';

            $m = new Mamifero();
            $m->alimentar();
            $m->setIdade(15);
            $m->setPeso(40.2);
            $m->setMembros(50);
            print_r($m);
            
            $c = new Canguru();
            $c->locomover();
            print_r($c);

            $a = new Ave();
            $a->setCorPena("Azul");
            $a->locomover();
            print_r($a);
        ?>
    </pre>
</body>
</html>