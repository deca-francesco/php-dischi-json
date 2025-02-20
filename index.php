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
        <div class="container">
            <h1>PHP Dischi METAL 🤘</h1>
        </div>
    </header>
    <main>
        <div class="container mt-5 mb-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-3">

                <?php foreach ($array_albums as $album) {
                    echo '<div class="col">';
                    echo '<div class="card bg-black text-light p-3 h-100">';
                    echo '<img src="' . $album['cover'] . '" alt="..."  />';
                    echo '<h4 class="card-text mt-2 mb-4">' . $album['titolo'] . '</h4>';
                    echo '<span class="card-text">' .  $album['artista'] . '</span>';
                    echo '<span class="card-text">' .  $album['anno'] . '</span>';
                    echo '<span class="card-text">' .  $album['genere'] . '</span>';
                    echo '</div>';
                    echo '</div>';
                }

                ?>



            </div>
    </main>
    <footer>

    </footer>
</body>

</html>