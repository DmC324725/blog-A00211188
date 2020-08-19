<?php echo "<script type='text/javascript'>console.log('Page Load Started');</script>";?>
<form method = "post">

<input type = "text" class="newinput" name = "post-title" id="post-title" style = "width:100%;" placeholder="Post Title" value = "<?php if(is_string($post_name)){echo "$post_name";} ?>"/>
<br/>
<!-- <label for="post-content">:</label> -->
<textarea id="post-content" class="newinput" name="post-content" rows="30" cols="150" style = "width:100%;" placeholder="Post Content"><?php if(is_string($post_content)){echo "$post_content";} ?></textarea>
<br/>
<div style="width:100%;display:flex; justify-content:center;">
<input type = "submit" value="Post" name = "submit" />
</div>
</form>

<?php echo "<script type='text/javascript'>console.log('Page Load Complete');</script>";?>

<?php 
    
    if(isset($_POST['submit'])){
        model('blogmodel');
        echo "<script type='text/javascript'>console.log('Script Run Started');</script>";
        //Get the data and run SQL Statement to insert into 
        $edit_post_title = $_POST['post-title'];        
        $edit_post_content = $_POST['post-content'];
        echo "<script type='text/javascript'>console.log('Script Run Started');</script>";
        if(is_string($slug)){
            echo "<script type='text/javascript'>console.log('Script Run TRUE $slug');</script>";
            //$postVals = array($edit_post_title,$edit_post_content,$slug); 
            
            /*$edit_post = */$this->blogmodel->updateBlogPost($slug,$edit_post_title,$edit_post_content);
        }else{
            echo "<script type='text/javascript'>console.log('Script Run FALSE');</script>";
            $edit_slug = str_replace(' ','_',$edit_post_title);
            $edit_slug = substr($edit_slug,0,20) . rand(1000,9999);
            $postVals = array($edit_slug,$edit_post_title,$edit_post_content,'static@email.com');
            
            $edit_post = $this->blogmodel->insertBlogPost($postVals);
        }
       
         echo "<script type='text/javascript'>console.log('Script Run Complete');</script>";
    }

?>