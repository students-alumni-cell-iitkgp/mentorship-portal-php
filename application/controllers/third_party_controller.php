<?php

class third_party_controller extends CI_Controller {

    function __construct() {
        parent::__construct();

        // path to simple_html_dom 
        include APPPATH . 'third_party/simple_html_dom.php';
    }

    function index() {

        //Create object of Simple_html_dom class 
        $html = new Simple_html_dom();

        //use Simple_html_dom class function load_file
        $html->load_file('http://www.google.com');
        
        //use Simple_html_dom class function find
        foreach ($html->find('img') as $element) {
            echo $element->src . '<br>';
        }
    }

}
?>