<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- <link rel="Icon" href="favicon.ico"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Risque" />
    <link rel="stylesheet" href="../reusable_content/navigation_bar/navigation.css">
    <link rel="stylesheet" href="../reusable_content/footer/footer.css">
    <link rel="stylesheet" href="home.css">
</head>

<body>

<main>  
    
    <?php include('../reusable_content/navigation_bar/navigation_bar.php'); ?>

    <input type="text" class="searchtab" name="searchtab" placeholder="Search for an event"> 
    <i class="fas fa-search"></i>

    <section>
            <h2>Newest Events</h2>
            <div class="grid">
                <div class="container"> 
                    <img  src="rock_concert.jpg" alt="1">
                    <div class="infobox1">
                    <h3>Rockfest</h3>
                    <hr>
                    <p>The largest rock music 
                    and camping event in the
                    world. Featuring a 2021 lineup 
                    of the best of classic and modern rock.</p>
                    </div>
                    <br>
                    <div class="infobox">
                    <p><i class="fas fa-calendar-alt"></i> 17 November (Wednesday), 5:30 PM EST</p>
                    <p><i class="fas fa-map-marked-alt"></i> Amsterdam Arena, Amsterdam, NL</p>
                    <p><i class="fas fa-tags"></i>100$-175$</p>
                    <p class="bottom"><i class="fas fa-arrow-circle-right" href="rock_concert.html"></i></p>
                    </div>
                </div>

                <div class="container"> 
                    <img  src="summer_concert.jpg" alt="2" class="summerfest">
                    <div class="infobox1">
                    <h3>Summerfest</h3>
                    <hr>
                    <p>This event is an annual music
                    event. It hosts over 800
                    bands and over 900 000 fans over 3 Weekends
                    on 11 different stages.</p>
                    </div>
                    <br>
                    <div class="infobox">
                    <p><i class="fas fa-calendar-alt"></i> 2 September (Thursday), 4:00 PM EST</p>
                    <p><i class="fas fa-map-marked-alt"></i> Henry Maier Park, Wisconsin, U.S.A</p>
                    <p><i class="fas fa-tags"></i>100$-200$</p>
                    <p class="bottom"><i class="fas fa-arrow-circle-right" href="summer_concert.html"></i></p>
                    </div>
                </div>

                <div class="container"> 
                    <img  src="stadium.jpg" alt="3">
                    <div class="infobox1">
                    <h3>Football match</h3>
                    <hr>
                    <p>The event will be held at the
                    home stadium of PSV, Philips
                    Arena.The clash is between PSV and Ajax.</p>
                    </div>
                    <br>
                    <div class="infobox">
                    <p><i class="fas fa-calendar-alt"></i> 23 January (Sunday), 10:00 AM EST</p>
                    <p><i class="fas fa-map-marked-alt"></i> Philips Stadium, Eindhoven,NL</p>
                    <p><i class="fas fa-tags"></i>50$-75$</p>
                    <p class="bottom"><i class="fas fa-arrow-circle-right" href="stadium.html"></i></p>
                    </div>
                </div>
            </div>
    </section>
    
    <?php include('../reusable_content/footer/footer.php'); ?>

</main>

</body>

</html>