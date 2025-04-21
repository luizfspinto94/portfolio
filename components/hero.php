<?php 
    $imagemPerfil = "assets/image/perfil.png";
    $altImagem = "Imagem de perfil. Homem sorrindo de barbar e óculos, no fundo da imagem tem arvore e parede vermelha.";
?>

<section class="flex gap-x-3 mt-24">
    <div class="w-2/3 space-y-6">
        <h1 class="text-4xl font-bold">Olá, meu nome é Luiz Felipe!</h1>
        <p class="text-lg leading-8 text-gray-300">
            Sou <strong>Desenvolvedor Web</strong> e estou em busca de evoluir minha carreira no mundo da <strong>programação</strong>. Estou estudando e trabalhando com o <strong>ecossistema PHP, junto com as tecnologias HTML, CSS e Javascript</strong> aplicando aquilo que tenho aprendido em projetos de <strong>estudo e também para portfólio</strong>.
        </p>
        <div>
            <a class="py-3 px-2 bg-sky-600 font-semibold rounded-md hover:bg-sky-500" href="#">Me chama pra conversar sobre seu projeto</a>
        </div>
    </div>
    <div class="flex justify-center items-center w-1/3">
        <img class="-mt-6" src="<?= $imagemPerfil; ?>" alt="<?= $altImagem; ?>">
    </div>
</section>