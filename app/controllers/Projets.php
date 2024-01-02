<?php

class Projets extends Controller{

    public function __construct(){
        if(!isLoggedIn()){
            redirect('users/login');
        }
        $this->projetModal = $this->model('Projet');

    }

    public function index(){
        $projets = $this->projetModal->getProjet();
        $data= [
            'projets' => $projets
        ];
        $this->view('projets/index',$data);
    }

    public function add(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        // Init data
        $data =[
          'nom_projet' => trim($_POST['nomProjet']),
          'date_creation' => trim($_POST['date']), 
          'nomProjet_err'=> '', 
          'dateCreation_err'=> '',       
        ];
        

        // Validate Email
        if(empty($data['nom_projet'])){
          $data['nomProjet_err'] = 'Veuillez entrer le nom du projet';
        }

        // Validate Password
        if(empty($data['date_creation'])){
          $data['dateCreation_err'] = ' Veuillez entrer la date de création';
        }

        // Make sure errors are empty
        if(empty($data['dateCreation_err']) && empty($data['nomProjet_err'])){
          // Validated
          
            if($this->projetModal->addProjet($data)){
                flash('projet ajoutée','projet ajoutée');
                redirect('projets/index');
              
            }else{
              
              $this->view('projets/add',$data);
            
          }
        } else {
          // Load view with errors
          $this->view('projets/add', $data);
        }
        }else{
            $data =[
                'nom_projet' => '',
                'date_creation' => '', 
                'nomProjet_err'=> '', 
                'dateCreation_err'=> '',           
            ];
        
        
        $this->view('projets/add',$data);

    }      
    
    }
}

?>