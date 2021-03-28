<?php
    if ($_POST) {
    $output = $_POST["name"];

    echo "<h1 id=$output>$output</h1>";
    // echo var_dump($output);
    }
 ?>