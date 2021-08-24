<?php
    $nombre = filter_input(INPUT_POST, "nombre");
    $apellido = filter_input(INPUT_POST, "apellido");
    echo "Buenos días ". $nombre . " " . $apellido;
?>