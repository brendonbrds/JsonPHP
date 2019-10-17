<?php

    $json_str = '{"produtos": '. '[
        {"nome":"Samsung ali", "quantidade": '. 1 .' },'.
        '{"nome":"notebook hp", "quantidade": '. 1 .'}'.                
    ']}';
    
//faz o parsing da string, criando o array "produtos"
$jsonObj = json_decode($json_str);
$produtos = $jsonObj->produtos;
 
//percorre o array, imprimindo cada produto
foreach ( $produtos as $product ) {
        echo "Nome: $product->nome <br> Quantidade: $product->quantidade<br>"; 
    }

    // json simples

    // $json_str = '{
    //     "nomecliente":"Cristiano",
    //     "email":"cristiano_3b@yahoo.com.br",
    //     "telefone":"16991337891",
    //     "mensagem":"rerwerewrwerewr" 
    //   }';
    
    // // faz o parsing na string e gera um obj php
    // $obj = json_decode($json_str);
    // //imprime o conteúdo do objeto 
    // echo "Nome: $obj->nomecliente<br>";
    // echo "Email: $obj->email<br>";
    // echo "Tel: $obj->telefone<br>";
    // echo "Msg: $obj->mensagem<br>";
?>