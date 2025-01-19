<main>

<section class="page-header bg-tertiary">
	<div class="container">
		<div class="row">
			<div class="col-8 mx-auto text-center">
				<h2 class="mb-3 text-capitalize">Contacto</h2>
				<ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
					<li class="list-inline-item"><a wire:navigate href="{{route('home')}}">Inicio</a>
					</li>
					<li class="list-inline-item">/ &nbsp; <a href="#">Contactanos</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
</section>

<section class="section">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<p class="text-primary text-uppercase fw-bold mb-3">CONTACTAR CON NOSOTROS</p>
					<h1>Vamos a conctarnos</h1>
					<p>Ingresa tus datos para asi poder contactarnos</p>
				</div>
			</div>
			<div class="col-lg-10">
				<div class="shadow rounded p-5 bg-white">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif
					<div class="row">
						<div class="col-12 mb-4">
							<h4>Déjanos un mensaje</h4>
						</div>
						<div class="col-lg-6">
							<div class="contact-form">
								<form wire:submit ="submit" >
									<div class="form-group mb-4 pb-2">
										<label for="name" class="form-label">   Nombre Completo</label>
										<input wire:model="name"  type="text" class="form-control shadow-none @error('name') is-invalid @enderror " id="nama" name="name">
                                        @error('name')
                                        <p class="invalid-feedback">{{$message}}</p>
                                        @enderror
									</div>
									<div class="form-group mb-4 pb-2">
										<label for="email" class="form-label"> Correo Electronico</label>
										<input  wire:model="email" type="email" class="form-control shadow-none @error('email') is-invalid @enderror " id="email" name="email">
                                        @error('email')
                                        <p class="invalid-feedback">{{$message}}</p>
                                        @enderror
									</div>
									<div class="form-group mb-4 pb-2">
										<label for="message" class="form-label">Deja tu mensaje..</label>
										<textarea wire:model="message" class="form-control shadow-none" id="message" name="message" rows="3"></textarea>
									</div>
                                    
									<button class="btn btn-primary w-100" type="submit">Enviar mensaje</button>
								</form>
							</div>
						</div>
						<div class="col-lg-6 mt-5 mt-lg-0">
							<div class="contact-info">
								<div class="block mt-0">
                                	<h4 class="h5">¿Tienes Preguntas?</h4>
                                	<div class="content">
                                		Contáctanos, ¡estamos aquí para ayudarte!
                                		<br>Teléfono: <a href="tel:+573004200048">+57 300 420 0048</a>
                                		<br>Email: <a href="mailto:kaledmoly@gmail.com">kaledmoly@gmail.com</a>
                                		<br>Horario de atención:
                                		<br>Lunes a sábado, de 7:00 AM a 6:00 PM
                                	</div>
                                </div>
                                <div class="block mt-4">
                                	<h4 class="h5">Área de Servicio</h4>
                                	<div class="content">
                                		Operamos de forma remota y ofrecemos nuestros servicios a clientes de cualquier parte del mundo. ¡No dudes en contactarnos!
                                	</div>
                                </div>

								<div class="block">
									<ul class="list-unstyled list-inline my-4 social-icons">
										<li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black" target="_blanck" href="https://twitter.com/kaledmoly"><i class="fab fa-twitter"></i></a>
										</li>
										<li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black" target="_blanck" href="https://www.tiktok.com/@kaledmoly"><i class="fab fa-tiktok"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</main>
