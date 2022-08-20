<?php

    session_start();

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '<pre/>';

    //remover indices do array de sessão
    //unset() espera o array é o indice a ser eliminado

    unset($_SESSION['x']); // para remover o indice apenas se ele existir

    echo '<pre>';
    print_r($_SESSION);
    echo '<pre/>';

    //destruir a variável de sessão
    //session_destroy() destroi todos os indíces contidos dentro da super global session

    session_destroy(); // será destruida
    // é necessário forçar um novo redirecionamento

    echo '<pre>';
    print_r($_SESSION);
    echo '<pre/>';
    */
    session_destroy();
    header('Location: index.php');

?>