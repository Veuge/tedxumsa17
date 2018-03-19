@extends('layouts.app')

@section('content')
<!-- Participar section -->
<div class="section scrollspy" id="contact">
    <div class="container">
        <div class="row">
            <h2>Participar</h2>
            <div class="col s12 m12">
                <p class="flow-text center-align">
                    Cada año TEDxUMSA lanza una convocatoria abierta para los interesados en <b>organizar</b> este evento. Sé parte del equipo organizador participando como <b>voluntario</b> en alguna de las áreas de coordinación del evento. 
                    <br>
                    <br>
                    En cada una de estas áreas podrás <b>explorar</b>, <b>aprender</b> así como <b>demostrar</b> tus habilidades y     conocimientos. Así que te invitamos a informarte acerca de nuestras áreas de trabajo y postular si te encuentras interesado.
                </p>
            </div>
        </div>
    </div>

    <div class="row services">
        <div class="col s12 l4">
            <i class="fa fa-4x fa-cogs animated-color"></i>
            <div class="divider"></div>
            <h5>Producción - Logística</h5>
            <p>Planificar y organizar los recursos necesarios para realizar las diferentes actividades de la organización para el evento TEDxUMSA, además de coordinar las actividades de logística a nivel externo e interno con respecto al evento.</p>
        </div>
        <div class="col s12 l4">
            <i class="fa fa-4x fa-money animated-color"></i>
            <div class="divider"></div>
            <h5>Finanzas y Legal</h5>
            <p>Dirigir y administrar los recursos financieros de la organización TEDxUMSA, además de atender los asuntos legales respecto a las actividades de la organización, normas internas y a su relación con otras entidades.</p>
        </div>
        <div class="col s12 l4">
            <i class="fa fa-4x fa-certificate animated-color"></i>
            <div class="divider"></div>
            <h5>Marketing</h5>
            <p>Planificar, difundir y promocionar las diferentes actividades de TEDxUMSA, además de ser responsables del posicionamiento del evento con los auspiciadores como con sus seguidores en redes sociales como en la pagina web.</p>
        </div>
    </div>

    <div class="row services">
        <div class="col s12 l4">
            <i class="fa fa-4x fa-thumbs-up animated-color"></i>
            <div class="divider"></div>
            <h5>Relaciones Externas</h5>
            <p> Establecer y mantener contacto con instituciones privadas y publicas en La Paz para hacer conocer los objetivos de TEDxUMSA y así lograr convenios para la realización del evento a través de auspicios y/o patrocinios.</p>
        </div>
        <div class="col s12 l4">
            <i class="fa fa-4x fa-clipboard animated-color"></i>
            <div class="divider"></div>
            <h5>Curaduría</h5>
            <p>Buscar, contactar y segmentar a los posibles expositores para el evento TEDxUMSA, además de realizar curaduría a la charla de cada expositor para que se cumplan las condiciones y objetivos de una charla TED y del TEDxUMSA.</p>
        </div>
        <div class="col s12 l4">
            <i class="fa fa-4x fa-camera animated-color"></i>
            <div class="divider"></div>
            <h5>Media</h5>
            <p>Crear, editar material visual, sonoro, escrito y audiovisual para las actividades internas y externas del TEDxUMSA mediante el uso de equipos y herramientas de edición de imágenes y vídeos.</p>
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
                                <b>Postulate aquí</b>
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
