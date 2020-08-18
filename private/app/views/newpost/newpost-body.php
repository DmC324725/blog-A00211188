<form method = "post">

<input type = "text" class="newinput" name = "post-title" id="post-title" style = "width:100%;" placeholder="Post Title"/>
<br/>
<!-- <label for="post-content">:</label> -->
<textarea id="post-content" class="newinput" name="post-content" rows="30" cols="150" style = "width:100%;" placeholder="Post Content"></textarea>
<br/>
<div style="width:100%;display:flex; justify-content:center;">
<input type = "submit" value="Post" name = "submit" />
</div>
</form>

<?php 

    if(isset($_POST['submit'])){

        //Get the data and run SQL Statement to insert into 
        $post_title = $_POST['post-title'];        
        $post_content = $_POST['post-content'];

        $slug = str_replace(' ','_',$post_title);
        $slug = $slug . rand(1000,9999);

        $postVals = array($slug,$post_title,$post_content,'static@email.com');
        print_r($postVals);
        // $this->model('blogmodel');
        // $post = $this->blogmodel->insertBlogPost($postVals);

        echo "<script type='text/javascript'>alert('$slug');</script>";
    }

?>