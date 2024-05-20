<?php

$query = '';
$nombre = '';
$significado = '';
$Query = $conn->query("SELECT nombre, significado FROM energia WHERE id=".$energia.";");
if ($Query) {
    $row = $Query->fetch_assoc();
    if ($row) {
        $nombre = $row['nombre'];
        $significado = $row['significado'];
    }
}
return ['nombre' => $nombre, 'significado' => $significado];

?>