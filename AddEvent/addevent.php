<?php 
    if (isset($_POST['event_name'])){
        header('Location:../MyEvents/index.php');
    }
?>
<?php session_start();?> 
<?php
    include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Risque" />
    <link rel="stylesheet" href="../reusable_content/navigation_bar/navigation.css">
    <link rel="stylesheet" href="../reusable_content/footer/footer.css">
    <link rel="stylesheet" href="addeventV2.css">
</head>

<body>

<main>  
    
    <?php include('../reusable_content/navigation_bar/navigation_bar.php'); ?>

    <section>
        <h1>Add event</h1>
        <article>
            <div class="grid">
                <form action="<?php $_SERVER["PHP_SELF"]?>" method="post"  enctype="multipart/form-data">
                <div class="grid1">
                    <div class="container1">
                        <input type="text" name="event_name" class="input_name" placeholder="Event name" maxlength="50">
                        <input type="text" name="short_description" class="input_name1" placeholder="Short description" maxlength="100">
                    </div>
                    <div class="container2">
                        <input type="file" class="addbutton1" name="file">
                    </div>
                </div>

                <div class="grid2">
                    <div class="container3">
                        <input type="text" name="description" class="input_desc" placeholder="Description" maxlength="500">
                    </div>

                    <div class="container4">
                        <input type="date" name="e_date" class="inputs" placeholder="Date" >
                        <input type="text" name="e_location" class="inputs" placeholder="Location">
                        <input type="text" name="price" class="inputs" placeholder="Price" maxlength="15">
                        <button name="submit" class="addbutton2"> Add event</button>

                    </div>
                </div>
                </form>
            </div>
        
        </article>
        </section>
    
    <?php include('../reusable_content/footer/footer.php'); ?>

</main>

</body>

</html>