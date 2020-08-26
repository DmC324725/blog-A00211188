<?php echo "<script type='text/javascript'>console.log('Page Load Started');</script>"; ?>
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


             $resultAuthor = $this->blogmodel->returnAuthor($useremail);
             print_r($resultAuthor);
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