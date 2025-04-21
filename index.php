<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
</head>

<body>
    <?php
    $nome = "Luiz Felipe";
    $saudacao = "Seja bem vindo ao portfólio do " . $nome;
    $titulo = $saudacao;
    $subtitulo = "Aprendendo a programar em PHP";
    $ano = 2025;

    $projeto = "Portólio";
    $descricao = "Projeto desenvolvido e escrito em HTML e PHP";
    $dataProjeto = "2025-04-20";
    $finalizado = false; //true ou false


    $projetos = [
        [
            "projeto" => "Portólio",
            "descricao" => "Projeto desenvolvido e escrito em HTML e PHP",
            "dataProjeto" => "2025-04-20",
            "ano" => 2024,
            "finalizado" => false
        ],
        [
            "projeto" => "Lista de Tarefas",
            "descricao" => "Projeto desenvolvido e HTML",
            "dataProjeto" => "2023-04-21",
            "ano" => 2021,
            "finalizado" => false
        ],
        [
            "projeto" => "Gerenciador de Livros",
            "descricao" => "Projeto desenvolvido e HTML",
            "dataProjeto" => "2023-04-21",
            "ano" => 2021,
            "finalizado" => true
        ],
        [
            "projeto" => "Contador de Jobs",
            "descricao" => "Projeto desenvolvido PHP e MySQL",
            "dataProjeto" => "2020-04-21",
            "ano" => 2024,
            "finalizado" => true
        ],
        [
            "projeto" => "Site Aurora",
            "descricao" => "Projeto desenvolvido com HTML, CSS",
            "dataProjeto" => "2023-04-21",
            "ano" => 2021,
            "finalizado" => true
        ],
        [
            "projeto" => "Contas a pagar",
            "descricao" => "Projeto desenvolvido com PHP",
            "dataProjeto" => "2023-04-21",
            "ano" => 2021,
            "finalizado" => true
        ]
    ];

    function verificarFinalizado($projeto)
    {
        if ($projeto["finalizado"]) {
            return "<span>Projeto Finalizado ✅</span>";
        }
        return "<span>Projeto não finalizado ⛔️</span>";
    }

    $projetosFiltrados = array_filter($projetos, function ($projeto) {
        return $projeto["ano"] >= 2023;
    });
    ?>

    <div>
        <h1>
            <?= $titulo; ?>
        </h1>
    </div>

    <hr>

    <?php foreach ($projetosFiltrados as $projeto): ?>
        <div
            <?php if (($projeto["ano"] - 2021) > 2): ?>
            style="background-color:rgba(247, 138, 121, 0.79); color:rgb(32, 32, 32)"
            <?php endif; ?>>
            <h2><?= $projeto["projeto"]; ?></h2>
            <h3><?= $projeto["ano"]; ?></h3>
            <div>
                <?= verificarFinalizado($projeto); ?>
            </div>
            <hr>
        </div>
    <?php endforeach; ?>
</body>

</html>