<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class Selection_model extends CI_Model{

    public function selectAll($table)
    {
        $query = $this->db->get($table); // Remplacez $table par le nom de votre table
    
        if ($query->num_rows() > 0) {
            return $query->result(); // Renvoie les résultats sous forme d'un tableau d'objets
        } else {
            return array(); // Renvoie un tableau vide si aucune ligne n'est trouvée
        }
    }
    public function selectByIdUtilisateur($id)
    {
        $this->db->where('idutilisateur', $id); // Remplacez 'id' par le nom de votre colonne d'identifiant
        $query = $this->db->get('utilisateur'); // Remplacez 'utilisateur' par le nom de votre table

        if ($query->num_rows() == 1) {
            return $query->row(); // Renvoie la ligne sous forme d'un objet
        } else {
            return null; // Renvoie null si aucune ligne n'est trouvée ou si plusieurs lignes correspondent à l'identifiant
        }
    }
    public function selectByIdRegime($id)
    {
        $query=$this->db->get_where("plat_regime", array("idregime" => $id));
        return $query->result_array();
    }
    public function selectByIdProfil($id)
    {
        $this->db->where('idutilisateur', $id); // Remplacez 'id' par le nom de votre colonne d'identifiant
        $query = $this->db->get('profilcomplet'); // Remplacez 'utilisateur' par le nom de votre table

        if ($query->num_rows() == 1) {
            return $query->row(); // Renvoie la ligne sous forme d'un objet
        } else {
            return null; // Renvoie null si aucune ligne n'est trouvée ou si plusieurs lignes correspondent à l'identifiant
        }
    }
    public function selectIdMaxProfil()
    {
        $this->db->select_max('idutilisateur'); // Remplacez 'idutilisateur' par le nom de votre colonne d'identifiant
        $query = $this->db->get('utilisateur'); // Remplacez 'profilcomplet' par le nom de votre table

        if ($query->num_rows() > 0) {
            return $query->row()->idutilisateur; // Renvoie l'ID maximum
        } else {
            return 1; // Renvoie null si aucune ligne n'est trouvée
        }
    }
    public function selectIdMaxPorteFeuille()
    {
        $this->db->select_max('idportefeuille'); // Remplacez 'idutilisateur' par le nom de votre colonne d'identifiant
        $query = $this->db->get('portefeuille'); // Remplacez 'profilcomplet' par le nom de votre table

        if ($query->num_rows() > 0) {
            return $query->row()->idportefeuille; // Renvoie l'ID maximum
        } else {
            return 1; // Renvoie null si aucune ligne n'est trouvée
        }
    }


}
?>
