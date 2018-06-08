
    <div class="box-body">
  

        <div class="form-group">
            {{ Form::label('name','Name') }}
            {{ Form::text('name',  isset($category->name) ? $category->name : null , ['class' => 'form-control'])}}
        </div>
          <div class="form-group">
            {{ Form::label('body','Body') }}
            {{ Form::textarea('body', isset($category->body) ? $category->body : null , ['class' => 'form-control'])}}
          </div>