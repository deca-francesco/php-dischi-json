<?php

require_once("./functions.php");

?>


<!doctype html>
<html lang="en">

<head>
    <title>PHP Dischi JSON</title>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous" defer></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous" defer></script>
</head>

<body class="bg-dark text-light">
    <header class="bg-black py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1>PHP Dischi METAL 🤘 </h1>
            <a href="./form.php" class="btn btn-light">Aggiungi un album</a>
        </div>
    </header>
    <main>
        <div class="container mt-5 mb-5">
            <h2>Album metal di ogni genere</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3">

                <?php foreach ($array_albums as $album) { ?>
                    <div class="col">
                        <div class="card bg-black text-light p-3 h-100">
                            <img src="<?php echo $album['cover'] ?>" alt="<?php echo $album['titolo'] ?>" />
                            <h4 class="card-text mt-2 mb-4"> <?php echo $album['titolo'] ?></h4>
                            <span class="card-text"> <?php echo $album['artista'] ?></span>
                            <span class="card-text"> <?php echo $album['anno'] ?></span>
                            <span class="card-text"> <?php echo $album['genere'] ?></span>
                        </div>
                    </div>
                <?php } ?>

            </div>
    </main>
    <footer>

    </footer>
</body>

</html>