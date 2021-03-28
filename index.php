<!DOCTYPE html>

<head>
    <title>Temp</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/b995eb29b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
<body>

    <?php
    $heading = 'Form';

    function createButton ($name) {
      echo "<div class='center'>
              <button class='input hover blur' id=$name>$name</button>
            </div>";
    }

    require('carousel.html');
    require('products-carousel.html');
    //require('form.html');
    //require('buttons.html');
    ?>

<?php
    if ($_POST) {
        $output = $_POST["name"];
        createButton($output);
    }
 ?>


</body>

</html>
