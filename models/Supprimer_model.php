<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class Supprimer_model extends CI_Model{

    public function supprimerSport($id, $nouveauNom)
    {
        $this->db->where('idsport', $id); // supprimer 'id' par le nom de votre colonne d'identifiant
        $this->db->delete('sport'); // supprimer 'sport' par le nom de votre table
    }
    public function supprimerRegime($id, $nouveauNom)
    {
        $this->db->where('idregime', $id); // supprimer 'id' par le nom de votre colonne d'identifiant
        $this->db->delete('plat_regime'); // supprimer 'sport' par le nom de votre table
    }
}
?>
