@extends('layouts.adminlayout')

@section('content')
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Enviar mensaje</h3>
            </div>
            
           
      {{ Form::open(['route'=> 'message.store', 'file' => 'true']) }}
               <div class="box-body">
                <div class="form-group">
            {{ Form::label('subject','SUBJECT') }}
            {{ Form::text('subject', isset($message->subject) ? $message->subject : null , ['class' => 'form-control'])}}
          </div>

              <div class="form-group">
            {{ Form::label('body','Body') }}
            {{ Form::textarea('body', isset($message->body) ? $message->body : null , ['class' => 'form-control'])}}
          </div>


            {{ Form::hidden('user_id', $user_id)}}

                
                

            
           
             </div>
                  
                                <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Crear</button>
              </div>
          
              <!-- /.box-footer -->
              {{ Form::close() }}
          </div>
@endsection