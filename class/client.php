<?php
class Client {
    protected  $nom_clt;
    protected  $prenom_clt;
    protected  $adresse_clt;
    protected  $email_clt;
    protected  $mot_de_passe_clt;
    protected  $id_clt;
    protected $num_tel_clt;
    function __construct($id_clt,$nom_clt,$prenom_clt,$adresse_clt,$email_clt,$mot_de_passe_clt,$num_tel_clt) {
        $this->$id_clt = $id_clt;
        $this->$nom_clt = $nom_clt;
        $this->$prenom_clt = $prenom_clt;
        $this->$adresse_clt = $adresse_clt;
        $this->$email_clt = $email_clt;
        $this->$mot_de_passe_clt = $mot_de_passe_clt;
        $this->$num_tel_clt = $num_tel_clt;
      }
    function set_nom_clt($nom_clt) {
        $this->nom_clt = $nom_clt;
      }
      function get_nom_clt() {
        return $this->nom_clt;
      }
      function set_prenom_clt($prenom_clt) {
        $this->prenom_clt = $prenom_clt;
      }
      function get_prenom_clt() {
        return $this->prenom_clt;
      }
      function set_adresse_clt($adresse_clt) {
        $this->adresse_clt = $adresse_clt;
      }
      function get_adresse_clt() {
        return $this->adresse_clt;
      }
      function set_email_clt($email_clt) {
        $this->email_clt = $email_clt;
      }
      function get_email_clt() {
        return $this->email_clt;
      }
      function set_mot_de_passe_clt($mot_de_passe_clt) {
        $this->mot_de_passe_clt= $mot_de_passe_clt;
      }
      function get_mot_de_passe_clt() {
        return $this->mot_de_passe_clt;
      } 
      function set_id_clt($id_clt) {
        $this->id_clt= $id_clt;
      }
      function get_id_clt() {
        return $this->id_clt;
      }
      function set_num_tel_clt($num_tel_clt) {
        $this->num_tel_clt = $num_tel_clt;
      }
      function get_num_tel_clt() {
        return $this->num_tel_clt;
      }
}
