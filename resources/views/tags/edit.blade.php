@extends('layouts.adminlayout')

@section('content')
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Editar Categoria</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->

	
			 {!!Form::open(['route'=>['tag.update', $tag->id] , 'method'=>'PUT']) !!}

				@include('tags.partials.form')	
				<div class="box-footer">
				<button type="submit" class="btn btn-info pull-right">Crear</button>
			</div>

				{{ Form::close() }}





			<!-- /.box-body -->
			
			<!-- /.box-footer -->
		
	</div>

	@endsection