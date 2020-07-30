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


        $this->view("listing/listing-closure");
        $this->view("template/footer");

        
    } 
    function Entry ($slug) {
        $this->model('blogmodel');
        $post = $this->blogmodel->getBlogPost($slug);


        $this->view("template/header");
        $this->view("entry/entry-nav");
        $this->view("entry/entry-body",$post);
        $this->view("entry/entry-comments");
        $this->view("entry/entry-addcomment");
        $this->view("template/footer");

        
    }

    
}

?>