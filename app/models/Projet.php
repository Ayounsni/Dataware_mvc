<?php
class Projet {
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
        $this->db->getConnection();
        
    }

    public function getProjet(){
        $this->db->query('SELECT * FROM projets INNER JOIN users ON projets.user_id = users.id_user WHERE user_id = :id');
        $this->db->bind(':id', $_SESSION['user_id']);
        $this->db->execute();

       $resultat= $this->db->resultSet();

       return $resultat;
    }

    public function addProjet($data){
        $this->db->query('INSERT INTO projets (nom_projet, user_id, date_creation) VALUES(:nom_projet, :user_id, :date_creation)');
        // Bind values
        $this->db->bind(':nom_projet', $data['nom_projet']);
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->bind(':date_creation', $data['date_creation']);
        
        // Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }

    }



}   ?>