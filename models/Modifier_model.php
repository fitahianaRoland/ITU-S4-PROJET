<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class Modifier_model extends CI_Model{

    public function modifierSport($id)
    {
        $this->db->where('idsport', $id); // Remplacez 'id' par le nom de votre colonne d'identifiant
        $this->db->update('sport'); // Remplacez 'sport' par le nom de votre table
    }

}
?>
