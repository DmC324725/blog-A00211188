<?php echo "<script type='text/javascript'>console.log('Page Load Started');</script>"; ?>

<?php 
    
     if(isset($_POST['submit'])){
        $useremail = trim(htmlentities($_POST['login-user-email']));
        $password = trim(htmlentities($_POST['login-user-pass']));
        
        if($useremail == ""){
            echo "Please enter an email!";
            return;
        }
        if($password == ""){
            echo "Please enter your password!";
            return;
        }

        $this->model('blogmodel');
             $resultAuthor = $this->blogmodel->returnAuthor($useremail);
             if($resultAuthor == null || $resultAuthor == ""){
                 echo "User not found!";
             }
             else{
                if(password_verify($password,$resultAuthor['password_hash'])){
                    //Password is correct. Log in the user
                    session_start();
                    $_SESSION['logged_in'] = true;
                    $_SESSION['name'] = $resultAuthor['name'];
                    $_SESSION['email'] = $resultAuthor['email'];
                    $_SESSION['passphrase'] = substr($resultAuthor['password_hash'],-9);
                    
                    //Trying to make session a little more secure
                    $_COOKIE['adverts'] = substr($resultAuthor['password_hash'],-9);
                    echo "You are  logged in! <br>";
                    echo "<a href='/'><input type='button' value='Go Back'/></a>'";
                    return;
                } else{
                    echo "Incorrect Password!";
                }


                
             }
    }
    

?>


<script>
    function validateSignup(){
        
       
        var email = document.getElementById("signup-user-email").value.trim();
        var password = document.getElementById("signup-user-pass").value.trim();
        
        if(email == null || email == "" || password == "" || password == null){
            alert("Please enter all values");
            return false;
        }
        return true;
    }
</script>

<form method = "post" onsubmit="return validateSignup()">


<div style="width:100%;display:flex; justify-content:center;">
<input type = "email" class="newinput" name = "login-user-email" id="login-user-email"  placeholder="Email" />
<br/>
</div>
<div style="width:100%;display:flex; justify-content:center;">
<input type = "password" class="newinput" name = "login-user-pass" placeholder="password" id="login-user-pass"   />
<br/>
</div>
<div style="width:100%;display:flex; justify-content:center;">
<input type = "submit" value="Login" name = "submit" />
</div>

</form>

<?php echo "<script type='text/javascript'>console.log('Page Load Complete');</script>";?>

