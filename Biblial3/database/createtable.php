<?php
    try {

        require_once "../config/connexion.php";
        $connexion=new Connexion();
        $pdo=$connexion->getPdo();

        echo 'Je suis connecté à la base de donnée';

        $request = "CREATE TABLE IF NOT EXISTS roles (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            roleName VARCHAR (255) NOT NULL
            )"; 
            $pdo->exec($request);

        $request = "CREATE TABLE IF NOT EXISTS auteurs(
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR (255)
        )";
        $pdo->exec($request);
        
        echo 'table auteurs créee';

        $request = "CREATE TABLE IF NOT EXISTS users(
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR (255),
            email VARCHAR (255),
            password VARCHAR (255),
            confirmation_token VARCHAR (60),
            confirmed_at DATETIME,
            roles_id INT,
            FOREIGN KEY (roles_id) REFERENCES roles(id)

        )";
        $pdo->exec($request);

        echo 'table users créee';

        $request = "CREATE TABLE IF NOT EXISTS editeurs (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR (255)
        )";
        $pdo->exec($request);

        echo 'table editeurs créee';

    $request = "CREATE TABLE IF NOT EXISTS livres(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        titre VARCHAR (255),
        Numero_du_tome INT (4),
        Nombres_de_pages INT (50),
        date_publication DATE,
        resum TEXT,
        img TEXT,
        isbn VARCHAR (20)
        )";
        $pdo->exec($request); 

        echo 'table livres créee';

    $request = "CREATE TABLE IF NOT EXISTS auteurs_livres(
        auteurs_id INT,
        livres_id INT,
        FOREIGN KEY (auteurs_id) REFERENCES auteurs(id),
        FOREIGN KEY (livres_id) REFERENCES livres(id)
        )";
        $pdo->exec($request); 

        echo 'table auteurs_livres créee';

    $request = "CREATE TABLE IF NOT EXISTS editeurs_livres(
        editeurs_id INT,
        livres_id INT,
        FOREIGN KEY (editeurs_id) REFERENCES editeurs(id),
        FOREIGN KEY (livres_id) REFERENCES livres(id)
        )";
        $pdo->exec($request); 

        echo 'table editeurs_livres créee';

    $request = "CREATE TABLE IF NOT EXISTS users_livres(
        users_id INT,
        livres_id INT,
        FOREIGN KEY (users_id) REFERENCES users(id),
        FOREIGN KEY (livres_id) REFERENCES livres(id)
        )";
        $pdo->exec($request); 

        echo 'table users_livres créee';

    } catch (PDOException $error) {
        die($error);
    }



    $request = $pdo->prepare("INSERT INTO roles (id, roleName) VALUES (:id,:roleName)");
    $request->bindParam(':id', $id);
    $request->bindParam(':roleName',$name);

        $id = '1';
        $name = 'membre';
        $request->execute();

        $id = '2';
        $name = 'admin';
        $request->execute();

?>