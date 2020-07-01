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
        $this->view("template/home-nav");
        $this->view("template/home-body");
        $this->view("template/footer");
        
    }

    function Listing() {
        $this->view("template/header");
        $this->view("template/blog-nav");
        $this->view("template/blog-item");
        $this->view("template/blog-item");
        $this->view("template/blog-closure");
        $this->view("template/footer");
    }

    function Blog(){
        $this->view("template/header");
        $this->view("template/entry-nav");
        $this->view("template/entry-body");
        $this->view("template/entry-comments");
        $this->view("template/entry-addcomment");
        $this->view("template/footer");
    }

}

?>