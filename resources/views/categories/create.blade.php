@extends('layouts.adminlayout')

@section('content')
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Crear Categorias</h3>
  </div>

  {{ Form::open(['route'=> 'category.store', 'file' => 'true']) }}

        @include('categories.partials.form') 



      <div class="box-footer">
       <button type="submit" class="btn btn-info pull-right">Crear</button>
     </div>

  {{ Form::close() }}

  
 </div>
 @endsection