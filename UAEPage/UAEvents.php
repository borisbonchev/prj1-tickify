<?php session_start();?>
<?php
    include('../reusable_content/Databse_conection/conection.php');
    if (isset($_POST["approve"])) {
        $event_id = $_POST["approve"];

        try {
        $sqlUpdate = "update event set approved = true where id = :event_id;";
        $statement=$conn->prepare($sqlUpdate);
        
        $statement->bindParam(':event_id', $event_id, PDO::PARAM_INT);
        $statement->execute();
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    if (isset($_POST["disapprove"])) {
        $event_id = $_POST["disapprove"];

        try {
        $sqlUpdate = "update event set approved = false where id = :event_id;";
        $statement=$conn->prepare($sqlUpdate);
        
        $statement->bindParam(':event_id', $event_id, PDO::PARAM_INT);
        $statement->execute();
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    $sql = 'SELECT id, event_name, e_date, e_location, approved
            FROM "event" where approved is null
            order by e_date asc;';

    $statement = $conn->query($sql);
    $events = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

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
    <link rel="stylesheet" href="UAEstyles.css">
    <title>Unapproved Events</title>
</head>
<body>

    <nav>
    <?php include('../reusable_content/navigation_bar/navigation_bar.php'); ?>
    </nav>

    <div>
        <h1 class="section-header">Unapproved Events</h1>
      </div>

        <input type="text" class="search-bar" placeholder="Search for an event">

        <?php  foreach ($events as $event) {
            echo "
        <div class=\"approve-container\">
            <div class=\"date-container\">
                {$event['e_date']}
                <div class=\"date-container-time\">
                Fri • 5:00pm
                </div>
            </div>
            
            <div class=\"eventInfo-container\">
                {$event['event_name']} - {$event['e_location']}
            </div>
    
            <div class=\"approve-button-container\">
                <form method=\"post\" action=\"UAEvents.php\">
                <button type=\"submit\" value=\"{$event['id']}\" name=\"disapprove\" class=\"approve-button".($event['approved'] == 0 && $event['approved'] !== null ? "\" disabled" : " approve-button-color\"").">Disapprove</button>
                <button type=\"submit\" value=\"{$event['id']}\" name=\"approve\" class=\"approve-button".($event['approved'] == 1 ? "\" disabled" : " approve-button-color\"").">Approve</button>

                </form>

                <a href=\"../Event Description Page/Event Description.php\">
                <button class=\"open-event\">Open Event</button>
                </a>

            </div>
            
        </div>";
        }
        ?>
            
        </div>

    <footer class="footer-class">
    <?php include('../reusable_content/footer/footer.php')?>
    </footer>

</body>

</html>