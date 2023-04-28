<?php

function est_connecter (): bool {
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['connecte']);
}

function administrateur_connecter (): void{
    if(!est_connecter()){
        header('Location: /connexion');
        exit();
    }
}
