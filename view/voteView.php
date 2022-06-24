<?php
ob_start();
$title = "Lequel est deux est le plus gros c*nnard ?";
?>

<section>
    <article class="card" style="width: 18rem;">
        <figure>
            <img src="<?= $pathFile . $firstConnard->getImg(); ?>" class="card-img-top" alt="<?= $firstConnard->getName(); ?>">
        </figure>

        <div class="card-body">
            <h5 class="card-title"><?= $firstConnard->getName(); ?></h5>
            <p class="card-text"><?= $firstConnard->getRanking(); ?></p>
            <a href="<?=URL?>vote/<?= $firstConnard->getId(); ?>" class="btn btn-primary">Voter</a>
        </div>
    </article>

    <article class="card" style="width: 18rem;">
        <figure>
            <img src="<?= $pathFile . $secondConnard->getImg(); ?>" class="card-img-top" alt="<?= $secondConnard->getName(); ?>">
        </figure>

        <div class="card-body">
            <h5 class="card-title"><?= $secondConnard->getName(); ?></h5>
            <p class="card-text"><?= $secondConnard->getRanking(); ?></p>
            <a href="<?=URL?>vote/<?= $secondConnard->getId(); ?>" class="btn btn-primary">Voter</a>
        </div>
    </article>

</section>

<?php
$content = ob_get_clean();
require_once "view/template.php";
