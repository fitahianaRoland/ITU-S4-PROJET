<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{

    public function verificationLogin($email, $mot_de_passe)
    {
        // Effectuer la vérification des informations de connexion dans la base de données
        $this->db->where('email', $email);
        $this->db->where('password', $mot_de_passe);
        $query = $this->db->get('utilisateur');

        // Vérifier si l'utilisateur existe dans la base de données
        if ($query->num_rows() > 0) {
            // Utilisateur trouvé, informations de connexion valides
            $user = $query->row();
            return $user->idUtilisateur;
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
