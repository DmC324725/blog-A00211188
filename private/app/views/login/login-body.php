<?php echo "<script type='text/javascript'>console.log('Page Load Started');</script>"; ?>


<form method = "post">

<div class="mainbox">
<div style="width:100%;display:flex; justify-content:center;">
<label for="login-user-email">Email: </label>
<input type = "email" class="newinput" name = "login-user-email" id="login-user-email"  placeholder="johndoe@email.com" />
<br/>
</div>
<div style="width:100%;display:flex; justify-content:center;">
<label for="login-user-password">Password: </label>
<input type = "password" class="newinput" name = "login-user-pass" id="login-user-pass"   />
<br/>
</div>
<div style="width:100%;display:flex; justify-content:center;">
<input type = "submit" value="Login" name = "submit" />
</div>
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