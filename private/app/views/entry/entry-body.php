<article class="entry">
<?php if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true){
                    echo"<a href='/main/new_post/<?php echo $slug; ?>'>Edit Post</a>";
    } ?>
                    <header class="entry__header">

                        <h2 class="entry__title h1"><?php echo $post_name;?></h2>

                        <div class="entry__meta">
                            <ul>
                                <li><?php echo $publish_date;?></li>
                                <li><?php echo $author_email;?></li>
                            </ul>
                        </div>
                     
                    </header> <!-- entry__header -->

                    <div class="entry__content-media">
                        <img src="images/wheel-500.jpg" 
                             srcset="images/wheel-1000.jpg 1000w, 
                                     images/wheel-500.jpg 500w" 
                             sizes="(max-width: 1000px) 100vw, 1000px" alt="">
                    </div>

                    <div class="entry__content">
                        <?php echo $post_content;?>
                        
                    </div> <!-- entry__content -->

                    <p class="entry__tags">
                        <span>Tagged in </span>:
                        <a href="#0">orci</a>, <a href="#0">lectus</a>, <a href="#0">varius</a>, <a href="#0">turpis</a>
                    </p>
                    
                    <ul class="entry__post-nav h-group">
                        <li class="prev"><a rel="prev" href="#0"><strong class="h6">Previous Article</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
                        <li class="next"><a rel="next" href="#0"><strong class="h6">Next Article</strong> Morbi Elit Consequat Ipsum</a></li>
                    </ul>

                </article> <!-- end entry -->
