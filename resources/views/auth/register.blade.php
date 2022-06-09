@extends('layouts.app-register')

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
                
					<h1 class="mb-4 mb-md-4 mt-5 mt-md-5">Crea tu cuenta Fiber</h1>					

					<form id="/register" method="POST" autocomplete="off">
						@csrf
						@include('layouts.partials.messages')	
						<div class="form-group mb-3 mb-md-4">
							<label for="name" class="font-weight-bold">Nombre</label>
							<input class="form-control" type="text" name="name" id="name" placeholder="John Doe">
						</div>
						<div class="form-group mb-3 mb-md-4">
							<label for="email" class="font-weight-bold">Correo</label>
							<input class="form-control" type="email" name="email" id="email" placeholder="nombre@ejemplo.com">
						</div>
						<div class="form-group mb-3 mb-md-4">
							<label for="password" class="font-weight-bold">Contraseña</label>
                            <input class="form-control" type="password" name="password" id="password">
						</div>
                        <div class="form-group mb-3 mb-md-4">
							<label for="password-confirmation" class="font-weight-bold">Confirmar contraseña</label>
                            <input class="form-control" type="password" name="password-confirmation" id="password-confirmation">
						</div>

						<!-- <div class="form-check mb-3 mb-md-4">
						    <input class="form-check-input" type="checkbox" id="formCheck" name="formChek">
						    <label class="form-check-label" for="inlineFormCheck">
						      Al crear tu cuenta en Fiber, aceptas los <a href="" class="terminos">Términos y condiciones.</a>
						    </label>
						</div> -->
                        <div class="row d-grip mx-auto">
                            <button type="submit" class="btn btn-lg btn-primary mb-3 mb-mb-0">Crear cuenta Fiber</button>
                        </div>
						
					</form>

					<div class="mt-md-3 text-center mb-5 mb-md-0">
						<label class="text-center">¿Ya tienes una cuenta? <a href="/login" class="link_login">Inicia Sesión</a></label>
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