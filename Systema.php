<?php
    require_once("autoload.php"); 

    $objUsuario = new Usuario() ; 

    //$insert = $objUsuario->insertUsuario("Wilmer Martín","874520125","wilmer@gmail.com");
    //echo $insert ; 
    //Esto es para todos ustedse 
    $listUsers = $objUsuario->listUsers();
    print_r("<pre>");
    print_r($listUsers);
    Print("Esto es para el git");
    print("Esto se tiene que poder"); 
    print_r("</pre>");
    
?>