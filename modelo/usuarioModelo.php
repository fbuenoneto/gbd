<?php

function adicionarCliente($nome,$logradouro,$numero,$complemento,$bairro,$CEP,$cidade,$UF,$IE){
$sql= "CALL sp_adicionar_cliente('$nome','$logradouro','$numero','$complemento','$bairro','$CEP','$cidade','$UF','$IE')";
$resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Usuario cadastrado com sucesso!'; 
}

function deletarCliente($IDCliente){
$sql= "CALL sp_deletar_cliente($IDCliente)";
$resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'Usuario deletado com sucesso!'; 
}
