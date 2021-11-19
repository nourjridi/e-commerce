<?php
class administrateur {
    protected  $nom_admin;
    protected  $login_admin;
    protected  $mot_de_passe_admin;
    protected  $id_admin;
    
    function set_nom_admin($nom_admin) {
        $this->nom_admin = $nom_admin;
      }
      function get_nom_admin() {
        return $this->nom_admin;
      }
      function set_login_admin($login_admin) {
        $this->login_admin = $login_admin;
      }
      function get_login_admin() {
        return $this->login_admin;
      }
      function set_mot_de_passe_admin($mot_de_passe_admin) {
        $this->mot_de_passe_admin= $mot_de_passe_admin;
      }
      function get_mot_de_passe_admin() {
        return $this->mot_de_passe_admin;
      } 
      function set_id_admin($id_admin) {
        $this->id_admin= $id_admin;
      }
      function get_id_admin() {
        return $this->id_admin;
      }
     
}
?>