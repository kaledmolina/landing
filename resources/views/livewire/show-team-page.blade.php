<main>

<section class="page-header bg-tertiary">
	<div class="container">
		<div class="row">
			<div class="col-8 mx-auto text-center">
				<h2 class="mb-3 text-capitalize">Habilidades</h2>
				<ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
					<li class="list-inline-item"><a  wire:navigate href="{{route('home')}}">Inicio</a>
					</li>
					<li class="list-inline-item">/ &nbsp; <a href="#">Mis Habilidades</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="section teams">
		<div class="row justify-content-center">
			<section class="skills-section ">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h4 class="mb-3">Habilidades principales</h4>
                                <ul class="list-unstyled">
                                <li>✔️ Integracion API RESTful </li>
                                <li>✔️ Desarrollo de aplicaciones web con Laravel y Livewire</li>
                                <li>✔️ Frontend con Tailwind CSS y Alpine.js</li>
                                <li>✔️ Gestión de servidores y despliegues en AWS</li>
                                <li>✔️ Diseño de interfaces adaptables y optimización de UX</li>
                                <li>✔️ Desarrollo de interfaces dinámicas con React</li>
                                <li>✔️ Creación de aplicaciones móviles multiplataforma con Flutter</li>

                                </ul>
                            </div>                        
                    </div>
            </section>
		<div class="row position-relative justify-content-center ">

                @if ($members->isNotEmpty())

                    @foreach ($members as $member)
                    <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                      <x-team-card :member="$member"/>
                    </div>
                    @endforeach

                @endif


		</div>
	</div>
</section>
</main>
