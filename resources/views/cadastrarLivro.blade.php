<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Biblioteca.com</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>

	<div class="container">
		<div class="row">
			<h1>CadastroLivro.com</h1>
		</div>
		<div class="row">
			<p>Para listar os livros cadastrados, <a href="{{url('/')}}">Click aqui!</a></p>
		</div>
		<br>
		<div class="row">
			<h3>Cadastrar livros</h3>
		</div>
	</div>

	@if(session('success'))
	<div class="container">
		<div class="row">
			<div class="alert alert-success alert-dismissible fade show col-12" role="alert">
				{{ session('success') }}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>
	@endif

	<div class="container">
		<div class="row">
			<form action="{{ url('/create') }}" method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="titulo">Título:</label>
					<input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="titleHelp" required>
					<small id="titleHelp" class="form-text text-muted">Defina o título para seu livro.</small>
				</div>
				<div class="form-group">
					<label for="descricao">Descrição:</label>
					<input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="descricaoHelp" required>
					<small id="descricaoHelp" class="form-text text-muted">Defina o descrição para seu livro.</small>
				</div>
				<!-- 
				<div class="form-group">
				<label for="data_lancamento">Data de lançamento</label>
				<input type="text" class="form-control" id="data_lancamento" aria-describedby="dataLancamentoHelp">
				<small id="dataLancamentoHelp" class="form-text text-muted">Defina o data de lançamento para seu livro.</small>
				</div> 
				-->
				<button type="submit" class="btn btn-primary">CADASTRAR</button>
			</form>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
