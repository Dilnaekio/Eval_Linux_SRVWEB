<?php
ob_start();
$title = "Lequel est deux est le plus gros c*nnard ?";
?>

<section>
    <article class="card" style="width: 18rem;">
        <figure>
            <img src="<?= $pathFile . $versus[0]->getImg(); ?>" class="card-img-top" alt="<?= $versus[0]->getName(); ?>">
        </figure>

        <div class="card-body">
            <h5 class="card-title"><?= $versus[0]->getName(); ?></h5>
            <p class="card-text"><?= $versus[0]->getRanking(); ?></p>
            <a href="<?=URL?>vote/<?= $versus[0]->getId(); ?>" class="btn btn-primary">Voter</a>
        </div>
    </article>

    <article class="card" style="width: 18rem;">
        <figure>
            <img src="<?= $pathFile . $versus[1]->getImg(); ?>" class="card-img-top" alt="<?= $versus[1]->getName(); ?>">
        </figure>

        <div class="card-body">
            <h5 class="card-title"><?= $versus[1]->getName(); ?></h5>
            <p class="card-text"><?= $versus[1]->getRanking(); ?></p>
            <a href="<?=URL?>vote/<?= $versus[1]->getId(); ?>" class="btn btn-primary">Voter</a>
        </div>
    </article>

</section>

<?php
$content = ob_get_clean();
require_once "view/template.php";
