<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Portfólio</title>
    <style>
        html,
        body {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-slate-900 text-white">
    <?php include("components/header.php"); ?>
    <main class="mx-auto max-w-screen-lg py-6 px-8">
        <?php include("components/hero.php"); ?>
        <?php include("components/projetos.php"); ?>
    </main>
    <footer class="mx-auto max-w-screen-lg py-6 px-8 mt-32">
        <div class="border-gray-600 border-t py-3 text-sm text-gray-300">
            &copy;copyright <?= date("Y"); ?>. Desenvolvido por Luiz Felipe
        </div>
    </footer>
</body>

</html>