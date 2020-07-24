<?php

class Entry extends Controller {

    function __construct() {
        parent::__construct();
    }
    /*
     * http://localhost/
     */
    function Index () {

        $this->view("template/header");
        $this->view("entry/entry-nav");
        $this->view("entry/entry-body");
        $this->view("entry/entry-comments");
        $this->view("entry/entry-addcomment");
        $this->view("template/footer");

        
    }

    

}

?>