<?php
class Pages  extends Controller {
    
    public function __construct() {
        
        
        
    }
    public function index(){
         
        $this->view('index',['id'=>$_SESSION['user_id']]);
        
        
    }
    public function about(){
        echo 'Congratulations';
        $this->view('oui', ['oui'=> 'meMario']);

    }
}

?>