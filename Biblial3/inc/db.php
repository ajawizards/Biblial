<?php

$pdo= new PDO('mysql:dbname=biblial;host=localhost','alexbiblial','projet2019aformac');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);


/* $pdo= new PDO('mysql:dbname=tuto-compte;host=localhost','root',''); */