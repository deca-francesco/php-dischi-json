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
            <a href="./index.php" class="btn btn-light">Torna indietro</a>
        </div>
    </header>
    <main>
        <div class="container mt-5 mb-5">
            <h2>Inserisci un nuovo album</h2>
            <form action="./server.php" method="POST" class="card p-3">
                <label for="titolo">Inserisci il titolo</label>
                <input type="text" class="form-control mb-3" name="titolo" id="titolo" placeholder="Titolo">
                <label for="artista">Inserisci il nome dell'artista</label>
                <input type="text" class="form-control mb-3" name="artista" id="artista" placeholder="Artista">
                <label for="cover">Inserisci l'url della cover</label>
                <input type="text" class="form-control mb-3" name="cover" id="cover" placeholder="Cover">
                <label for="anno">Inserisci l'anno di uscita</label>
                <input type="number" class="form-control mb-3" name="anno" id="anno" placeholder="Anno">
                <label for="genere">Inserisci il genere</label>
                <input type="text" class="form-control mb-3" name="genere" id="genere" placeholder="Genere">
                <div>
                    <button class="btn btn-primary">Inserisci</button>
                </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>