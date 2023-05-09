<?php 

    if (isset($_SESSION["username"])) {
        $isLoggedIn = true;
    } else {
        $isLoggedIn = false;
    }

    // $isLoggedIn = false;

    echo "
    <nav>
        <div id='logo'>Tickify</div>
    
        <ul>
            <li>
                <a href='../MainPage/Home.php'>Home</a>
            </li>
            <li>
                <a href='../Events/index.php'>Events</a>
            </li>";
            if ($isLoggedIn) {
                echo "
                    <li>
                        <a href='../MyEvents/index.php'>My Events</a>
                    </li>";
            }

            echo "
            <li>
                <a href='#'>Support</a>
            </li>
        </ul>";
    
    if ($isLoggedIn) {
        //TODO Inplement the Log Out.
        echo "
            <button type='button' id='dropdown'>
                <div class='profile_dropdown'>
                    <ul>
                        <li><a href='../MyProfile/myprofile.php'>My Profile</a></li>
                        <li><a href='../UAEPage/UAEvents.php'>Unapproved Events</a></li>
                        <li><a href='../../reusable_content/navigation_bar/logout.php'>Log Out</a></li>
                    </ul>
                </div>
            </button>
        </nav>";

    } else {
        echo "
            <button type='button' id='dropdown'>
                <div class='profile_dropdown'>
                    <ul>
                        <li><a href='../Login and Sign Up Page/Sing_up.php'>Sign up</a></li>
                        <li><a href='../Login and Sign Up Page/Log_in.php'>Log In</a></li>
                    </ul>
                </div>
            </button>
        </nav>";
    }
?>