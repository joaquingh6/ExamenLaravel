@extends('layouts.adminlayout')

@section('content')

<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Quick Example</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
				
				{{ Form::open(['route'=> 'post.store', 'file' => 'true']) }}

				@include('posts.partials.form')	

				{{ Form::close() }}
				

			</div>

		</div>

	</div>

@endsection