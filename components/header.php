<?php
$itensMenu = [
    [
        "href" => "#projetos",
        "texto" => "Projetos"
    ],
    [
        "href" => "https://github.com/luizfspinto94",
        "texto" => "Github"
    ],
    [
        "href" => "#",
        "texto" => "LinkedIn"
    ],
];
?>

<header class="flex justify-between items-center mx-auto max-w-screen-lg py-6 px-8">
    <div class="text-xl font-bold">
        🧑🏻‍💻 Portfólio
    </div>
    <nav>
        <ul class="flex space-x-4 text-gray-300">
            <?php foreach($itensMenu as $iten): ?>
                <li>
                    <a class="hover:underline" href="<?= $iten["href"]; ?>">
                        <?= $iten["texto"]; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>