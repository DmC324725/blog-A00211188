<?php echo "<script type='text/javascript'>console.log('Page Load Started');</script>"; 
 if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){
    echo "You are already logged in! <br>";
    echo "<a href='/'><input type='button' value='Go Back'/></a>'";
    return;

}

?>

<?php 
    
    if(isset($_POST['submit'])){
        echo "<script type='text/javascript'>console.log('Form was submitted');</script>";
        $username = trim(htmlentities($_POST['signup-user-name']));
        $password = trim(htmlentities($_POST['signup-user-pass']));
        $email = trim(htmlentities($_POST['signup-user-email']));
        if($username =="" || $password == "" || $email == ""){
            return;
        }
        $password = password_hash($password,PASSWORD_DEFAULT);
        
            echo "<script type='text/javascript'>console.log('Going to input author');</script>";
            $this->model('blogmodel');
             $this->blogmodel->createAuthor(array($email,$username,$password));
             echo "<script type='text/javascript'>window.alert('User Added');</script>";

             //Need to figure out an alternative as stmt->execute is not returning anything to indicate success or failure of query.
             echo "User Created Successfully!";
             echo "<a href='/'><input type='button' value='Go Back'/></a>'";
             return;

       
    }

?>

<script>
    function validateSignup(){
        
        var name = document.getElementById("signup-user-name").value.trim();
        var email = document.getElementById("signup-user-email").value.trim();
        var password = document.getElementById("signup-user-pass").value.trim();
        var password2 = document.getElementById("signup-user-pass-repeat").value.trim();
        if(name == null || name == "" || email == null || email == "" || password == "" || password == null || password2 == "" || password2 == null || password != password2){
            return false;
        }
        return true;
    }
</script>
<form method = "post" onsubmit="return validateSignup()">



    <div style="width:100%;display:flex; justify-content:center;" class="mainblock">
    <h2>Sign Up</h2>
    </div >
    <div style="width:100%;display:flex; justify-content:center;">
    <input type = "text" class="newinput" name = "signup-user-name" id="signup-user-name"  placeholder="User Name" width=300px />
    <br>
    </div>
    <div style="width:100%;display:flex; justify-content:center;">
    <input type = "email" class="newinput" name = "signup-user-email" id="signup-user-email"  placeholder="Email" />
    <br>
    </div>
    <div style="width:100%;display:flex; justify-content:center;">
    <input type = "password" class="newinput" name = "signup-user-pass" placeholder="password" id="signup-user-pass"   />
    <br>
    </div>
    <div style="width:100%;display:flex; justify-content:center;">
    <input type = "password" class="newinput" name = "signup-user-pass-repeat" placeholder="Repeat password" id="signup-user-pass-repeat"   />
    <br>
    </div>
    <div style="width:100%;display:flex; justify-content:center;">
    <input type = "submit" value="Sign Up" name = "submit" />
</div>

</form>

<?php echo "<script type='text/javascript'>console.log('Page Load Complete');</script>";?>

