<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" class="tabela">
        <thead>
            <tr>
                <th> CPF </th>
                <th> Nome </th>
                <th> E-mail </th>
                <th> Telefone</th>
                <th> Usuário </th>
                <th colspan="5"> Ações </th>
            </tr>
        </thead>
        <tbody>
        <?php
                        include_once("lista.php");
                        if(!empty($lista_usuarios)){
                            foreach($lista_usuarios as $linha){
                                echo ' <tr>
                                        <td> '.$linha['CPF'] .' </td>
                                        <td> '.$linha['Nome'] .' </td>
                                        <td> '.$linha['Email'] .' </td>
                                        <td> '.$linha['Telefone'] .' </td>
                                        <td> '.$linha['Usuario'] .' </td>
                                        <td> <a href="excluir.php?id='.$linha['CPF'].'"> Excluir <a> </td>
                                        <td> <a href="alterar_usuario.php?id='.$linha['CPF'].'"> Alterar <a> </td>
                                    </tr>
                                ';
                            }
                        }
                    ?>

        </tbody>
    </table>
</body>
</html>