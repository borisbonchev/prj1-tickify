<?php
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php

        include('../AddEvent/connection.php');
        $id = $_GET['id'];
        $sql = 'SELECT id, event_name, description, e_date, e_location, price, img_id FROM "event" WHERE id = '.$id.';';
        // $prepare = $conn->prepare($sql);
        // $statement->bindValue(':id', $id, PDO::PARAM_INT);
        // $prepare->execute();
        $prepare = $conn->query($sql);
        $events = $prepare->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tickify | Event Description</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="../reusable_content//navigation_bar/navigation.css">
        <link rel="stylesheet" href="../reusable_content/footer/footer.css">
        <link rel="stylesheet" href="eventdescription.css">
    </head>

    <body>
        <main>
            <?php include('../reusable_content/navigation_bar/navigation_bar.php') ?>
            <div class="search_bar">
                <input type="text" placeholder="Search for an Event" class="search_bar__input">
                <i class="fas fa-search"></i>
            </div>

            <?php foreach ($events as $event) {
                echo "
<h2 class=\"main\">Event Description</h2>
        <div class=\"container-text\">
            <div>
                <img class=\"eventpic\" src=\"../AddEvent/uploads/{$event['img_id']}\" alt=\"event picture\">
            </div>
            <div class=\"grid-h3-div\">
                <h3 class=\"grid-heading\">{$event['event_name']}</h3>

            </div>
            <p class=\"description\">
                {$event['description']}
            </p>
            <div class=\"grid\">
                <div class=\"container\">
                    <p>
                        <a href=\"../Select Ticket/Select Category Test.html\">
                            <button class=\"button\" style=\"vertical-align:middle\">
                                <span>
                                    Buy Tickets
                                </span>
                            </button>
                        </a>
                    </p>
                </div>
                <div class=\"container\">
                    <p class=\"info-bottom vl\">
                        <i class=\"fas fa-calendar-day\">Date: {$event['e_date']}</i>
                        <br><i class=\"fas fa-hand-holding-usd\">Price: {$event['price']}$</i>
                        <br><i class=\"fas fa-map-marked-alt\">Place: {$event['e_location']}</i>
                    </p>
                </div>
            </div>
        </div>
";
            }

            ?>



            <?php include('../reusable_content/footer/footer.php'); ?>
        </main>
    </body>

    </html>