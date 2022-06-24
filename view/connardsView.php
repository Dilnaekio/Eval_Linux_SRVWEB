<?php
ob_start();
?>

<section class="container d-flex">

    <?php
    foreach ($connards as $connard) {
    ?>
        <article class="card" style="width: 18rem;">
            <figure>
                <img src="<?= $pathFile ?><?= $connard->getImg(); ?>" class="card-img-top" alt="<?= $connard->getName() ?>">
            </figure>

            <div class="card-body">
                <h3 class="card-title"><?= $connard->getName(); ?></h3>
                <p class="card-text">Rang : <?= $connard->getRanking(); ?></p>
                <a href="<?= URL ?>connards/afficher/<?= $connard->getId(); ?>" class="btn btn-primary">Voir la page de ce c*nnard</a>

                <form action="<?= URL ?>connards/supprimer/<?= $connard->getId(); ?>" method="post" onsubmit="confirm('Voulez-vous vraiment supprimer ce connard ?')">
                    <input type="submit" value="Supprimer" class="btn btn-danger">
                </form>
            </div>
        </article>

    <?php } ?>
</section>

<a href="<?= URL ?>connards/ajouter" class="btn btn-success d-block">Ajouter un connard</a>

<?php $title = "La galerie des connards !";
$content = ob_get_clean();
require_once "view/template.php";
