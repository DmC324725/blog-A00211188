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
        $this->view("template/header");
        $this->view("template/blog-nav");
        $this->view("template/blog-item");
        $this->view("template/blog-item");
        $this->view("template/blog-closure");
        $this->view("template/footer");
    }
    function Listing () {

        $this->view("template/header");
        $this->view("listing/listing-nav");
        $this->view("template/listing-item");
        $this->view("template/listing-item");
        $this->view("listing/listing-closure");
        $this->view("template/footer");

        
    }

    
}

?>