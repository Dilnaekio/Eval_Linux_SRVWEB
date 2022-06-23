<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="description" content="Un site populaire qui désignera quel est le connard ultime">
    <meta name="viewport" content="witdh=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css">

    <title>Eval SRVWEB Linux</title>

</head>

<body>
    <?php require "view/header.php"; 
    
    // Si une variabe sesion alert est définie => affiche une boite de dialogue colorée
    if (isset($_SESSION["alert"])) { ?>
        <section class="alert alert-<?= $_SESSION['alert']['type'] ?>" role="alert">
            <p class="text-align"><?= $_SESSION['alert']['message']; ?></p>
        </section>
    <?php unset($_SESSION["alert"]);
    }
    ?>

    <main>
        <?php
        // $content est la variable contenant tout le corps HTML des autres views
        echo $content;
        ?>
    </main>

    <?php require "view/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>