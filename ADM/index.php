<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" href="adm.css">
</head>

<script type="text/javascript">
	
	
		function Listar(){
			// A variável "dados" conterá todos os campos do <form id="form1">
			var dados = $('#form1').serialize(); // TODOS OS CAMPOS DO <form> DEVEM TER 'name='
			
			$.ajax({
				type: "POST",
                url: "crud.php",
				data: dados,
				dataType: 'json',
				                
                success: function(meu_json)
				{
					
					var valores = meu_json;          // Vem do arquivo.php
					var lista = valores.empregados;  // Pega os dados dos "empregados"
                  
					for(x=0;x<lista.length;x++)
					{
						console.log(lista[x].nome);     // Lista cada nome dentro de "empregados"
						console.log(lista[x].cpf);    // Poderíamos usar innerHTML ou inserir
						console.log(lista[x].senha);     // linhas numa <table>
						console.log(lista[x].telefone);
						console.log(lista[x].email);
						console.log(lista[x].usuario);	
						console.log("  ");
					}
				},
				error: function(xhr, status, error) {
					// Aqui poderíamos preencher uma <div> com o innerHTML por exemplo
            		console.error('Ocorreu um erro ao enviar os dados: ' + error);
          		},
				beforeSend: function(xhr) {
					// Faz algo antes do envio, como exibir uma animação por exemplo.
				},
				complete: function(xhr, status) {
					// Faz algo após a conclusão, como ocultar uma animação por exemplo. 
					// Vai ser executado mesmo se ocorrer um erro.
				},
				timeout: 5000    // Define um tempo limite de 5 segundos (5000 milissegundos)
			});
			
			
		}
	</script>

<body>

<div class="cabecalho">
        <img src="menu.png" width="350px" class="menu">
    </div>    <br>
<div class="tudo">
    <h2>Inserir Dados</h2>
    <form action="crud.php" method="post" class="form">
        CPF: <br> <input type="text" name="cpf"  required><br>
        Email: <br> <input type="email" name="email"  required><br>
        Senha: <br> <input type="password" name="senha" required><br>
        Nome: <br> <input type="text" name="nome" required><br>
        Telefone: <br> <input type="text" name="telefone" required><br>
        Usuário: <br> <input type="text" name="usuario" required><br>
        <input type="submit" name="inserir" value="Inserir" class="button">
    </form>


    




    <h2>Excluir Dados</h2>
    <form action="crud.php" method="post" class="form">
        CPF do Bombeiro a ser excluído: <input type="cpf" name="cpf" required><br>
        <input type="submit" name="excluir" value="Excluir" class="button">
    </form>

    <form action="crud.php" method="get" class="form">
    CPF do Bombeiro a ser alterado: <input type="text" name="cpfAntigo" required><br><br>
    Novo CPF: <br> <input type="text" name="novoCpf" required><br>
    Novo Email: <input type="email" name="email" required><br>
    Nova Senha: <input type="password" name="senha" required><br>
    Novo Nome: <input type="text" name="nome" required><br>
    Novo Telefone: <input type="text" name="telefone" required><br>
    Novo Usuário: <input type="text" name="usuario" required><br>
    <input type="submit" name="alterar" value="Alterar" class="button">
</form>

    <h2>Listar Dados</h2>
    <form action="crud.php" method="get" class="form">
    <label for="nome">Filtrar por nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Digite um nome">

    
    <input type="submit" name="listar" value="Listar" class="button">
</form>







</table>

</body>
</html>