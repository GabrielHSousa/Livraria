<?php

    require_once('conta.php');
    require_once('livros.php');
    require_once('main.php');

    
    $cadastro = new conta("Joao", "123444490", "01/01/2010", "joaodolado.com","123666");  
    $client = new Livros("12345678910", "Saraiva");

    echo $cadastroCli->login($cadastro,"", "123");
    echo $livros->getTitulo();
    echo "<br><br> Quantidade do livro em estoque: ";
    echo $lojaSample->getUnid();

?>