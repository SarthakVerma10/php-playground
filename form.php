<?php
    function createButton ($name) {
        echo "
            <link rel='stylesheet' href='style.css' />
            <div class='center'>
                <button class='input hover blur' id=$name>$name</button>
            </div>";
    }

    if ($_POST) {
        $output = $_POST["name"];
        createButton($output);
    }
 ?>