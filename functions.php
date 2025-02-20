<?php
// leggo il file
$json_albums = file_get_contents("./albums.json");

// decodifico
$array_albums = json_decode($json_albums, true);
