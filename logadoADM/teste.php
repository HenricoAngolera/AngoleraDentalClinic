<?php
//include_once "cabecalho.php";
	include_once("conexao.php");
	$result_clientes = "SELECT * FROM cliente";
	$resultado_clientes = mysqli_query($conn, $result_clientes);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gerenciar Clientes</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Gerenciar Clientes</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<tr>
								<th>Nome do Cliente</th>
								<th>Email</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>
							<?php while($rows_clientes = mysqli_fetch_assoc($resultado_clientes)){ ?>
								<tr>
									<td><?php echo $rows_clientes['nome']. " ". $rows_clientes['sobrenome']; ?></td>
									<td><?php echo $rows_clientes['email']; ?></td>
									<td>
										<button type="button"  class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_clientes['Codigo']; ?>">Visualizar</button>
										<button type="button"  style="color: black;" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $rows_clientes['id']; ?>" data-whatevernome="<?php echo $rows_clientes['nome']; ?>" data-whateversobrenome="<?php echo $rows_clientes['sobrenome']; ?>" data-whateveremail="<?php echo $rows_clientes['email']; ?>" data-whatevercpf="<?php echo $rows_clientes['cpf']; ?>" data-whatevercep="<?php echo $rows_clientes['cep']; ?>" data-whatevertel="<?php echo $rows_clientes['tel']; ?>" data-whateverdata="<?php echo $rows_clientes['data']; ?>"  data-whateversexo="<?php echo $rows_clientes['sexo']; ?>"  >Editar</button>
										<?php
										echo "<a href='proc_apagar_usuario.php?id=" . $rows_clientes['Codigo'] . "' data-confirm='Tem certeza de que deseja excluir o item selecionado?'>"?>
										<button type="button" class="btn btn-xs btn-danger" style="margin-top: -45px; margin-left: -10px;">Apagar</button>
									</td>
								</tr>
								<!-- Inicio Modal -->
								<div class="modal fade" id="myModal<?php echo $rows_clientes['Codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<!-- <h4 class="modal-title text-center" id="myModalLabel"><?php// echo $rows_cursos['nome']; ?></h4> -->
											</div>
											<div class="modal-body">
												<p><?php echo"<b> Nome: </b>" . $rows_clientes['nome']; ?></p>
												<p><?php echo"<b> Sobrenome: </b>" . $rows_clientes['sobrenome']; ?></p>
												<p><?php echo"<b> Email: </b>" . $rows_clientes['email']; ?></p>
												<p><?php echo"<b> CEP: </b>" . $rows_clientes['cep']; ?></p>
												<p><?php echo"<b> CPF: </b>" . $rows_clientes['cpf']; ?></p>
												<p><?php echo"<b> Telefone: </b>" . $rows_clientes['tel']; ?></p>
												<p><?php echo"<b> Data de Nascimento: </b>" . $rows_clientes['data']; ?></p>
												<p><?php echo"<b> Sexo: </b>" . $rows_clientes['sexo']; ?></p>
											</div>
										</div>
									</div>
								</div>
								<!-- Fim Modal -->
							<?php } ?>
						</tbody>
					 </table>
				</div>
			</div>		
		</div>
		
		
		

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<!-- <h4 class="modal-title" id="exampleModalLabel">Curso</h4> -->
			  </div>
			  <div class="modal-body">
				<form method="POST" action="http://localhost/Teste TCC/processa.php" enctype="multipart/form-data">
				  <div class="form-group">
					<label for="recipient-name" class="control-label">Nome:</label>
					<input name="nome" type="text" class="form-control" id="recipient-name">
				  </div>
				  <div class="form-group">
					<label for="recipient-sobrenome" class="control-label">Sobrenome:</label>
					<input name="sobrenome" type="text" class="form-control" id="recipient-sobrenome">
				  </div>
				  	  <div class="form-group">
					<label for="recipient-email" class="control-label">Email:</label>
					<input name="email" type="text" class="form-control" id="recipient-email">
				  </div>
				  	  <div class="form-group">
					<label for="recipient-cep" class="control-label">CEP:</label>
					<input name="cep" type="text" class="form-control" id="recipient-cep">
				  </div>
				  	  <div class="form-group">
					<label for="recipient-cpf" class="control-label">CPF:</label>
					<input name="cpf" type="text" class="form-control" id="recipient-cpf">
				  </div>
				  	  <div class="form-group">
					<label for="recipient-tel" class="control-label">Telefone:</label>
					<input name="tel" type="text" class="form-control" id="recipient-tel">
				  </div>
				  	  <div class="form-group">
					<label for="recipient-data" class="control-label">Data de Nascimento:</label>
					<input name="data" type="text" class="form-control" id="recipient-data">
				  </div>
				  	  	  <div class="form-group">
					<label for="recipient-sexo" class="control-label">Sexo:</label>
					<input name="sexo" type="text" class="form-control" id="recipient-sexo">
					
				  </div>
				<input name="id" type="hidden" class="form-control" id="id-curso" value="">
				
				<button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-danger">Alterar</button>
			 
				</form>
			  </div>
			  
			</div>
		  </div>
		</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  var recipientnome = button.data('whatevernome')
		  var recipientsobrenome = button.data('whateversobrenome')
		  var recipientemail = button.data('whateveremail')
		  var recipientcep = button.data('whatevercep')
		  var recipientcpf = button.data('whatevercpf')
		  var recipienttel= button.data('whatevertel')
	  	  var recipientdata = button.data('whateverdata')
	  	  var recipientsexo = button.data('whateversexo')





			  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('ID ' + recipient)
		  modal.find('#id-curso').val(recipient)
		  modal.find('#recipient-name').val(recipientnome)
		  modal.find('#recipient-sobrenome').val(recipientsobrenome)
		  modal.find('#recipient-email').val(recipientemail)
		  modal.find('#recipient-cep').val(recipientcep)
		  modal.find('#recipient-cpf').val(recipientcpf)
		  modal.find('#recipient-tel').val(recipienttel)
		  modal.find('#recipient-data').val(recipientdata)
		  modal.find('#recipient-sexo').val(recipientsexo)
	
		  
		})
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="js/personalizado.js"></script>
  </body>
</html>