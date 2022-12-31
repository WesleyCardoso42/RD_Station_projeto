<?php
    //var_dump($_POST);

    extract($_POST);
    //var_dump($_POST);
    $url = 'https://rdstation-signup-psel.herokuapp.com.';
    $ch = curl_init($url);
    
    //Dados a serem enviados via requisição POST
    $data = [
        $nome, 
        $email, 
        $telefone,
        $ocupacao,
        $senha,
        $site,
        $endereco_site
    ];
    
    var_dump($data);

$params = array('http'=>array('method'=>'post','content'=>http_build_query($data)));
$context= stream_context_create($params);
$stream= fopen($url, 'rb', false, $context);