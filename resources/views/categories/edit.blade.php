@extends('layouts.adminlayout')

@section('content')
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Editar Categorias</h3>
  </div>

  {!! Form::open(['route'=>['category.update', $category->id] , 'method'=>'PUT']) !!}

        @include('categories.partials.form') 

      <div class="box-footer">
       <button type="submit" class="btn btn-info pull-right">Editar</button>
     </div>

  {{ Form::close() }}
 </div>
 @endsection