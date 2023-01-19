<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança (parte 1)</title>
</head>
<body>
    <pre>
        <?php
            require_once 'pessoa.php';
            require_once 'professor.php';
            require_once 'aluno.php';
            require_once 'funcionario.php';
            //Programa Principal
            $p[0] = new Pessoa();
            $p[1] = new Aluno();
            $p[2] = new Professor();
            $p[3] = new Funcionario();

            $p[0]->setNome("Ana");
            $p[1]->setNome("Renata");
            $p[2]->setNome("Mario");
            $p[3]->setNome("Pedro");

            $p[1]->setCurso("Informática");
            $p[2]->setSalario(2500.75);
            $p[3]->setSetor("Estoque");

            print_r($p[0]);
            print_r($p[1]);
            print_r($p[2]);
            print_r($p[3]);
        ?>
    </pre>
</body>
</html>