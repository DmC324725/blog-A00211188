
<article class="entry">
    <?php 
        //Check logged in or not
        if((isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true)){
            echo "Welcome ". $_SESSION["name"]."!";
            echo"<br>";
            echo"<a href='/main/logout'>Logout</a>";
        }else{
            echo"<h4><a href='/main/login'>Log In</a> or <a href='/main/signup'>Sign Up</a> here!</h4>";
        }
    
    ?>

    
                    <header class="entry__header">

                        <h2 class="entry__title h1">
                            Hey check out our recent blogs!!
                        </h2>

                       <br>
                     
                    </header>
                    
                    