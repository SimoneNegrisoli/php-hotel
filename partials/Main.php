<?php include __DIR__ . "../../Model/db.php"; ?>


<main>
    <?php
    foreach ($hotels as $hotel) {
        echo '<div>' . $hotel['name'] . '' . $hotel['description'] . '' . $hotel['parking'] . '' . $hotel['vote'] . '' . $hotel['distance_to_center'] . '</div>';
    }
    ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) { ?>
                <tr>
                    <td scope="row">
                        <?php echo $hotel['name'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['description'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['parking'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['vote'] ?>
                    </td>
                    <td>
                        <?php echo $hotel['distance_to_center'] ?>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>

</main>