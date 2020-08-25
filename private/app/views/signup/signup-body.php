<?php echo "<script type='text/javascript'>console.log('Page Load Started');</script>"; ?>


<form method = "post">


<div style="width:100%;display:flex; justify-content:center;">
    <h2>Sign Up</h2>
    <input type = "text" class="newinput" name = "signup-user-name" id="signup-user-name"  placeholder="Email" />
    <br>
    <input type = "email" class="newinput" name = "signup-user-email" id="signup-user-email"  placeholder="Email" />
    <br>
    <input type = "password" class="newinput" name = "signup-user-pass" placeholder="password" id="signup-user-pass"   />
    <br>
    <input type = "password" class="newinput" name = "signup-user-pass-repeat" placeholder="password" id="signup-user-pass-repeat"   />
    <br>
    <input type = "submit" value="Sign Up" name = "submit" />
</div>

</form>

<?php echo "<script type='text/javascript'>console.log('Page Load Complete');</script>";?>

<?php 
    
    // if(isset($_POST['submit'])){
    //     $edit_post_title = $_POST['post-title'];        
    //     $edit_post_content = $_POST['post-content'];
    //     if(is_string($slug) & strlen($slug)>3){
    //         $this->blogmodel->updateBlogPost($slug,$edit_post_title,$edit_post_content);

    //     }else{
    //         $edit_slug = str_replace(' ','_',$edit_post_title);
    //         $edit_slug = substr($edit_slug,0,20) . rand(1000,9999);
    //         $postVals = array($edit_slug,$edit_post_title,$edit_post_content,'static@email.com');
    //         $this->model('blogmodel');
    //         $this->blogmodel->insertBlogPost($postVals);
    //     }
    // }

?>