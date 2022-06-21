<?php
    if (isset($_POST['mailUsuario']) && isset($_POST['senhaUsuario'])) {
        include 'conectaBanco.php';

        $mailUsuario = $_POST['mailUsuario'];
        $senhaUsuario = $_POST['senhaUsuario'];
        $senhaUsuario = MD5($senhaUsuario);

        $sqlUsuario = "SELECT codigoUsuario, nomeUsuario FROM usuarios WHERE mailUsuario = :mailUsuario
                        AND senhaUsuario = :senhaUsuario LIMIT 1";

        $sqlUsuarioST = $conexao->prepare($sqlUsuario);
        $sqlUsuarioST->bindVAlue(':mailUsuario', $mailUsuario);
        $sqlUsuarioST->bindVAlue(':senhaUsuario', $senhaUsuario);
        $sqlUsuarioST->EXECUTE();
    }
    else { //senha incorreta

    }
?>