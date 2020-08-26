<?php echo "<script type='text/javascript'>console.log('Page Load Started');</script>"; ?>
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
                 echo "<a href='/'><input type='button' value='Go Back'/></a>'";
             }
    }
    //     }else{
    //         $edit_slug = str_replace(' ','_',$edit_post_title);
    //         $edit_slug = substr($edit_slug,0,20) . rand(1000,9999);
    //         $postVals = array($edit_slug,$edit_post_title,$edit_post_content,'static@email.com');
    //         $this->model('blogmodel');
    //         $this->blogmodel->insertBlogPost($postVals);
    //     }
    // }

?>