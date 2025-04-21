<?php 
$projetos = [
    [
        "projeto" => "GL Marketing Digital",
        "descricao" => "Neste projeto será desenvolvido um site institucional para uma empresa de Marketing Digital, cujo o objetivo é apresentar de maneira geral quem é a empresa, sua história e os serviços oferecidos por ela.",
        "dataProjeto" => "2025-04-20",
        "ano" => 2024,
        "finalizado" => false,
        "imagem" => "",
        "tecnologia" => ["HTML", "CSS", "Javascript", "PHP"]
    ],
];

function verificarFinalizado($projeto)
{
    if ($projeto["finalizado"]) {
        return "<span>Projeto Finalizado ✅</span>";
    }
    return "<span>Projeto não finalizado ⛔️</span>";
}

$projetosFiltrados = array_filter($projetos, function ($projeto) {
    return $projeto;
});
?>

<section class="mt-48 space-y-6 py-8" id="projetos">
    <div>
        <h2 class="text-2xl font-semibold">
            Projetos
        </h2>
    </div>
    <?php foreach($projetosFiltrados as $projeto): ?>
    <div id="projeto">
        <div data-status="<?= $projeto['finalizado'] ?>" class="flex gap-x-3 bg-slate-800 p-4 rounded-md">
            <div class="w-1/3">
                <?= $projeto["imagem"]; ?>
            </div>
            <div class="w-2/3">
                <div class="flex justify-between items-center">
                    <div class="flex gap-x-2 items-center">
                        <?php if($projeto["finalizado"]): ?>
                            <h3>✅ <?= $projeto["titulo"]; ?></h3>
                            <span class="text-sm italic text-gray-400">
                                (Finalizado em <?= $projeto["ano"]; ?>)
                            </span>
                        <?php else: ?>
                            <h3>👨‍💻 <?= $projeto["titulo"]; ?></h3>
                            <span class="text-sm italic text-gray-400">
                                (Em desenvolvimento)
                            </span>
                        <?php endif; ?>
                    </div>
                    <div>
                        <?php 
                            $cor = ["red", "sky", "yellow", "indigo"];
                            foreach($projeto["tecnologia"] as $key => $value): 
                        ?>
                        <span class="mr-1 bg-<?= $cor[$key]; ?>-400 rounded-full py-1 px-4 text-sm text-<?= $cor[$key]; ?>-900">
                            <?= $value; ?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div>
                    <p class="leading-6 mt-3 text-gray-300">
                    <?= $projeto["descricao"]; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</section>