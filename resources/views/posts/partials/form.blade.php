<div class="box-body">
					<div class="row">
					<div class="col-md-7">

						{{ Form::hidden('user_id', auth()->user()->id)}}

					<div class="form-group">
						{{ Form::label('name','Name') }}
						{{ Form::text('name',  isset($post->name) ? $post->name : null , ['class' => 'form-control'])}}
					</div>
					<div class="form-group">
						{{ Form::label('excerpt','Excerpt') }}
						{{ Form::text('excerpt', isset($post->excerpt) ? $post->excerpt : null , ['class' => 'form-control'])}}
					</div>
					<div class="form-group">
						{{ Form::label('body','Body') }}
						{{ Form::textarea('body', isset($post->body) ? $post->body : null , ['class' => 'form-control'])}}
					</div>
					
					<div class="form-group">
						{{ Form::label('file','File') }}
						{{ Form::file('file', null, ['class' => 'form-control'])}}
					</div>
				</div>
				<div class="col-md-4">
				<div class="form-group">

					<label>Tags</label>
					<br>

					{{ Form::label('tags','Etiquetas') }}
					<div>
					@foreach($tags as $tag)
					<label>
							{{ Form::checkbox('tags[]', $tag->id , isset($post->tags) ? collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : ''   : '') }} {{ $tag->name }}
					</label>

					@endforeach
					</div>
					
						
					
				</div>

				<div class="form-group">

                
                {{ Form::label('categories','Categorias') }}
               
                {{ Form::select('category_id', $categories,  ['class' => 'form-control'] )}}
 
              </div>

              <div class="form-group">
                  {{ Form::label('status','STATUS') }}
                
                 {{ Form::select('status', ['PUBLISHED' => 'PUBLISHED', 'DRAFT' => 'DRAFT'], isset($post->status) ? $post->status : null , ['class' => 'form-control'] )}}

              </div>
              <?php if (isset($post->file)):?>
              	<div class="form-group">
              	<img style="height: 9em;" src="<?= $post->file ?>" class="img-responsive" alt="...">
              </div>
              <?php endif; ?>
			</div>
			</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
