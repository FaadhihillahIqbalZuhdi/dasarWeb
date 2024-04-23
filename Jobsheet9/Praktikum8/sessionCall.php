<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "Favorit color is " . $_SESSION["favcolor"] . ".<br>";
            echo "Favorit animal is " . $_SESSION["favanimal"] . ".";
        ?>
    </body>
</html>