<?php
    // application/controllers/Form.php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Form extends CI_Controller 
    {
        public function inserer()
        {
            // Chargement des assistants 'form' et 'url'
            $this->load->helper('form'); 

            // Chargement de la librairie 'database'
            $this->load->database(); 

            // Chargement de la librairie form_validation
            $this->load->library('form_validation'); 

            if ($this->input->post())
            { // 2ème appel de la page: traitement du formulaire
                
                $data = $this->input->post();

                // Ces valeurs peuvent ne pas avoir d'entrée
                unset($data["an_d_modif"]);
                unset($data["an_photo"]);
    
                // Ajout d'une date d'ajout que le formulaire ne contient pas
                $data["an_d_ajout"] = date("Y-m-d h:i:s");

                // Transformation d'une information venant du formulaire
                // par exemple forcer la référence d'un produit en majuscules
                $pro_ref = $this->input->post("an_ref");
                $data["an_ref"] = strtoupper($an_ref);
                
                $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');  

                // Définition des filtres, ici une valeur doit avoir été saisie pour le champ 'pro_ref'
                $this->form_validation->set_rules("an_offre", "Offre", "required", array("required" => "Vous devez sélectionner un type d'%s"));
                $this->form_validation->set_rules("an_type", "Type", "required", array("required" => "Vous devez sélectionner un type de bien"));
                

                if ($this->form_validation->run() == FALSE)
                { // Echec de la validation, on réaffiche la vue formulaire
                    $this->load->view('header');
                    $this->load->view('inserer');
                    //$this->load->view('footer');
                }
                else
                { // La validation a réussi, nos valeurs sont bonnes, on peut insérer en base
                    $this->db->insert('annonces', $data);

                    redirect("produits/liste");
                }  
            } 
            else 
            { // 1er appel de la page: affichage du formulaire
                $this->load->view('header');
                $this->load->view('inserer');
                $this->load->view('footer');
            }
        } // -- inserer()
    }