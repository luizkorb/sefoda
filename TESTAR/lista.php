<?php
        include_once("conecta.php");
        
        $comando = $pdo->prepare("SELECT * FROM cadastro_bombeiro;");
        $comando->execute();
        
        
        if ($comando->rowCount() >= 1) {
            $lista_usuarios = $comando->fetchAll();
        } else {
            echo '';
        }
        
        unset($pdo);
        unset($comando);

        if (isset($_POST["excluir"])) {

            $comando = $pdo->prepare("DELETE FROM cadastro_bombeiro WHERE cpf=\"$cpf\"");
            $resultado = $comando->execute();
            
            header("Location: index.php");
        
        }
        
        ?>