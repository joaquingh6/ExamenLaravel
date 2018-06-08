

<header class="space-inter">
    <div class="container container-flex space-between">
        <figure class="logo"><img src="{{asset('img/logo.png')}}" alt=""></figure>
        <nav class="custom-wrapper" id="menu">
            <div class="pure-menu"></div>
            <ul class="container-flex list-unstyled">

              <li><a href="/" class="text-uppercase">Home</a></li>
              <li><a href="/post" class="text-uppercase">Posts</a></li>
              @guest
              <li><a href="{{route('login')}}" class="text-uppercase">Login</a></li>

              @elseif ( Auth::user()->roles[0]['name'] == 'Administrador' )

                <li><a href="{{route('admin')}}" class="text-uppercase">Admin</a></li>

            	@endif

            	@if (isset(Auth::user()->roles[0]['name']))
            
             	<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">
              	<i class="fa fa-bell-o"></i>
              	<span class="label label-warning"><?=(isset($messages))? $messages : '0' ;?></span>
            	</a></li>
             
             	<li><a href="{{route('perfil')}}" class="text-uppercase">Perfil</a></li>
               {!!Form::open(['route'=>['logout'] , 'method'=>'POST' , 'class'=> 'uppercase']) !!}
                 <button class="btn btn-sn btn">Cerrar Sesion</button>
                {!!Form::close()!!}


         		@endif

    </ul>
</nav>
</div>
</header>