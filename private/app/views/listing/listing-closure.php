
           </div> <!-- end main -->
</div> <!-- end row -->
<?php 
    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){

        echo "<div style='display:flex;justify-content:center;'><a href='/main/new_post'><input type = 'button' value='New Post'/></a></div>";
        return;

    }

?>

</div> <!-- end content-wrap -->

