<?php ob_start() ?>

<main class="container">
    <section class="container d-flex">
        <article>
            <h1>Mais quel connard ?!</h1>

            <p>Bienvenue sur mon petit site qui vous permettra d'établir un classement de connards !</p>
        </article>

        <figure><img src="<?= URL . "public/assets/images/fuck.png" ?>" alt=""></figure>
    </section>
</main>

<?php $title = "Accueil";
$content = ob_get_clean();
require_once "view/template.php";
