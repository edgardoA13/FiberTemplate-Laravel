@extends('layouts.app-login')

@section('content')
<header>
		<div class="container-fluid">
			<div class="row allview d-flex">
				<div class="col-md-6 divForm align-self-md-center my-5 my-md-2">

                    <h1>                        
                        <strong>
                            <a class="title" href="/">Fiber</a>
                        </strong>                        
                    </h1>
					<h1 class="mt-4 mb-4 mt-md-5">Inicia Sesión en Fiber</h1>

					<form action="/login" method="POST" autocomplete="off" >	
						@csrf
						@include('layouts.partials.messages')					
						<div class="form-group mb-3 mb-md-4">
							<label for="email" class="font-weight-bold">Correo</label>
							<input class="form-control" type="text" name="email" id="email" placeholder="nombre@ejemplo.com">
						</div>
						<div class="form-group mb-3 mb-md-4">
							<label for="password" class="font-weight-bold">Contraseña</label>
                            <input class="form-control" type="password" name="password" id="password">							
						</div>						
                        <div class="row d-grip mx-auto">
                            <button class="btn btn-lg btn-primary mb-3">Iniciar</button>
                        </div>						
					</form>

					<div class="mt-md-3 text-center">
						<label class="text-center">¿No tienes una cuenta? <a href="/register" class="color-text">Regístrate</a></label>
					</div>					
				</div>

				<div class="col-md-6 banner text-center d-flex">
					<div class=" col-12 align-self-md-center">
						<img src="../images/Sign Up Image.png" class="img-fluid">
						<h3 class="text-white mt-4">Plantillas Incomparables</h3>
						<p class="text-white parrafo">Creadas por un equipo de diseñadores profesionales, nuestras plantillas no tienen parecido en el mercado.</p>
					</div>
					
				</div>
			</div>
		</div>
	</header>
@endsection