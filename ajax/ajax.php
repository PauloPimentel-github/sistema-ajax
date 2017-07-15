<?php

// Sleep de um segundo para retornar os dados
sleep(1);

// Filtra os dados enviados via post
$getPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
// Limpa qualquer tipo de código ou tags, caso seja enviada pelo formulário
$setPost = array_map('strip_tags', $getPost);
// Elimina espaços caso tenha
$post = array_map('trim', $setPost);
// Retorna os dados no formato json
echo json_encode($post);
