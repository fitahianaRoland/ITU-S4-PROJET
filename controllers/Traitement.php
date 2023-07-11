<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traitement extends CI_Controller {
	
    public function inscription()
	{
		$this->load->model('Utilisateur_model');
		$this->load->model('User_model');

		$nom = $this->input->get('nom');
		$prenom = $this->input->get('prenom');
		$genre = $this->input->get('genre');
		$datenaissance = $this->input->get('datenaissance');
		$email = $this->input->get('email');
		$motdepasse = $this->input->get('motdepasse');

		if (strlen($motdepasse) >= 6) {
			// Vérifier email efa misy
			if ($this->User_model->verificationEmailExiste($email)) {
				$this->load->view('inscription');
			} else {
				$this->Utilisateur_model->insertUser($nom,$prenom,1,$datenaissance, $email, $motdepasse);
				redirect('Lien/page/index');
			}
		} else {
			$this->load->view('inscription');
		}
	}

	public function inscrire()
	{
		$this->load->model('Utilisateur_model');
		$this->load->model('Selection_model');
		$this->load->model('Insertion_model');

		$nom = $this->input->get('nom');
		$prenom = $this->input->get('prenom');
		$genre = $this->input->get('genre');
		$datedenaissance = $this->input->get('datenaissance');
		$email = $this->input->get('email');
		$mot_de_passe = $this->input->get('mot_de_passe');
		$mot_de_passe_confirmation = $this->input->get('mot_de_passe_confirmation');
		
		$taille = $this->input->get('taille');
		$poids = $this->input->get('poids');
		
		if (strlen($mot_de_passe) >= 6 && $mot_de_passe === $mot_de_passe_confirmation) {
			// Vérifier email efa misy
			if ($this->Utilisateur_model->verificationEmailExiste($email)) {
				echo "Cette adresse e-mail est déjà utilisée. Veuillez en choisir une autre.";
			} else {
				$this->Utilisateur_model->insertUser($nom,$prenom,$genre,$datedenaissance,$email, $mot_de_passe);
			
				$idprofil = $this->Selection_model->selectIdMaxProfil();
				$idportefeuille = $this->Selection_model->selectIdMaxPorteFeuille();
				
				$this->Insertion_model->insertDetailsUtilisateur($idprofil,$taille,$poids,$poids);
				
				$this->Insertion_model->insertPorteFeuille($idprofil);
				
				$this->Insertion_model->insertMouvementPorteFeuille($idportefeuille,0.0,0.0);
				redirect('Lien/page/regime');
			}
		} else {
			redirect('Lien/page/objectif');
		}
	}

	public function login()
	{
		$this->load->model('Utilisateur_model');

		$email = $this->input->get('email');
		$mot_de_passe = $this->input->get('mot_de_pass');
		$user_id = $this->Utilisateur_model->verificationLogin($email, $mot_de_passe);

		// Vérifier les informations de connexion
		if ($user_id){
			$this->session->set_userdata('idutilisateur', $user_id);
			redirect('Lien/page/index');
		} else {
			$data['error'] = "Identifiants de connexion invalides.";
			$this->load->view('login');
		}
	}
	public function deconnection()
	{
		// Vérifier si l'utilisateur est connecté
		if ($this->session->userdata('idutilisateur')) {
			// Détruire complètement la session
			$this->session->unset_userdata('idutilisateur');
			redirect('Lien/link/login');
		} else {
			redirect('Lien/link/login');
		}
	}	

	public function insererDetailsUtilisateur()
	{
        $idutilisateur = $this->session->userdata('idutilisateur');
		$this->load->model('Insertion_model');
		
        
		$idregime = $this->input->get('idregime');
        $taille = $this->input->get('taille');
        $genre = $this->input->get('genre');
		$poids = $this->input->get('poids');
        $objectifpoids = $this->input->get('objectifpoids');
		
        if($taille < 100 || $poids <30 ){
			redirect('Lien/regime/regime');
            echo "Regler votre taille et poids";
        }
        else
        {
            $this->Insertion_model->insertDetailsUtilisateur($idutilisateur,$idregime,$genre,$taille,$poids,$objectifpoids);
            redirect("Lien/proposition/proposition?idregime=$idregime");
        }
	}

	public function supprimerRegime()
    {
		$idplat=$this->input->get('idplat');
		$idregime=$this->input->get('idregime');
		$this->db->query('delete from plat WHERE idplat='.$idplat);
		redirect("Lien/proposition/proposition?idregime=$idregime");
    }

	public function modifierRegime()
    {
		$idregime=$this->input->get('idregime');
		$idplat=$this->input->get('idplat');
		$data['idplat']=$this->db->query('select * from plat_regime WHERE idplat='.$idplat. ' and idregime='.$idregime)->result_array();
		$this->load->view('header');
		$this->load->view("modifier", $data);
		$this->load->view('footer');
    }
	public function insertupdate()
    {
		$idregime=$this->input->get('idregime');	

		$nom=$this->input->get('nom');
		$prix=$this->input->get('prix');
		$calori=$this->input->get('calori');
		$date=$this->input->get('date');
		$this->db->query("UPDATE plat_regime SET nomplat = '".$nom."', prix = '".$prix."', gain = '".$calori."', dureejour = '".$date."'"." WHERE nomplat="."'".$nom."'");
		
		$this->load->model('Selection_model');
		$id=$this->input->get('idregime');
		$data['plats']=$this->Selection_model->selectByIdRegime($id);

		$this->load->view('header');
		$this->load->view("proposition", $data);
		$this->load->view('footer');
    }
}