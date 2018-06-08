
<div class="box-body">
                 <div class="form-group">
						{{ Form::label('name','Name') }}
						{{ Form::text('name',  isset($tag->name) ? $tag->name : null , ['class' => 'form-control'])}}
					</div>
                  
