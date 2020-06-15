<?php
class Connexion // creation d'une classe avec de l'orienté objet pour la connexion toujours une Maj pour une classe. 
{

    private $file; // chemin du fichier avec les parametres de la DB.
    private $data;
    private $pdo; 
// ici je vais definir les parametres des constantes
    private $DBUSER; // constante toujours en MAJ 
    private $DBPASSWORD;
    private $DBNAME;
    private $DBHOST;


    public function __construct() // instancier par rapport au fichier 
    { 
        // ajouter ../ devant config pour faire marcher le chemin lors de la creation des tables
        $this->file = 'config/config.json'; // je vais chercher le fichier avec son chemin d'acces
        $this->data = json_decode(file_get_contents($this->file)); // json_decode va decoder le fichier. file_get_contents va ouvrir le fichier. 
        /*var_dump($this->data);*/

        $this->DBUSER = $this->data->database->user;  // je vais chercher dans le fichier json database puis user
        $this->DBPASSWORD = $this->data->database->password;
        $this->DBNAME = $this->data->database->dbName;
        $this->DBHOST = $this->data->database->host; 

        try{

            $connexion = new PDO("mysql:host={$this->DBHOST};dbname={$this->DBNAME};charset=UTF8",$this->DBUSER,$this->DBPASSWORD);
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            error_log("PDO est instancié");
            $this->pdo = $connexion;
        }
        catch (PDOException $exception){
            error_log("PDO non instancié: {$exception}");

        }

    }
    public function getPdo(): PDO 
    {
        return$this->pdo; // cette fonction va servir à se connecter au pdo de l'exterieur.

    }
}

?>