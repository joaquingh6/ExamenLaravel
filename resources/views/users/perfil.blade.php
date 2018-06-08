@extends('layouts.layout')

@section('content')

	
<section class="pages container">
	<div class="page page-contact">
		<h1 class="text-capitalize">PERFIL</h1>
		<?php //foreach ($user as $u): ?>

			<p><strong>NOMBRE: <span style="margin-left: 20px;">{{$user->name}}</span></strong> </p>

			<p><strong>EMAIL: 	<span style="margin-left: 20px;">{{$user->email}}</span></strong> </p>


		<?php //endforeach ?>


	
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
					
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					<form action="post/store" method="POST">
						<div class="form-group">
						<label ><strong>INSCRIPCION</strong></label>
						<input type="name" name="keycourse">
						</div>

					<div class="box-footer">
					<button type="submit" class="btn btn-primary">Enviar</button>
					</div>




					</form>

				</div>

			
	</div>
</section>


@endsection