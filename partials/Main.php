<?php include __DIR__ . "../../Model/db.php"; ?>


<main>
    <?php
    foreach ($hotels as $hotel) {
        echo '<div>' . $hotel['name'] . '' . $hotel['description'] . '' . $hotel['parking'] . '' . $hotel['vote'] . '' . $hotel['distance_to_center'] . '</div>';
    }

    ?>

</main>