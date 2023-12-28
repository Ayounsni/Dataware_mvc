<?php
class Pages  extends Controller {
    public function __construct() {
        
        echo "ahahah";
    }
    public function index(){
        $this->view('hello');;
        
        
    }
        
}

?>