@extends('layouts.adminlayout')

@section('content')

 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <a href="/tag/create" class="btn btn-info pull-right">Crear</a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Borrar</th>
                  <th>Message</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  
                  <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>
                    {!!Form::open(['route'=>['user.destroy', $user->id] , 'method'=>'DELETE']) !!}
                    <button class="btn btn-sn btn-danger">Eliminar</button>
                    {!!Form::close()!!}
                  </td>
                  <td> <a href="{{route('message.edit' , $user->id)}}" class="btn btn-info pull-right">Crear</a></td>
                </tr>

                @endforeach
                  
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

@endsection