<?php
    $nombre = filter_input(INPUT_GET, "nombre");
    $apellido = filter_input(INPUT_GET, "apellido");
    echo "Buenos días ". $nombre . " " . $apellido;
?>