<?php
class Fournisseur {
    protected  $nom_frs;
    protected  $adresse_frs;
    protected  $email_frs;
    protected  $mot_de_passe_frs;
    protected  $id_frs;
    protected $num_tel_frs;
    protected $fax_frs;
    function __construct($id_frs,$nom_frs,$adresse_frs,$email_frs,$mot_de_passe_frs,$num_tel_frs,$fax_frs) {
      $this->$id_frs = $id_frs;
      $this->$nom_frs = $nom_frs;
      $this->$adresse_frs = $adresse_frs;
      $this->$email_frs = $email_frs;
      $this->$mot_de_passe_frs = $mot_de_passe_frs;
      $this->$num_tel_frs = $num_tel_frs;
      $this->$fax_frs =$fax_frs;
    }
    function set_nom_frs($nom_frs) {
        $this->nom_frs = $nom_frs;
      }
      function get_nom_frs() {
        return $this->nom_frs;
      }
      function set_fax_frs($fax_frs) {
        $this->fax_frs = $fax_frs;
      }
      function get_fax_frs() {
        return $this->fax_frs;
      }
      
      function set_adresse_frs($adresse_frs) {
        $this->adresse_frs = $adresse_frs;
      }
      function get_adresse_frs() {
        return $this->adresse_frs;
      }
      function set_email_frs($email_frs) {
        $this->email_frs = $email_frs;
      }
      function get_email_frs() {
        return $this->email_frs;
      }
      function set_mot_de_passe_frs($mot_de_passe_frs) {
        $this->mot_de_passe_frs= $mot_de_passe_frs;
      }
      function get_mot_de_passe_frs() {
        return $this->mot_de_passe_frs;
      } 
      function set_id_frs($id_frs) {
        $this->id_frs= $id_frs;
      }
      function get_id_frs() {
        return $this->id_frs;
      }
      function set_num_tel_frs($num_tel_frs) {
        $this->num_tel_frs = $num_tel_frs;
      }
      function get_num_tel_frs() {
        return $this->num_tel_frs;
      }
}
?>