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
        $this->view("main/home-nav");
        $this->view("main/home-body");
        $this->view("template/footer");
        
    }

}

?>