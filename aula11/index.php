<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança (parte 2)</title>
</head>
<body>
    <pre>
        <?php
            require_once 'pessoa.php';
            require_once 'aluno.php';
            require_once 'visitante.php';
            require_once 'bolsista.php';
            require_once 'professor.php';
            require_once 'tecnico.php';

            //Pessoa
            //$p1 = new Pessoa();

            //Visitante
            $v1 = new Visitante();
            $v1->setNome("Cleiton");
            print_r($v1);

            //Aluno
            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->pagarMensalidade();
            print_r($a1);

            //Bolsista
            $b1 = new Bolsista();
            $b1->setNome("Joãozinho");
            $b1->renovarBolsa();
            $b1->pagarMensalidade();
            print_r($b1);

            //Professor
            $p1 = new Professor();
            $p1->setNome("Ricardo");
            $p1->receberAumento();
            print_r($p1);

            //Técnico
            $t1 = new Tecnico();
            $t1->setNome("Maria");
            $t1->setRegistroProfissional(3421);
            $t1->praticar();
            print_r($t1);
        ?>
    </pre>
</body>
</html>