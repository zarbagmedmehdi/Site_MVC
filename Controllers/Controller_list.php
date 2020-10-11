<?php

class Controller_list extends Controller{

    public function action_default(){
        $this->action_all();
    }

    public function action_all(){
        //TO DO
        $m = Model::get_model();
        $data = [
            "personnages" => $m->get_all()
        ];

        $this->render("all", $data);
    }

    public function action_family(){
        
        if(isset($_GET["nom"]) and trim($_GET["nom"]) !== ""){
            $nom = $_GET["nom"];
            $m = Model::get_model();
            $data = [
                "personnages" => $m->get_family($nom),
                "nom" => $nom
            ];
            $this->render("family", $data);                
        }
        else {
            $this->action_error("Pas de nom de famille dans l'url !!!");
        }
    }
}