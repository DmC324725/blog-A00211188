<?php

class Main extends Controller {

    function __construct() {
        parent::__construct();
    }
    /*
     * http://localhost/
     */
    function Index () {

        $this->view("template/header");
        $this->view("home/home-nav");
        $this->view("home/home-body");
        $this->view("template/footer");

        
    }

    
    function Listing () {

        $this->model('blogmodel');
        $posts = $this->blogmodel->getBlogList();
        //$entries = Array("How to train your dragon?","Kung Fu Panda.","10 Ways to learn programming.","Best programming Languages right now.");
        $data = Array("title"=>"Blog Listing");
        $this->view("template/header",$data);
        $this->view("listing/listing-nav");
        
        //Calling Template for each post found
        foreach($posts as $post){
            $this->view("template/listing-item",$post);
        }


        // $data = Array("title"=>"10 Lifehacks as a programmer","writer"=>"John Doe","date"=>"12 July, 2020", "category"=>"Tech");
        // $this->view("template/listing-item",$data);
        // $data = Array("title"=>"Best programming languages of 2020","writer"=>"John Doe","date"=>"2 July, 2020", "category"=>"Tech");
        // $this->view("template/listing-item",$data);
        // $data = Array("title"=>"All you need to know about Android Jetpack","writer"=>"John Doe","date"=>"15 July, 2020", "category"=>"Tech");
        // $this->view("template/listing-item",$data);
        // $data = Array("title"=>"Top 10 Web Development tools","writer"=>"John Doe","date"=>"17 July, 2020", "category"=>"Tech");
        // $this->view("template/listing-item",$data);
        // $data = Array("title"=>"Learn Java in a week","writer"=>"John Doe","date"=>"18 July, 2020", "category"=>"Tech");
        // $this->view("template/listing-item",$data);
        $this->view("listing/listing-closure");
        $this->view("template/footer");

        
    } 
    function Entry ($slug) {

        $this->view("template/header");
        $this->view("entry/entry-nav");
        $this->view("entry/entry-body");
        $this->view("entry/entry-comments");
        $this->view("entry/entry-addcomment");
        $this->view("template/footer");

        
    }

    
}

?>