<<?php
namespace article;

class PdoConnect
{
    //faire la déclaration de variable de connexion
    public $host = 'localhost';
    public $dbname = 'basegites';
    public $user = 'root';
    public $pass = "";

    //la fonction est une methode , le fait qu'elle soit public , elle est accessible a l'interieur et a l'exterieur de la classe
    public function getPDO(){
        //fair le try catch pour la connexion ou l'erreur
        try {

            $baseGites = new PDO('mysql:host='.$this->host.';dbname=baseannonces'.$this->dbname.";charset=UTF8", $this->user, $this->pass);
            //faire la methode setAttribute de la classe PDO

            //Lance l'exception PDOException si une transaction a déjà démarrée ou que le pilote ne prend pas encharge les tansactions.
            $baseGites->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //afficher la page si la connexion marche bien

            echo "<h4 class='container alert alert-info text-center'>Vous êtes connectez a PDO MySQL</h4>";

            // Afficher le message d'erreur

        }catch (PDOException $exception){
            echo "<h4 class='container alert alert-info text-center'>Erreur de connexion à PDO</h4>";
        }

        //on retourne la variable $baseGites qui stock la connexion a PDO MySQL
        return $baseGites;
    }

}

