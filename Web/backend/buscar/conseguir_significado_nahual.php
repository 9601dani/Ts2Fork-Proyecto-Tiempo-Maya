<?php

    $Query = $conn->query("SELECT significado FROM nahual WHERE nombre=\"".$nahual."\" ;");
    $row = mysqli_fetch_assoc($Query);
    $query = $row['significado'];
    return $query;
?>