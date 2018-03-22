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
			<p>Deseja cadastrar um livro? <a href="{{url('/create')}}">Click aqui!</a></p>
		</div>
		<br>
		<div class="row">
			<h3>Lista de livros cadastrados</h3>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col" class="text-center">ID</th>
						<th scope="col">Livro</th>
						<th scope="col">Desrição</th>
						<th scope="col" class="text-center">Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($livros as $livro)
					<tr scope="row">
						<td class="text-center">{{ $livro->id }}</td>
						<td>{{ $livro->titulo }}</td>
						<td>{{ $livro->descricao }}</td>
						<td class="text-center">

							
							<form action="{{ url('/delete' , $livro->id) }}" method="post" class="col-12">
								{{ csrf_field() }}
								{{ method_field('delete') }}
								<a href="{{ url('/edit' , $livro->id) }}" class="btn btn-outline-info">Editar</a>
								<input type="hidden" name="method" value="DELETE">
								<input type="submit" value="Deletar" class="btn btn-outline-danger">
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
