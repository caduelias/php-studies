<?php

require_once("config.php");

use Cliente\Cadastro;

    $cad = new Cadastro();
    
    $cad->setNome("Cliente");
    $cad->setEmail("cliente.email.com");
    $cad->setSenha("001");

    $cad->registrarCliente();
    echo "<br>";
    $cad->enviarEmail();
   
?>