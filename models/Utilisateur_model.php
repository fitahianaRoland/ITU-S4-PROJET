<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class Utilisateur_model extends CI_Model{

    public function insertUser($nom,$prenom,$genre,$datenaissance, $mail, $pwd)
    {
        $data = array(
            'nom' => $nom,
            'prenoms' => $prenom,
            'genre' => $genre,
            'datenaissance' => $datenaissance,
            'email' => $mail,
            'motdepasse' => $pwd
        );
        $this->db->insert('utilisateur', $data);
    }
    public function verificationLogin($email, $mot_de_passe)
    {
        // Effectuer la vérification des informations de connexion dans la base de données
        $this->db->where('email', $email);
        $this->db->where('motdepasse', $mot_de_passe);
        $query = $this->db->get('utilisateur');

        // Vérifier si l'utilisateur existe dans la base de données
        if ($query->num_rows() > 0) {
            // Utilisateur trouvé, informations de connexion valides
            $utilisateur = $query->row();
            return $utilisateur->idutilisateur;
        } else {
            // Utilisateur non trouvé ou informations de connexion invalides
            return false;
        }
    }
    public function verificationEmailExiste($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('utilisateur');

        if ($query->num_rows() > 0) {
            return true; // L'adresse e-mail existe déjà dans la base de données
        } else {
            return false; // L'adresse e-mail n'existe pas dans la base de données
        }
    }


}
?>
