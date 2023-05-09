<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Risque" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../reusable_content/navigation_bar/navigation.css">
    <link rel="stylesheet" href="../reusable_content/footer/footer.css">
    <link rel="stylesheet" href="events.css">

    <title> Tickify:Events </title>
</head>

<body>
    <?php include('../reusable_content/navigation_bar/navigation_bar.php');
    include('../reusable_content/Databse_conection/conection.php');

    ?>

    <article>
        <div class="search_bar">
            <input type="text" placeholder="Search for an Event" class="search_bar__input">
            <i class="fas fa-search"></i>
        </div>

        <div class="grid">

            <?php

            $sql = 'select id, event_name, short_description, e_date, e_location, price, img_id 
            from "event" 
            where approved = true and img_id similar to \'[0-9]%\' and character_length(img_id) > 26 and character_length(img_id) < 29 
            order by e_date;';

            //! Inefficient code
            // $statement = $conn->query($sql);
            // $statement->execute();

            // $events = $statement->fetchAll(PDO::FETCH_ASSOC);
            // foreach ($events as $event)

            foreach ($conn->query($sql) as $event)
                echo "
                <a href=\"../Event Description Page/Event Description.php?id=" . $event['id'] . "&name=" . $event['event_name'] . "\">
                    <div class=\"grid__box\">
                        <img src=../AddEvent/uploads/" . $event['img_id'] . " alt=\"cover image\" class=\"grid__box--image\"></img>
                        <!-- <br class=\"grid__box--line\"> -->
                        <h3 class=\"grid__box--event-heading\"> {$event['event_name']} </h3>
                        <p class=\"grid__box--event-description\"> {$event['short_description']} </p>
                        <br class=\"grid__box--line\">

                        <div class=\"grid__box__info\">
                            <p><i class=\"far fa-calendar-alt\"></i> {$event['e_date']}; 19:00 EST</p>
                            <p><i class=\"fas fa-map-marker-alt\"></i> {$event['e_location']}</p>
                            <p>
                                <i class=\"fas fa-tag\"></i> \${$event['price']}
                                <i class=\"fas fa-arrow-alt-circle-right grid__box__info-btn-see-more\"></i>
                            </p>
                        </div>
                    </div>
                </a>
                    "
            ?>

        </div>
    </article>

    <?php include('../reusable_content/footer/footer.php') ?>
</body>

</html>