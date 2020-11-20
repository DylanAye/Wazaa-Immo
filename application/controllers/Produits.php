<?php
// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller 
{

    public function liste()
    {
        // Exécute la requête 
        $query = $this->db->query("SELECT * FROM annonces");

        // Récupération des résultats    
        $aListe = $query->result();

        // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
        $aView["liste_produits"] = $aListe;


        $this->load->view('header');
        $this->load->view('liste', $aView);
        $this->load->view('footer');
    }

    public function product($id)
    {
        $this->load->database();

        // Exécute la requête 
        $query = $this->db->query("SELECT * FROM annonces WHERE an_id=$id"); 
            
        // Récupération des résultats    
        $aListe = $query->row();
             
        // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue   
        $aView["liste_produits"] = $aListe;


        $this->load->view('header');
        $this->load->view('product', $aView);
        $this->load->view('footer');
    }
}