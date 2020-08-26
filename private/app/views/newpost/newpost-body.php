<?php echo "<script type='text/javascript'>console.log('Page Load Started');</script>"; 
if(!(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true)){
    echo "You are not logged in! <br>";
    echo "<a href='/'><input type='button' value='Go Back'/></a>";
    return;

}
if(is_string($slug) & strlen($slug)>3 & $author_email != $_SESSION["email"]){
    echo "You are not authorized to edit this post! <br>";
    echo "<a href='/'><input type='button' value='Go Back'/></a>";
    return;
}

?>
<?php echo "<script type='text/javascript'>console.log('Page Load Complete');</script>";?>

<?php 
    
    if(isset($_POST['submit'])){

        //Get the data and run SQL Statement to insert into 
        $edit_post_title = trim(htmlentities($_POST['post-title']));
        if($edit_post_title == ""){
            echo "Error! No Title Entered! <br>";
            echo "<a href='/'><input type='button' value='Go Back'/></a>";
            return;
        }        
        $edit_post_content = trim(htmlentities($_POST['post-content']));
        if($edit_post_content == ""){
            echo "Error! No Content Entered! <br>";
            echo "<a href='/'><input type='button' value='Go Back'/></a>";
            return;
        }
        if(is_string($slug) & strlen($slug)>3){
            
            $this->blogmodel->updateBlogPost($slug,$edit_post_title,$edit_post_content);

        }else{
            $edit_slug = str_replace(' ','_',$edit_post_title);
            $edit_slug = substr($edit_slug,0,20) . rand(1000,9999);
            $postVals = array($edit_slug,$edit_post_title,$edit_post_content,$_SESSION["email"]);
            $this->model('blogmodel');
            $this->blogmodel->insertBlogPost($postVals);
        }
        echo "Your post is live! <br>";
        echo "<a href='/'><input type='button' value='Go Back'/></a>";
        return;
    }

?>

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

