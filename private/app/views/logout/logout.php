

<?php 
    $_SESSION["logged_in"] = "";
    $_SESSION["name"] = "";
    $_SESSION["email"] = "";
    session_unset($_SESSION["logged_in"]);
    session_unset($_SESSION["name"]);
    session_unset($_SESSION["email"]);
    
    echo "You have been successfully logged out! <br>";
    echo "<a href='/'><input type='button' value='Go Back'/></a>'";

?>