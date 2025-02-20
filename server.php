<?php

// prendo i valori dal form eli inserisco in un nuovo album array associativo php
// se ricarichi la pagina ti chiede la conferma reinvio modulo perché abbiamo usato POST
$nuovo_album = [
    "titolo" => $_POST["titolo"],
    "artista" => $_POST["artista"],
    "cover" => $_POST["cover"],
    "anno" => $_POST["anno"],
    "genere" => $_POST["genere"]
];

// leggiamo il file json
$json_albums = file_get_contents("./albums.json");

// convertiamo il file json in array php. Con true gli oggetti saranno convertiti in array associativi
$array_albums = json_decode($json_albums, true);

// aggiungiamo il nuovo album all'array php
$array_albums[] = $nuovo_album;

// riconvertiamo l'array php in json formattato bene con json_pretty_print
$json_albums  = json_encode($array_albums, JSON_PRETTY_PRINT);

// sovrascriviamo il file json, altrimenti mostra quello vecchio
file_put_contents("./albums.json", $json_albums);

// reindirizziamo alla index
header("Location: ./index.php");
