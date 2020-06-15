<?php

$errors = [];

if(!array_key_exists('name', $_POST) ||$_POST['name'] == ''){

    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}

if(!array_key_exists('email', $_POST) ||$_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $errors['email'] = "Vous n'avez pas renseigné une adresse email valide";
}

if(!array_key_exists('message', $_POST) ||$_POST['message'] == ''){

    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

session_start();

if(!empty($errors)){
 
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: contact.php');

} else{

    $_SESSION['success'] = 1;
    $message= $_POST['message']; 
    $headers = 'FROM: alex.charlot18@gmail.com ';
    mail('jelen18@live.fr','Formulaire de contact', $message, $headers);
    header('Location: contact.php');
}

var_dump($errors);
die();
