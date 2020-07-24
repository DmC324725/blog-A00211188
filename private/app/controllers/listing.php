<?php

class Listing extends Controller {

    function __construct() {
        parent::__construct();
    }
    /*
     * http://localhost/
     */
    function Index () {

        $this->view("template/header");
        $this->view("listing/listing-nav");
        $this->view("template/listing-item");
        $this->view("template/listing-item");
        $this->view("listing/listing-closure");
        $this->view("template/footer");

        
    }

    

}

?>