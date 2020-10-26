<?php include_once 'includes/templates/header.php'; ?>
  <section class="seccion contenedor">
    <h2>La mejor conferencia de Diseño web en Español.</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis a eum commodi eius, 
      corporis pariatur eveniet, dolores accusantium 
      fugit quae assumenda ipsam ipsum quos consequuntur, quis laboriosam non beatae corrupti.
    </p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop muted poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div>
    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento clearfix">
          <h2>Programa del evento</h2>
          <nav class="menu-programa">
            <a href="#talleres"><i class="fa fa-code" aria-hidden="true"></i> Talleres</a>
            <a href="#conferencias"><i class="fa fa-comment" aria-hidden="true"></i> Conferencias</a>
            <a href="#seminaros"><i class="fa fa-university" aria-hidden="true"></i> Seminarios</a>
          </nav>
          <div id="talleres" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>HTML, CSS3 y JavaScript</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Harold Garcia</p>
            </div>

            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Juan Pablo de la torre Valdez</p>
            </div>
            <a href="" class="button float-right">Ver Todos</a>
          </div><!--#talleres-->

          <div id="conferencias" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Como ser freelancer</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Gregorio Sanchéz</p>
            </div>

            <div class="detalle-evento">
              <h3>Tecnologías del Futuro</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchez</p>
            </div>
            <a href="" class="button float-right">Ver Todos</a>
          </div><!--#conferencias-->

          <div id="seminaros" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Diseño UI/UX para móviles</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 17:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 11 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Harold Garcia</p>
            </div>

            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana</h3>
              <p><i class="fa fa-clock-o" aria-hidden="true"></i> 20:00 hrs</p>
              <p><i class="fa fa-calendar" aria-hidden="true"></i> 10 de Dic</p>
              <p><i class="fa fa-user" aria-hidden="true"></i> Susana Rivera</p>
            </div>
            <a href="" class="button float-right">Ver Todos</a>
          </div><!--#seminaros-->
        </div><!--programa evento-->
      </div><!--contenedor -->
    </div><!-- contenido programa-->
  </section>

  <section class="invitados contenedor seccion">
    <h2>Nuestros invitados</h2>
    <ul class="lista-invitados clearfix">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="">
          <p>Rafael Bautista</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="">
          <p>Shari Herrera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="">
          <p>Gregorio Sanchez</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="">
          <p>Susana Herrera</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="">
          <p>Harold Garcia</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="">
          <p>Susan Sanchez</p>
        </div>
      </li>
    </ul>
  </section>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li><p class="numero"></p> Invitados</li>
        <li><p class="numero"></p> Talleres</li>
        <li><p class="numero"></p> Días</li>
        <li><p class="numero"></p> Conferencias</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Pase por día</h3>
            <p class="numero">$30</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Todos los días</h3>
            <p class="numero">$50</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Pase por 2 día</h3>
            <p class="numero">$45</p>
            <ul>
              <li>Bocadillos Gratis</li>
              <li>Todas las conferencias</li>
              <li>Todos los talleres</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Testimoniales</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim labore ipsum 
            fugiat quia delectus sunt vero voluptatem illum provident pariatur explicabo
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen Testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim labore ipsum 
            fugiat quia delectus sunt vero voluptatem illum provident pariatur explicabo
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen Testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim labore ipsum 
            fugiat quia delectus sunt vero voluptatem illum provident pariatur explicabo
          </p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="Imagen Testimonial">
            <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
          </footer>
        </blockquote>
      </div>
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Regístrate al newsletter: </p>
      <h3>gdlwebcamp</h3>
      <a href="#" class="button transparente">Registro</a>
    </div>
  </div>

  <section class="seccion">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li><p id="dias" class="numero"></p> días</li>
        <li><p id="horas" class="numero"></p> horas</li>
        <li><p id="minutos" class="numero"></p> minutos</li>
        <li><p id="segundos" class="numero"></p> segundos</li>
      </ul>
    </div>
  </section>

