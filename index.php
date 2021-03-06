<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/css/style.css" type="text/css" />
</head>
<body>
<jdoc:include type="message" />
<header>
     <div class="mast">
         <a href="/" class="logoLink">
         <svg class="logo_saeta_st" viewBox="0 0 288.84 91.31"><defs><style>.cls-1{fill:#e6e5e5;}.cls-2{fill:#158a44;}.cls-3{fill:#158287;}.cls-4{fill:#a9b1ab;}</style></defs><title>logo_saeta_sinTexto</title><g id="Layer_1" data-name="Layer 1"><path class="cls-1" d="M178,26H194q.79,0,.68.72l0,.24L180.84,73.18a1.86,1.86,0,0,0-.09,1.35c.14.27.51.4,1.09.4h11.29a1.43,1.43,0,0,0,1-.28,2,2,0,0,0,.52-1l14-46.57a1.79,1.79,0,0,1,.46-.87,1.54,1.54,0,0,1,1-.24h10.56a5.79,5.79,0,0,0,5.55-4.12L227.9,16H185.29a5.79,5.79,0,0,0-5.55,4.12Z"/><path class="cls-1" d="M117.64,72.94a1.79,1.79,0,0,0,0,1.51,1.44,1.44,0,0,0,1.27.48h40.29a7.91,7.91,0,0,0-7.58-10.17h-17q-.56,0-.46-.64l.05-.32L138,51.4a2.07,2.07,0,0,1,.42-.87,1.09,1.09,0,0,1,.79-.24H149.6a1.39,1.39,0,0,0,.83-.2,1.32,1.32,0,0,0,.42-.68l2.38-8a1.37,1.37,0,0,0,.06-.87c-.08-.16-.36-.24-.84-.24H142.2q-.8,0-.71-.56l.16-.48,3.56-11.92a1.74,1.74,0,0,1,.51-1,1.57,1.57,0,0,1,1-.24h15.27A14.82,14.82,0,0,0,176,16H144.85c-5.67.2-10.3-.05-12.11,6.56Z"/><path class="cls-1" d="M111,29.16A14,14,0,0,0,97,16h0a4.48,4.48,0,0,0-1.63.24,2.56,2.56,0,0,0-1.12,1L58,72.3a5.08,5.08,0,0,0-.85,1.83q-.13.8.67.79h10a2.38,2.38,0,0,0,1-.16,1.26,1.26,0,0,0,.56-.56l7.93-11.92a1.79,1.79,0,0,1,1.5-1H98q.87,0,.85.64l.64,11.52q0,1.43,1.12,1.43h11.6a1.22,1.22,0,0,0,1.3-1.19C113.57,73.55,112,46.16,111,29.16ZM97.95,50.76H84.76c-.48,0-.69-.13-.65-.4a2.18,2.18,0,0,1,.36-.79L96.62,31.05c.3-.53.58-.79.84-.79s.38.27.35.79L99,49.41Q99.06,50.77,97.95,50.76Z"/><path class="cls-1" d="M258.63,29.16c-.77-6.64-6.57-13.21-14-13.21h0a4.48,4.48,0,0,0-1.63.24,2.56,2.56,0,0,0-1.12,1L205.59,72.3a5.08,5.08,0,0,0-.85,1.83q-.13.8.67.79h10a2.38,2.38,0,0,0,1-.16,1.26,1.26,0,0,0,.56-.56l7.93-11.92a1.79,1.79,0,0,1,1.5-1h19.23q.87,0,.85.64l.64,11.52q0,1.43,1.12,1.43h11.6a1.22,1.22,0,0,0,1.3-1.19C261.18,73.55,258.63,29.21,258.63,29.16Zm-13.07,21.6H232.37c-.48,0-.69-.13-.65-.4a2.18,2.18,0,0,1,.36-.79l12.15-18.52c.3-.53.58-.79.84-.79s.38.27.35.79l1.23,18.36Q246.67,50.77,245.56,50.76Z"/><path class="cls-1" d="M57.88,29.31q1,1.19,1.48,1.19a.51.51,0,0,0,.33-.08l7.82-4.69q.61-.32.67-.72a2,2,0,0,0-.45-1.19,16.56,16.56,0,0,0-7.08-6.24A25.73,25.73,0,0,0,49,15.16a33,33,0,0,0-12.67,2.46,27.08,27.08,0,0,0-10,7,20,20,0,0,0-5,10.41,11.68,11.68,0,0,0,1.64,8.46q2.4,3.7,7.81,5.6l11,3.89A11.13,11.13,0,0,1,46,55.41a3.73,3.73,0,0,1,.91,3.3,7.68,7.68,0,0,1-4,5.84,17.24,17.24,0,0,1-8.4,1.87,22.89,22.89,0,0,1-6.36-.72A9.6,9.6,0,0,1,24.2,63.6,21.47,21.47,0,0,1,21,59.67a1.84,1.84,0,0,0-1.58-1,2.3,2.3,0,0,0-1.25.4l-6.88,3.81a1.39,1.39,0,0,0-.79,1,2,2,0,0,0,.14,1.11,15.22,15.22,0,0,0,7.4,8q5.35,2.82,13.7,2.82a38,38,0,0,0,13.65-2.38,26.5,26.5,0,0,0,10.4-7A20.73,20.73,0,0,0,61,55.45a10.24,10.24,0,0,0-1.67-8Q56.88,44.17,51,42.1L39.66,38q-5.49-2-4.91-5.64a7.62,7.62,0,0,1,3.88-5.44,15.68,15.68,0,0,1,8.27-2,15.9,15.9,0,0,1,6.71,1.27,11.59,11.59,0,0,1,4.26,3.18"/><path class="cls-2" d="M181,26.4H197q.79,0,.68.72l0,.24L183.84,73.6a1.86,1.86,0,0,0-.09,1.35c.14.27.51.4,1.09.4h11.29a1.43,1.43,0,0,0,1-.28,2,2,0,0,0,.52-1l14-46.57a1.79,1.79,0,0,1,.46-.87,1.54,1.54,0,0,1,1-.24h4.4a14.07,14.07,0,0,0,13.47-10H194.43A14.07,14.07,0,0,0,181,26.4Z"/><path class="cls-2" d="M120.63,73.36a1.79,1.79,0,0,0,0,1.51,1.44,1.44,0,0,0,1.27.48H162.2a7.91,7.91,0,0,0-7.58-10.17h-17q-.56,0-.46-.64l.05-.32L141,51.83a2.07,2.07,0,0,1,.42-.87,1.09,1.09,0,0,1,.79-.24h10.41a1.39,1.39,0,0,0,.83-.2,1.32,1.32,0,0,0,.42-.68l2.38-8a1.37,1.37,0,0,0,.06-.87c-.08-.16-.36-.24-.84-.24H145.2q-.8,0-.71-.56l.16-.48,3.56-11.92a1.74,1.74,0,0,1,.51-1,1.57,1.57,0,0,1,1-.24h15.27A14.82,14.82,0,0,0,179,16.38H147.84c-5.67.2-10.3-.05-12.11,6.56Z"/><path class="cls-3" d="M114,29.59a14,14,0,0,0-14-13.21h0a4.48,4.48,0,0,0-1.63.24,2.56,2.56,0,0,0-1.12,1L61,72.73a5.08,5.08,0,0,0-.85,1.83q-.13.8.67.79h10a2.38,2.38,0,0,0,1-.16,1.26,1.26,0,0,0,.56-.56l7.93-11.92a1.79,1.79,0,0,1,1.5-1H101q.87,0,.85.64l.64,11.52q0,1.43,1.12,1.43h11.6a1.22,1.22,0,0,0,1.3-1.19C116.57,74,115,46.59,114,29.59Zm-13.07,21.6H87.75c-.48,0-.69-.13-.65-.4a2.18,2.18,0,0,1,.36-.79L99.61,31.48c.3-.53.58-.79.84-.79s.38.27.35.79L102,49.84Q102.05,51.19,100.94,51.19Z"/><path class="cls-4" d="M261.62,29.59c-.77-6.64-6.57-13.21-14-13.21h0a4.48,4.48,0,0,0-1.63.24,2.56,2.56,0,0,0-1.12,1l-36.3,55.08a5.08,5.08,0,0,0-.85,1.83q-.13.8.67.79h10a2.38,2.38,0,0,0,1-.16,1.26,1.26,0,0,0,.56-.56l7.93-11.92a1.79,1.79,0,0,1,1.5-1h19.23q.87,0,.85.64l.64,11.52q0,1.43,1.12,1.43h11.6a1.22,1.22,0,0,0,1.3-1.19C264.17,74,261.63,29.64,261.62,29.59Zm-13.07,21.6H235.36c-.48,0-.69-.13-.65-.4a2.18,2.18,0,0,1,.36-.79l12.15-18.52c.3-.53.58-.79.84-.79s.38.27.35.79l1.23,18.36Q249.66,51.19,248.55,51.19Z"/><path class="cls-2" d="M60.88,29.73q1,1.19,1.48,1.19a.51.51,0,0,0,.33-.08l7.82-4.69q.61-.32.67-.72a2,2,0,0,0-.45-1.19A16.56,16.56,0,0,0,63.65,18,25.73,25.73,0,0,0,52,15.59a33,33,0,0,0-12.67,2.46,27.08,27.08,0,0,0-10,7,20,20,0,0,0-5,10.41,11.68,11.68,0,0,0,1.64,8.46q2.4,3.7,7.81,5.6l11,3.89A11.13,11.13,0,0,1,49,55.84a3.73,3.73,0,0,1,.91,3.3,7.68,7.68,0,0,1-4,5.84,17.24,17.24,0,0,1-8.4,1.87,22.89,22.89,0,0,1-6.36-.72A9.6,9.6,0,0,1,27.19,64,21.47,21.47,0,0,1,24,60.09a1.84,1.84,0,0,0-1.58-1,2.3,2.3,0,0,0-1.25.4l-6.88,3.81a1.39,1.39,0,0,0-.79,1,2,2,0,0,0,.14,1.11,15.22,15.22,0,0,0,7.4,8q5.35,2.82,13.7,2.82a38,38,0,0,0,13.65-2.38,26.5,26.5,0,0,0,10.4-7A20.73,20.73,0,0,0,64,55.88a10.24,10.24,0,0,0-1.67-8Q59.87,44.6,54,42.53L42.65,38.4q-5.49-2-4.91-5.64a7.62,7.62,0,0,1,3.88-5.44,15.68,15.68,0,0,1,8.27-2,15.9,15.9,0,0,1,6.71,1.27,11.59,11.59,0,0,1,4.26,3.18"/></g></svg>
        <h1 class="logo_saeta"> Sistema Autoplaneado de Educación <span>Tecnológica Agropecuaria</span></h1>
        </a>
         <jdoc:include type="modules" name="nav"/>
    </div>
</header>
<div class="wrap">
<div class="articulo">
    <div class="moduloFull">
        <a href="/templates/Saeta-front/build/Docs/SAETA_Guiadeinduccion.pdf" target="_blank"><img src="/templates/Saeta-front/build/img/Guia.png" alt="Descarga la guía de inducción"></a>
    </div>
    <div class="flexCont">
        <div class="moduloMedio">
            <a href="/templates/Saeta-front/build/Docs/SATEA_Calendarioescolar.pdf" target="_blank">
            <img src="/templates/Saeta-front/build/img/calendario.png" alt="Descarga de calendario">
            </a>
        </div>
        <div class="moduloMedio">
            <a href="/templates/Saeta-front/build/Docs/SAETA_Modelodeevaluacion.pdf" target="_blank">
            <img src="/templates/Saeta-front/build/img/evaluacion.png" alt="Descarga de modelo de evaluación">
            </a>
        </div>
    </div>
</div>
</div>
    <jdoc:include type="component" />
    <jdoc:include type="modules" name="debug" />
</div>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<footer>
    <div class="footerContenido">
        <div class="carousel" data-flickity='{ "groupCells": true, "autoPlay": true }'>
            <div class="carousel-cell">
			    <a href="https://www.gob.mx/nuevomodeloeducativo" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="Conoce el Nuevo Modelo Educativo y comprométete con la educación." src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/modelo-educativo.jpg"></a>
            </div>
            <div class="carousel-cell">

				<a href="http://sems.gob.mx/curriculoems" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="Nuevo Currículo de la Educación Media Superior" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/curriculo-ems.jpg"></a>
            </div>
            <div class="carousel-cell">

				<a href="http://sems.gob.mx/es_mx/sems/equidad_e_inclusion" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="Uno de los ejes del nuevo Modelo Educativo es la equidad y la inclusión" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/equidad-inclusion.jpg"></a>
            </div>
            <div class="carousel-cell">

				<a href="http://sems.gob.mx<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/GUIA DE ESTUDIOS 2018-2019.pdf" target="_blank" class="note-aula"> <img class="imgCarrusel_footer" title="Ciencias experimentales, lectura y matemáticas" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/cienciasexp.jpg"></a>
            </div>
            <div class="carousel-cell">

				<a href="http://sems.gob.mx<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/wer.pdf" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="Torneo Mundial de Robótica Educativa" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/wer.jpg"></a>
            </div>
            <div class="carousel-cell">
				<a href="https://www.ses.sep.gob.mx/comunicados/090718.html" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="En la educación superior, hay Un lugar para ti" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/aula1.jpg"></a>
            </div>
            <div class="carousel-cell">
			    <a href="http://www.construye-t.org.mx/inicio/que-hacer-despues-de-un-sismo#herramientas" target="_blank"  class="note-aula"><img class="imgCarrusel_footer" title="¿Qué hacer después de un sismo?" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/fuerza-mexico.jpg"></a>
            </div>
            <div class="carousel-cell">
				<a href="http://humanidades.cosdac.sems.gob.mx/plataformas.html" target="blank" class="note-aula"><img class="imgCarrusel_footer" title="Plataformas digitales de los campos disciplinares para profesores del Bachillerato Tecnológico" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/plataformas-digitales.jpg"></a>
            </div>
            <div class="carousel-cell">
				<a href="http://sems.gob.mx/videoclases" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="Dale click a tus videoclases" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/videoclases.jpg"></a>
            </div>
            <div class="carousel-cell">
    			<a href="http://www.sep.gob.mx/es/sep1/Introduccion" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="Conoce, descarga y comparte con otros docentes herramientas y estrategias para tus clases" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/interlocucion.jpg"></a>
            </div>
            <div class="carousel-cell">
				<a href="http://sems.gob.mx/telebachilleratos" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="Telebachilleratos Comunitarios  Educación de calidad, cerca de ti" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/TvBc.jpg"></a>
            </div>
            <div class="carousel-cell">
				<a href="http://www.estrategianacionaldeformaciondocente.sems.gob.mx/" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="Oferta de Formación 2018" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/formacion-continua.jpg"></a>
            </div>
            <div class="carousel-cell">
				<a href="http://sems.gob.mx/work/models/sems/Resource/12302/1/images/orientaciones-para-el-trabajo-colegiado.pdf" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="Orientaciones para la operación de cuerpos colegiados docentes en la EMS" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/cuerpos-colegiados.jpg"></a>
            </div>
            <div class="carousel-cell">
				<a href="http://www.dgcft.sems.gob.mx/welcome/index/submenu//7" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="Capacita T Cambia tu vida" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/1.png"></a>
            </div>
            <div class="carousel-cell">
				<a href="http://www.dgcft.sems.gob.mx/welcome/index/submenu//22" target="_blank" class="note-aula"><img class="imgCarrusel_footer" title="Servicio ROCO" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/build/img/footer-sems/roco.png"></a>
            </div>
        </div>

    </div>

</footer>

</body>
</html>
