<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class Insertion_model extends CI_Model{

    public function insertDetailsUtilisateur($idutilisateur,$id,$genre,$taille,$poidsactuel,$objectifpoids)
    {
        $data = array(
            'idutilisateur' => $idutilisateur,
            'idregime' => $id,
            'genre' => $genre,
            'taille' => $taille,
            'poidsactuel' => $poidsactuel,
            'objectifpoids' => $objectifpoids
        );
        $this->db->insert('detailsutilisateur', $data);
    }

    public function insertSport($nom)
    {
        $data = array(
            'nomsport' => $nom
        );
        $this->db->insert('sport', $data);
    }

    public function insertCodes($numero,$montant,$etat)
    {
        $data = array(
            'numero' => $numero,
            'montant' => $montant,
            'etat' => $etat
        );
        $this->db->insert('codes', $data);
    }

    public function insertPorteFeuille($id)
    {
        $data = array(
            'idutilisateur' => $id
        );
        $this->db->insert('portefeuille', $data);
    }
    public function insertMouvementPorteFeuille($idportefeuille,$debit,$credit)
    {
        $data = array(
            'idportefeuille' => $idportefeuille,
            'debit' => $debit,
            'credit' => $credit
        );
        $this->db->insert('mouvement_portefeuille', $data);
    }

}
?>
