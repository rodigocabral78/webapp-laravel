@extends('layouts.app')

@section('content')
<div class="col-md-10">
	<div class="card">
		<div class="card-header">{{ __('Dashboard') }}</div>

		<div class="card-body">
			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
			@endif

			{{-- <div class="table-responsive"> --}}
			<table class="table table-striped table-hover">
				<caption>List of users</caption>
				<thead>
					<tr>
						<th scope="col"></th>
						<th scope="col">#</th>
						<th scope="col">CPF</th>
						<th scope="col">Matricula</th>
						<th scope="col">Nome</th>
					</tr>
				</thead>
				<tbody>

					@foreach ($servidores as $servidor)
					<tr>
						<td>
							<a href="{{ route('servidores.show', $servidor->id_servidor) }}">Ver</a> |
							<a href="{{ route('servidores.edit', $servidor->id_servidor) }}">Editar</a>
						</td>
						<th scope="row">{{ $servidor->id_servidor }}</th>
						<td>{{ $servidor->cpf }}</th>
						<td>{{ $servidor->matricula }}</th>
						<td>{{ $servidor->nome }}</th>
					</tr>
					@endforeach
				</tbody>
			</table>

			<div class="my-4">
				@if (isset($search))
				{{ $servidores->appends($search)->links() }}
				@else
				{{ $servidores->links() }}
				@endif
			</div>

			{{-- </div> --}}
		</div>

		<div class="card-footer">
			Card footer
		</div>
	</div>
</div>
@endsection
