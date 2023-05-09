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
    <link rel="stylesheet" href="myprofile.css">
    <title>My Profile</title>
</head>
<body>

    <nav>
        <?php include('../reusable_content/navigation_bar/navigation_bar.php'); ?>
    </nav>

    <div>
        <h1 class="section-header">My Profile</h1>
    </div>  

    <div class="columns">

        <div class="profile-picture-section">
            <img src="profilepicture.jpg" class="profile-picture">

            <div class="birthday-section">
                17 August 1979

                <div class="birthday-smalltext">
                    Birthday
                </div>

            </div>

            <br>

            <div class="account-type-section">
                <hr>
                Seller

                <div class="account-type-smalltext">
                    Account Type
                </div>

            </div>

            <div class="edit-information">

                <button class="edit-information-button">Edit Profile</button>

            </div>

        </div>



        <div class="user-info-section">
            <div>
                <div class="left-side-content">First Name</div> 
                <div class="right-side-content">Someone</div>
                <hr>
            </div>
            
            <div class="last-name">
                <div class="left-side-content">Last Name</div>
                <div class="right-side-content">Someone</div>    
                <hr>
            </div>

            <div class="username-section">
                <div class="left-side-content">Username</div>
                <div class="right-side-content">Something</div>
                <hr>
            </div>

            <div class="email-section">
                <div class="left-side-content">Email</div>
                <div class="right-side-content">Something@email.com</div>
                <hr>
            </div>

            <div class="description-section">
                <div class="left-side-content">Description</div>
                <div class="right-side-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis,
                    quam nec elementum elementum, arcu urna interdum felis,
                    sed imperdiet est metus tempus enim. Nullam placerat porta hendrerit.
                    Nullam metus augue, rhoncus consequat ornare sed,
                    ultricies at elit. Nunc malesuada quis nisi non semper.
                </div>
                <hr>
            </div>
        </div>
    </div>

    <footer>
        <?php include('../reusable_content/footer/footer.php')?>
    </footer>
     
</body>
</html>