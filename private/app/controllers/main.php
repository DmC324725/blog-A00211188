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

}

?>