@extends('layouts.app')

@section('content')
<!-- Participar section -->
<div class="section scrollspy" id="contact">
    <div class="container">
        <div class="row">
            <h2>Participar</h2>
            <div class="col s12 m12">
                <p class="flow-text center-align">
                    Sé parte de nosotros, participa como parte del equipo de organización en nuestro evento.
                    Hay varias áreas de trabajo en las que puedes postular de acuerdo a tus aptitudes.
                </p>
            </div>
        </div>
    </div>

    <div class="row services">
        <div class="col s12 l4">
            <i class="fa fa-4x fa-cogs animated-color"></i>
            <div class="divider"></div>
            <h5>Producción - Logística</h5>
            <p>Organizaran estrategias y planificaran la logística del evento y actividades previas al evento externas e internas.</p>
        </div>
        <div class="col s12 l4">
            <i class="fa fa-4x fa-money animated-color"></i>
            <div class="divider"></div>
            <h5>Finanzas y Legal</h5>
            <p>Coordinaran las finanzas del evento: Análisis de factibilidad de temas dentro y fuera del evento. Organizaran, ejecutaran y controlaran los gastos que se generen en el evento.</p>
        </div>
        <div class="col s12 l4">
            <i class="fa fa-4x fa-certificate animated-color"></i>
            <div class="divider"></div>
            <h5>Marketing</h5>
            <p>Encargados de difundir, comunicar y promocionar TEDxUMSA 2018. Son responsables de la marca de TEDxUMSA ante los participantes y patrocinadores. Debe de tener excelentes habilidades de comunicación, ser flexible y rápido en la adaptación a cambios y/o problemas.</p>
        </div>
    </div>

    <div class="row services">
        <div class="col s12 l4">
            <i class="fa fa-4x fa-thumbs-up animated-color"></i>
            <div class="divider"></div>
            <h5>Relaciones Externas</h5>
            <p>Encargados de crear contactos con empresas para generar convenios y auspicios a largo plazo para el evento TEDxUMSA 2018.</p>
        </div>
        <div class="col s12 l4">
            <i class="fa fa-4x fa-clipboard animated-color"></i>
            <div class="divider"></div>
            <h5>Curaduría</h5>
            <p>Encargados de seleccionar a los expositores para el evento, colaborando con ellos para la preparación de su charla, revisando que cumpla con las normativas de TED y este en función a las temáticas de TEDxUMSA 2018.</p>
        </div>
        <div class="col s12 l4">
            <i class="fa fa-4x fa-camera animated-color"></i>
            <div class="divider"></div>
            <h5>Media</h5>
            <p>Encargados de la creación de material escrito, visual, sonoro y audiovisual para el día del evento y su promoción. Requiere habilidades creativas de expresar ideas, emociones y deseos mediante el uso equipos y herramientas de edición de videos y diseño digital, tanto como una excelente redacción e interacción para captar historias.</p>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
            <div class="description-ball"></div>
            <div class="description center-align">
                <div class="row h4-row">
                    <h4 class="centre-line">
                        <span>
                            <a href="https://goo.gl/forms/2J916hjAHT0LwVqE3" target="_blank">
                                <b>Haz click aqui para postular</b>
                            </a>
                        </span>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra_js')
<script type="text/javascript">
    $('.button-collapse').sideNav({

    // Change navbar tab color when active
	$(this).siblings('li').removeClass('active');
	$(".participar").addClass('active');
</script>
@endsection
