@extends('layouts.front-app')

@section('content')
    <!--*************************HEADER*****************************-->
	<header>
		<div class="container py-4">
			<div class="row mb-md-5 d-flex">
				<div class="col-12 col-md-6 text-center order-md-1">
					<img src="images/hero-Illustration.png" class="img-fluid img-principal">
				</div>
				<article class="col-12 col-md-6 my-4 px-5 px-md-4 align-self-md-center">
					<h1><strong>Crea tu portafolio en minutos</strong></h1>
					<p>Con Fiber, tú puedes configurar tu propio portafolio personal en minutos con docenas de hermosas plantillas prefabricadas.</p>

					<div class="row text-center d-flex">
						<div class="col-12 col-md-auto">
							<a href="/login" class="btn btn-block btn-lg btn-primary mb-3 mb-md-0"><strong>Comenzar prueba gratis</strong></a>
						</div>
						<div class="col-12 col-md-auto align-self-md-center">
							<a href=""><strong>Ver Ejemplos</strong></a>
						</div>
					</div>

					<div class="row mt-4">
						<div class="col-12 col-md-auto">
							<p><img src="images/Checkmark.svg" class="me-2">No se require tarjeta de crédito</p>
						</div>
						<div class="col-12 col-md-auto">
							<p><img src="images/Checkmark.svg" class="me-2">10 plantillas gratis</p>
						</div>
					</div>
					
				</article>
			</div>
		</div>
	</header>

	<!--*************************POR QUE FIBER*****************************-->
	<section class="why-fiber">
		<div class="container my-5 px-5 py-3">
			<div class="row">
				<div class="col-12 w-fiber">
					<h5><strong>¿Por qué Fiber?</strong></h3>
					<h1><strong>Un buen portafolio significa buena empleabilidad</strong></h1>
				</div>				
			</div>
			<div class="row">
				<article class="col-12 col-md-4 pr-md-2 mt-4">
					<img src="images/time.svg" class="mb-3">
					<h4><strong>Construlle en minutos</strong></h4>
					<p>Con una selección de plantillas prefabricadas, puedes contruir tu portafolio en menos de 10 minutos.</p>
				</article>
				<article class="col-12 col-md-4 pr-md-2 mt-4">
					<img src="images/code.svg" class="mb-3">
					<h4><strong>Agrega CSS personalizado</strong></h4>
					<p>Personaliza tu portafolio personal aún más con la capacidad de agregar sus propios estilos css personalizados.</p>
				</article>
				<article class="col-12 col-md-4 pr-md-2 mt-4">
					<img src="images/allSizes.svg" class="mb-3">
					<h4><strong>Responsive</strong></h4>
					<p>Todas las plantillas de Fiber son totalmente responsivas para garantizar que la experiencia sea impecable en todos los dispositivos.</p>
				</article>
			</div>
		</div>
	</section>

	<!--*************************DIVERSIFICA TU PORTAFOLIO*****************************-->
	<section class="diversifica">
		<div class="container px-5">
			<div class="row bg-primary pt-5 px-5 text-white border-rounded d-flex">
				<article class="col-12 col-md-6 pb-5 align-self-md-center">
					<h2>Diversifica tu portafolio</h2>
					<p>Cree una cartera aún más impresionante mediante la creación de estudios de casos para sus proyectos. Simplemente siga nuestra guía paso a paso.</p>
					<div class="row">
						<div class="col-12">
							<a href="/login" class="btn btn-lg btn-light"><strong>Prueba gratis</strong></a>
						</div>						
					</div>					
				</article>
				<div class="col-12 col-md-6">
					<img src="images/Page Image.png" class="img-fluid img-muestra">
				</div>
			</div>
		</div>
	</section>

	<!--*************************CLIENTES*****************************-->
	<section>
		<div class="container my-5 py-5 px-5">
			<div class="row">
				
				<article class="col-12 col-md-4 mb-5 mb-md-0">
					<div class="card h-100">
						<div class="card-body">
							<div class="row">
								<div class="col-2">
									<img src="images/User Avatar.svg">
								</div>
								<div class="col-10 ps-5">
									<h6 class="card-title"><strong>Sarah Andrews</strong></h6>
									<h6 class="card-subtitle">$100k en ingresos</h6>
								</div>
							</div>
							<div class="row">
								<p class="card-text pt-4 h-100">Configurar mi cartera con Fiber no tomó más de 10 minutos. Desde entonces, mi cartera ha atraído a muchos clientes y me generó más de $100k.</p>
							</div>
						</div>
						<div class="card-footer bg-transparent">
							<a href="" class="btn btn-outline-secondary d-grip gap-2 mx-auto">Ver portafolio</a>
						</div>
					</div>
				</article>				

				<article class="col-12 col-md-4 mb-5 mb-md-0">
					<div class="card h-100">
						<div class="card-body">
							<div class="row">
								<div class="col-2">
									<img src="images/User Avatar 2.svg">
								</div>
								<div class="col-10 ps-5">
									<h6 class="card-title"><strong>Mathew Higgins</strong></h6>
									<h6 class="card-subtitle">$20k en ingresos</h6>
								</div>
							</div>							
							<div class="row d-grip gap-2 mx-auto">
								<p class="card-text pt-4 h-100">He estado recibiendo MUCHOS clientes potenciales desde que usé las plantillas prefabricadas de Fiber, ahora solo necesito trabajar en mis estudios de casos y estaré listo para empezar.</p>
							</div>
						</div>
						<div class="card-footer bg-transparent">
							<a href="" class="btn btn-outline-secondary">Ver portafolio</a>
						</div>
					</div>
				</article>

				<article class="col-12 col-md-4 mb-5 mb-md-0">
					<div class="card h-100">
						<div class="card-body">
							<div class="row">
								<div class="col-2">
									<img src="images/User Avatar 32.svg">
								</div>
								<div class="col-10 ps-5">
									<h6 class="card-title"><strong>Janice Dave</strong></h6>
									<h6 class="card-subtitle">$30k en ingresos</h6>
								</div>
							</div>							
							<div class="row d-grip gap-2 mx-auto">
								<p class="card-text pt-4 h-100">Recién comencé a trabajar como freelance este año y ya he ganado más de lo que nunca gané en mi trabajo de tiempo completo. Las plantillas son simplemente increíbles.</p>
							</div>
						</div>
						<div class="card-footer bg-transparent">
							<a href="" class="btn btn-outline-secondary">Ver portafolio</a>
						</div>
					</div>					
				</article>
			</div>
		</div>
	</section>	
@endsection