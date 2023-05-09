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
    <link rel="stylesheet" href="./myEvents.css">
    <title>Tickify:My Events</title>
</head>

<body>
    <?php include('../reusable_content/navigation_bar/navigation_bar.php') ?>

    <article>
        <section class="search">
            <div class="box">
                <input type="text" placeholder="Search for an Event" class="search__input">
                <i class="fas fa-search"></i>

                <a href="../AddEvent/addevent.php" class="search__addBTN">Add Event</a>
            </div>

            <h1 class="search__heading">My Events</h1>

            <div class="search__info">
                <div class="search__info--circle"> </div>
                <div class="search__info--circle"> </div>
                <div class="search__info--circle"> </div>
            </div>
        </section>

        <section class="grid">
                <div class="grid__box">
                    <img src="../MainPage/rock_concert.jpg" alt="background image" class="grid__box--image"></img>
                    <!-- <br class="grid__box--line"> -->
                    <h3 class="grid__box--event-heading">Event heading</h3>
                    <p class="grid__box--event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ipsa nemo nostrum repudiandae placeat consequuntur illo soluta! Quaerat quae optio facere natus placeat quo assumenda.</p>
                    <br class="grid__box--line">

                    <div class="grid__box__info">
                        <p><i class="far fa-calendar-alt"></i> September 9 (Fryday), 19:00 EST</p>
                        <p><i class="fas fa-map-marker-alt"></i> Pastoor Op Heijstraat 31, Venlo, NL</p>
                        <p>
                            <i class="fas fa-tag"></i> $60
                            <i class="fas fa-arrow-alt-circle-right grid__box__info-btn-see-more"></i>
                        </p>
                    </div>
                </div>

                <div class="grid__box">
                    <img src="../MainPage/rock_concert.jpg" alt="background image" class="grid__box--image"></img>
                    <!-- <br class="grid__box--line"> -->
                    <h3 class="grid__box--event-heading">Event heading</h3>
                    <p class="grid__box--event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ipsa nemo nostrum repudiandae placeat consequuntur illo soluta! Quaerat quae optio facere natus placeat quo assumenda.</p>
                    <br class="grid__box--line">

                    <div class="grid__box__info">
                        <p><i class="far fa-calendar-alt"></i> September 9 (Fryday), 19:00 EST</p>
                        <p><i class="fas fa-map-marker-alt"></i> Pastoor Op Heijstraat 31, Venlo, NL</p>
                        <p>
                            <i class="fas fa-tag"></i> $60
                            <i class="fas fa-arrow-alt-circle-right grid__box__info-btn-see-more"></i>
                        </p>
                    </div>
                </div>

                <div class="grid__box">
                    <img src="../MainPage/rock_concert.jpg" alt="background image" class="grid__box--image"></img>
                    <!-- <br class="grid__box--line"> -->
                    <h3 class="grid__box--event-heading">Event heading</h3>
                    <p class="grid__box--event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ipsa nemo nostrum repudiandae placeat consequuntur illo soluta! Quaerat quae optio facere natus placeat quo assumenda.</p>
                    <br class="grid__box--line">

                    <div class="grid__box__info">
                        <p><i class="far fa-calendar-alt"></i> September 9 (Fryday), 19:00 EST</p>
                        <p><i class="fas fa-map-marker-alt"></i> Pastoor Op Heijstraat 31, Venlo, NL</p>
                        <p>
                            <i class="fas fa-tag"></i> $60
                            <i class="fas fa-arrow-alt-circle-right grid__box__info-btn-see-more"></i>
                        </p>
                    </div>
                </div>

                <div class="grid__box">
                    <img src="../MainPage/rock_concert.jpg" alt="background image" class="grid__box--image"></img>
                    <!-- <br class="grid__box--line"> -->
                    <h3 class="grid__box--event-heading">Event heading</h3>
                    <p class="grid__box--event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ipsa nemo nostrum repudiandae placeat consequuntur illo soluta! Quaerat quae optio facere natus placeat quo assumenda.</p>
                    <br class="grid__box--line">

                    <div class="grid__box__info">
                        <p><i class="far fa-calendar-alt"></i> September 9 (Fryday), 19:00 EST</p>
                        <p><i class="fas fa-map-marker-alt"></i> Pastoor Op Heijstraat 31, Venlo, NL</p>
                        <p>
                            <i class="fas fa-tag"></i> $60
                            <i class="fas fa-arrow-alt-circle-right grid__box__info-btn-see-more"></i>
                        </p>
                    </div>
                </div>

                <div class="grid__box">
                    <img src="../MainPage/rock_concert.jpg" alt="background image" class="grid__box--image"></img>
                    <!-- <br class="grid__box--line"> -->
                    <h3 class="grid__box--event-heading">Event heading</h3>
                    <p class="grid__box--event-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ipsa nemo nostrum repudiandae placeat consequuntur illo soluta! Quaerat quae optio facere natus placeat quo assumenda.</p>
                    <br class="grid__box--line">

                    <div class="grid__box__info">
                        <p><i class="far fa-calendar-alt"></i> September 9 (Fryday), 19:00 EST</p>
                        <p><i class="fas fa-map-marker-alt"></i> Pastoor Op Heijstraat 31, Venlo, NL</p>
                        <p>
                            <i class="fas fa-tag"></i> $60
                            <i class="fas fa-arrow-alt-circle-right grid__box__info-btn-see-more"></i>
                        </p>
                    </div>
                </div>
        </section>
    </article>

    <?php include('../reusable_content/footer/footer.php') ?>
</body>

</html>