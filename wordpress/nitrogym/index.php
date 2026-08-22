<?php
/**
 * Portada única del tema NitroGym Reus.
 * Los productos de la tienda salen del menú «Productos» del panel.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="NitroGym Reus: el gimnasio más grande de Reus. Más de 5.000 m² en Horts de Miró con cardio, peso libre, cross training, Hyrox, +30 clases dirigidas, ludoteca y parking gratuito. Inauguración 1 de octubre de 2026. Calle Cels Gomis i Mestres, 9-11.">
<meta name="keywords" content="gimnasio Reus, NitroGym, gym Reus, cross training Reus, Hyrox Reus, clases dirigidas Reus, gimnasio Horts de Miró, fitness Tarragona">
<meta name="robots" content="index, follow">
<meta name="geo.region" content="ES-T">
<meta name="geo.placename" content="Reus, Tarragona">
<meta name="geo.position" content="41.1499;1.0958">
<meta name="ICBM" content="41.1499, 1.0958">
<meta property="og:type" content="website">
<meta property="og:title" content="NitroGym Reus — 5.000 m² de puro entrenamiento">
<meta property="og:description" content="El gimnasio más grande de Reus abre el 1 de octubre. Cross training, Hyrox, +30 clases, ludoteca y parking gratis. Calle Cels Gomis i Mestres, 9-11.">
<meta property="og:locale" content="es_ES">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Anton&family=Barlow:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Barlow+Condensed:wght@500;600;700&display=swap">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ExerciseGym",
  "name": "NitroGym Reus",
  "legalName": "Nitro Fitness Grup, S.L.",
  "taxID": "B27546514",
  "description": "Gimnasio de más de 5.000 m² en Reus: cardio, peso libre, cross training, Hyrox, más de 30 clases dirigidas, ludoteca infantil y parking gratuito. Abierto 365 días al año.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Carrer de Cels Gomis i Mestres, 9-11",
    "addressLocality": "Reus",
    "addressRegion": "Tarragona",
    "postalCode": "43204",
    "addressCountry": "ES"
  },
  "geo": { "@type": "GeoCoordinates", "latitude": 41.1499, "longitude": 1.0958 },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "07:00", "closes": "23:00"
  },
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Parking gratuito", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Ludoteca infantil", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Zona Hyrox", "value": true }
  ],
  "foundingDate": "2026-10-01",
  "areaServed": "Reus, Tarragona",
  "sameAs": [
    "https://www.instagram.com/nitrogym_reus/",
    "https://www.tiktok.com/@nitrogym_reus",
    "https://www.instagram.com/nitrofitnessclub/",
    "https://www.instagram.com/nitrosuplementacion_reus/",
    "https://nitrosuplementacion.com/"
  ],
  "priceRange": "€€"
}
</script>
<?php wp_head(); ?>
</head>
<body>

<!-- degradado reutilizable para iconos SVG -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <defs>
    <linearGradient id="gradNitro" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0" stop-color="#2e6bff"/><stop offset="1" stop-color="#6be0ff"/>
    </linearGradient>
  </defs>
</svg>

<header id="cabecera">
  <nav class="nav" aria-label="principal">
    <a class="logo" href="#inicio" aria-label="NitroGym, inicio">
      <svg viewBox="0 0 24 24" fill="none" stroke="url(#gradNitro)" stroke-width="2.4" stroke-linecap="round"><path d="M13 2 4.5 13.5H11L9.5 22 20 9.5h-6.5L13 2z"/></svg>
      NITRO<b>GYM</b>
    </a>
    <ul class="nav-links" id="menu">
      <li><a href="#club">El club</a></li>
      <li><a href="#clases">Clases</a></li>
      <li><a href="#tienda">Tienda</a></li>
      <li><a href="#tarifas">Tarifas</a></li>
      <li><a href="#llegar">Cómo llegar</a></li>
      <li><a href="#redes">Redes</a></li>
    </ul>
    <div class="nav-acciones">
      <button class="btn-mini btn-cuenta" id="btn-cuenta">Acceder</button>
      <button class="btn-mini btn-carro" id="btn-carro" aria-label="Abrir carrito">
        Carrito <span class="badge-carro" id="badge-carro">0</span>
      </button>
      <button id="abrir-menu" aria-label="Abrir menú" aria-expanded="false">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
      </button>
    </div>
  </nav>
</header>

<!-- ============ HERO ============ -->
<section class="hero" id="inicio">
  <div class="capa capa-video" data-parallax="0.15" data-raton="10">
    <video id="video-hero" autoplay muted loop playsinline preload="metadata" aria-hidden="true">
      <source src="<?php echo esc_url( get_template_directory_uri() . '/video/hero.mp4' ); ?>" type="video/mp4">
      <source data-src="https://assets.mixkit.co/videos/50967/50967-720.mp4" type="video/mp4">
      <source data-src="https://assets.mixkit.co/videos/50965/50965-720.mp4" type="video/mp4">
    </video>
    <div class="velocidad" aria-hidden="true"></div>
  </div>
  <div class="capa capa-glow" data-parallax="0.25" data-raton="26"></div>
  <div class="capa capa-rejilla" data-parallax="0.12" data-raton="14"></div>
  <div class="capa capa-palabra" data-parallax="0.45" data-raton="42" aria-hidden="true">NITRO</div>
  <div class="wrap hero-int" data-parallax="0" data-raton="-9">
    <span class="hero-tag"><span class="punto"></span> Gran inauguración · 1 de octubre de 2026</span>
    <h1>
      <span class="l1">El gimnasio</span>
      <span class="l2">más grande</span>
      <span class="l3">de Reus</span>
    </h1>
    <p class="hero-sub">
      Más de <strong>5.000 m²</strong> de entrenamiento en la antigua nave de Horts de Miró.
      Cardio, peso libre, cross training, Hyrox, más de 30 clases dirigidas, ludoteca
      infantil y parking gratuito. Abierto los 365 días del año.
    </p>
    <div class="hero-cta">
      <a class="btn btn-nitro btn-pulso" href="#registro">Hazte socio fundador</a>
      <a class="btn btn-linea" href="#club">Descubre el club</a>
    </div>
    <div class="cuenta" id="cuenta" aria-label="Cuenta atrás para la inauguración">
      <div class="cuenta-caja"><b id="c-dias">--</b><span>días</span></div>
      <div class="cuenta-caja"><b id="c-horas">--</b><span>horas</span></div>
      <div class="cuenta-caja"><b id="c-min">--</b><span>minutos</span></div>
      <div class="cuenta-caja"><b id="c-seg">--</b><span>segundos</span></div>
    </div>
  </div>
</section>

<div class="cinta" aria-hidden="true">
  <div class="cinta-fila">
    <span>Inauguración 01.10.2026</span><span>5.000 m²</span><span>Abierto 365 días</span>
    <span>+30 clases dirigidas</span><span>Zona Hyrox</span><span>Ludoteca infantil</span>
    <span>Parking gratuito</span><span>@nitrogym_reus</span><span>Calle Cels Gomis i Mestres, 9-11 · Reus</span>
    <span>Inauguración 01.10.2026</span><span>5.000 m²</span><span>Abierto 365 días</span>
    <span>+30 clases dirigidas</span><span>Zona Hyrox</span><span>Ludoteca infantil</span>
    <span>Parking gratuito</span><span>@nitrogym_reus</span><span>Calle Cels Gomis i Mestres, 9-11 · Reus</span>
  </div>
</div>

<!-- ============ CIFRAS ============ -->
<section class="cifras" id="club">
  <div class="wrap">
    <p class="eyebrow reveal">El club</p>
    <h2 class="titulo reveal">Una nave, <em>un templo</em></h2>
    <p class="sub reveal">
      La antigua nave del Mercadona de Horts de Miró se transforma en el mayor centro
      de fitness y bienestar de Reus. Tercera marca de la familia Nitro, junto a
      Nitro Fitness Club y Nitro Suplementación.
    </p>
    <div class="cifras-grid" style="margin-top:56px">
      <div class="cifra reveal"><b data-contar="5000">0</b><small>metros cuadrados</small></div>
      <div class="cifra reveal d1"><b data-contar="365">0</b><small>días abierto al año</small></div>
      <div class="cifra reveal d2"><b data-contar="30">0</b><small>clases dirigidas +</small></div>
      <div class="cifra reveal d3"><b data-contar="12">0</b><small>horas diarias +</small></div>
    </div>
  </div>
</section>

<!-- ============ ZONAS ============ -->
<section>
  <div class="wrap">
    <p class="eyebrow reveal">Zonas de entrenamiento</p>
    <h2 class="titulo reveal">Cada disciplina, <em>su territorio</em></h2>
    <div class="zonas-grid">
      <article class="zona reveal">
        <span class="zona-num" aria-hidden="true">01</span>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"><path d="M6 7v10M18 7v10M3 9v6M21 9v6M6 12h12"/></svg>
        <h3>Peso libre</h3>
        <p>Cientos de metros de mancuernas, barras, discos y racks para entrenar fuerza sin esperas ni límites.</p>
      </article>
      <article class="zona reveal d1">
        <span class="zona-num" aria-hidden="true">02</span>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l4-8 4 5 3-9 4 12h3"/></svg>
        <h3>Cardio</h3>
        <p>Cintas, elípticas, remo y bicicletas de última generación con pantallas y programas conectados.</p>
      </article>
      <article class="zona reveal d2">
        <span class="zona-num" aria-hidden="true">03</span>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v4m0 10v4M3 12h4m10 0h4M6 6l2.5 2.5m7 7L18 18M18 6l-2.5 2.5m-7 7L6 18"/></svg>
        <h3>Cross training</h3>
        <p>Box completo con estructuras, anillas, sacos y zona de lanzamiento para el entrenamiento funcional más exigente.</p>
      </article>
      <article class="zona reveal">
        <span class="zona-num" aria-hidden="true">04</span>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20h16M6 20V9l6-5 6 5v11M10 20v-6h4v6"/></svg>
        <h3>Zona Hyrox</h3>
        <p>Pista indoor, sleds, wall balls y estaciones oficiales para preparar la disciplina híbrida que arrasa en Europa.</p>
      </article>
      <article class="zona reveal d1">
        <span class="zona-num" aria-hidden="true">05</span>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg>
        <h3>+30 clases dirigidas</h3>
        <p>Ciclo indoor, HIIT, body pump, yoga, pilates, boxeo, zumba… salas amplias y monitores titulados a todas horas.</p>
      </article>
      <article class="zona reveal d2">
        <span class="zona-num" aria-hidden="true">06</span>
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="3"/><circle cx="17" cy="9" r="2.4"/><path d="M3 20v-2a6 6 0 0 1 12 0v2M14 20v-1.5a4 4 0 0 1 7 0V20"/></svg>
        <h3>Ludoteca infantil</h3>
        <p>Tú entrenas y ellos juegan: espacio infantil supervisado para que la familia nunca sea una excusa.</p>
      </article>
    </div>
  </div>
</section>

<!-- franja parallax -->
<div class="franja">
  <div class="capa capa-glow" data-parallax="0.3" data-raton="24"></div>
  <div class="capa capa-rejilla" data-parallax="0.15" data-raton="14"></div>
  <div class="capa" data-parallax="0.2" data-raton="18" aria-hidden="true"><div class="velocidad"></div></div>
  <div class="capa capa-palabra franja-palabra" data-parallax="0.4" data-raton="36" aria-hidden="true">REUS</div>
  <div class="wrap">
    <blockquote class="reveal">
      El mejor <span style="background:var(--flama);-webkit-background-clip:text;background-clip:text;color:transparent">centro deportivo</span> de Reus
      <cite>Aleix y Nil · Fundadores de NitroGym</cite>
    </blockquote>
  </div>
</div>

<!-- ============ CLASES ============ -->
<section id="clases">
  <div class="wrap">
    <p class="eyebrow reveal">Reserva tu plaza</p>
    <h2 class="titulo reveal">Horario de <em>clases</em></h2>
    <p class="sub reveal">
      Consulta el horario semanal y reserva tu plaza desde aquí. Las reservas
      quedan guardadas en tu cuenta de socio y se activarán con la apertura del club.
    </p>
    <div class="dias reveal" id="dias" role="tablist" aria-label="Día de la semana"></div>
    <div class="clases-lista" id="clases-lista"></div>
  </div>
</section>

<!-- ============ TIENDA ============ -->
<section class="tienda" id="tienda">
  <div class="wrap">
    <p class="eyebrow reveal">Nitro Suplementación</p>
    <h2 class="titulo reveal">La tienda <em>del club</em></h2>
    <p class="sub reveal">
      Suplementación deportiva y equipación oficial NitroGym. Compra online y
      recoge tu pedido en recepción a partir del 1 de octubre. También puedes comprar
      con envío a toda España en
      <a href="https://nitrosuplementacion.com/" target="_blank" rel="noopener" style="color:var(--nitro2)">nitrosuplementacion.com</a>.
    </p>
    <div class="filtros reveal" id="filtros"></div>
    <div class="prod-grid" id="prod-grid"></div>
  </div>
</section>

<!-- ============ TARIFAS ============ -->
<section id="tarifas">
  <div class="wrap">
    <p class="eyebrow reveal">Tarifas de lanzamiento</p>
    <h2 class="titulo reveal">Hazte socio <em>fundador</em></h2>
    <p class="sub reveal">
      Solo hasta la inauguración: matrícula gratis y precio congelado para siempre
      para los primeros socios fundadores.
    </p>
    <div class="tarifas-grid">
      <article class="tarifa reveal">
        <h3>Nitro Base</h3>
        <div class="tarifa-precio">29,90<small> €/mes</small></div>
        <ul>
          <li>Acceso a sala fitness y cardio</li>
          <li>Horario completo, 365 días</li>
          <li>Parking gratuito</li>
          <li>App de entrenamiento</li>
        </ul>
        <a class="btn btn-linea" href="#registro">Reservar plaza</a>
      </article>
      <article class="tarifa destacada reveal d1">
        <span class="tarifa-etq">Socio fundador</span>
        <h3>Nitro Total</h3>
        <div class="tarifa-precio">39,90<small> €/mes</small></div>
        <ul>
          <li>Todo lo de Nitro Base</li>
          <li>+30 clases dirigidas incluidas</li>
          <li>Zona cross training y Hyrox</li>
          <li>Ludoteca infantil incluida</li>
          <li>Matrícula gratis y precio para siempre</li>
        </ul>
        <a class="btn btn-nitro" href="#registro">Quiero ser fundador</a>
      </article>
      <article class="tarifa reveal d2">
        <h3>Nitro Pro</h3>
        <div class="tarifa-precio">59,90<small> €/mes</small></div>
        <ul>
          <li>Todo lo de Nitro Total</li>
          <li>2 sesiones de entrenador personal al mes</li>
          <li>Plan nutricional trimestral</li>
          <li>10 % de descuento en la tienda</li>
        </ul>
        <a class="btn btn-linea" href="#registro">Reservar plaza</a>
      </article>
    </div>
  </div>
</section>

<!-- ============ CÓMO LLEGAR ============ -->
<section class="tienda" id="llegar">
  <div class="wrap">
    <p class="eyebrow reveal">Cómo llegar</p>
    <h2 class="titulo reveal">Horts de Miró, <em>Reus</em></h2>
    <div class="llegar-grid">
      <div class="mapa reveal" role="img" aria-label="Mapa de situación de NitroGym en la calle Cels Gomis i Mestre 11 de Reus">
        <svg viewBox="0 0 600 460" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
          <rect width="600" height="460" fill="#1a2030"/>
          <g stroke="#242c3e" stroke-width="10" fill="none">
            <path d="M-20 120 C 140 100, 300 150, 620 110"/>
            <path d="M-20 250 C 180 230, 380 290, 620 250"/>
            <path d="M-20 390 C 200 370, 420 410, 620 380"/>
            <path d="M120 -20 C 140 140, 100 320, 130 480"/>
            <path d="M300 -20 C 320 160, 300 300, 330 480"/>
            <path d="M470 -20 C 450 150, 490 330, 460 480"/>
          </g>
          <g stroke="#2e3a52" stroke-width="4" fill="none" opacity=".7">
            <path d="M-20 180 C 200 170, 400 200, 620 180"/>
            <path d="M-20 320 C 160 310, 440 340, 620 310"/>
            <path d="M210 -20 C 220 200, 200 340, 220 480"/>
            <path d="M390 -20 C 380 140, 400 320, 390 480"/>
          </g>
          <path d="M-20 250 C 180 230, 380 290, 620 250" stroke="#2e6bff" stroke-width="10" fill="none" opacity=".85"/>
          <circle cx="336" cy="203" r="46" fill="rgba(46,107,255,.16)"/>
          <circle cx="336" cy="203" r="46" fill="none" stroke="#2e6bff" stroke-width="2" opacity=".6">
            <animate attributeName="r" values="34;58;34" dur="3s" repeatCount="indefinite"/>
            <animate attributeName="opacity" values=".7;.05;.7" dur="3s" repeatCount="indefinite"/>
          </circle>
          <g font-family="'Barlow Condensed',sans-serif" font-size="15" fill="#98a2b8" letter-spacing="2">
            <text x="30" y="105" transform="rotate(-2 30 105)">AV. PAÏSOS CATALANS</text>
            <text x="360" y="243" transform="rotate(3 360 243)">C. CELS GOMIS I MESTRES</text>
            <text x="34" y="376">HORTS DE MIRÓ</text>
            <text x="470" y="440">REUS</text>
          </g>
        </svg>
        <div class="mapa-pin">
          <div class="gota"></div>
          <span>NitroGym · Nº 9-11</span>
        </div>
      </div>
      <div class="llegar-info">
        <div class="llegar-item reveal">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s7-6.1 7-11a7 7 0 1 0-14 0c0 4.9 7 11 7 11z"/><circle cx="12" cy="10" r="2.6"/></svg>
          <div>
            <h3>Dirección</h3>
            <p>Calle Cels Gomis i Mestres, 9-11 · Barrio Horts de Miró · 43204 Reus (Tarragona). La antigua nave del Mercadona, imposible perderse.</p>
          </div>
        </div>
        <div class="llegar-item reveal d1">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 16 3.5 11l2-5.5A2 2 0 0 1 7.4 4h9.2a2 2 0 0 1 1.9 1.5L20.5 11 19 16"/><path d="M3.5 11h17M5 16v3m14-3v3"/><circle cx="7.5" cy="13.5" r=".8"/><circle cx="16.5" cy="13.5" r=".8"/></svg>
          <div>
            <h3>En coche</h3>
            <p>Parking gratuito para socios en la propia nave. Acceso directo desde la avenida dels Països Catalans y la T-11.</p>
          </div>
        </div>
        <div class="llegar-item reveal d2">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="15" rx="2.5"/><path d="M5 11h14M8 21l1-3m7 3-1-3"/><circle cx="8.5" cy="15" r=".8"/><circle cx="15.5" cy="15" r=".8"/></svg>
          <div>
            <h3>En bus urbano</h3>
            <p>Líneas urbanas de Reus Transport con parada a pocos minutos a pie del barrio de Horts de Miró.</p>
          </div>
        </div>
        <a class="btn btn-nitro reveal d3" target="_blank" rel="noopener" href="https://www.google.com/maps/search/?api=1&query=Carrer+de+Cels+Gomis+i+Mestres+9-11%2C+Reus">
          Abrir en Google Maps
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M9 7h8v8"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============ REDES SOCIALES ============ -->
<section id="redes">
  <div class="wrap">
    <p class="eyebrow reveal">Redes sociales</p>
    <h2 class="titulo reveal">Síguenos: <em>@nitrogym_reus</em></h2>
    <p class="sub reveal">
      Las obras, las máquinas llegando, sorteos y la cuenta atrás de la apertura,
      en directo en nuestras redes. Toda la familia Nitro de Reus, a un toque.
    </p>
    <div class="redes-grid">
      <a class="red-card reveal" href="https://www.instagram.com/nitrogym_reus/" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r=".9" fill="url(#gradNitro)" stroke="none"/></svg>
        <div><h3>Instagram</h3><span class="arroba">@nitrogym_reus</span></div>
        <p>La cuenta oficial del nuevo gimnasio: obras, avances y sorteos de la inauguración.</p>
      </a>
      <a class="red-card reveal d1" href="https://www.tiktok.com/@nitrogym_reus" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 4v9.5a3.75 3.75 0 1 1-3.75-3.75"/><path d="M14 4c.4 2.6 2.4 4.4 5 4.7"/></svg>
        <div><h3>TikTok</h3><span class="arroba">@nitrogym_reus</span></div>
        <p>Tours por la nave, el equipamiento llegando y los vídeos más virales del club.</p>
      </a>
      <a class="red-card reveal d2" href="https://www.instagram.com/nitrofitnessclub/" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"><path d="M6 7v10M18 7v10M3 9v6M21 9v6M6 12h12"/></svg>
        <div><h3>Nitro Fitness Club</h3><span class="arroba">@nitrofitnessclub</span></div>
        <p>Nuestro club de la calle Sor Lluïsa Estivill, 16: funcional, cross, fisioterapia y nutrición.</p>
      </a>
      <a class="red-card reveal d3" href="https://www.instagram.com/nitrosuplementacion_reus/" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8h12l-1 13H7zM9 8V6a3 3 0 0 1 6 0v2"/></svg>
        <div><h3>Nitro Suplementación</h3><span class="arroba">@nitrosuplementacion_reus</span></div>
        <p>Nuestra tienda de suplementos, con envíos a toda España desde <b style="color:var(--texto)">nitrosuplementacion.com</b>.</p>
      </a>
    </div>
    <div class="red-video reveal">
      <p><b>Último bombazo en TikTok:</b> somos centro oficial <b>Etenon Fitness</b> — máquinas y equipamiento de primer nivel para la apertura.</p>
      <a class="btn btn-nitro" href="https://www.tiktok.com/@nitrogym_reus/video/7640136541259435286" target="_blank" rel="noopener">Ver el vídeo</a>
    </div>
  </div>
</section>

<!-- ============ REGISTRO ============ -->
<section class="registro" id="registro">
  <div class="wrap">
    <p class="eyebrow reveal" style="justify-content:center">Preinscripción abierta</p>
    <h2 class="titulo reveal">Sé de los <em>primeros</em></h2>
    <p class="sub reveal" style="margin-left:auto;margin-right:auto">
      Déjanos tu correo y te avisaremos antes que a nadie de la apertura de plazas
      de socio fundador y del día de puertas abiertas.
    </p>
    <form class="form-linea reveal" id="form-news">
      <input type="email" placeholder="tu@correo.com" required aria-label="Tu correo electrónico">
      <button class="btn btn-nitro" type="submit">Avisadme</button>
    </form>
  </div>
</section>

<footer>
  <div class="wrap">
    <div class="pie-grid">
      <div>
        <a class="logo" href="#inicio" style="margin-bottom:16px">NITRO<b>GYM</b></a>
        <p>El gimnasio más grande de Reus: más de 5.000 m² de entrenamiento en Horts de Miró. De la familia Nitro Fitness Club y Nitro Suplementación.</p>
        <div class="pie-redes">
          <a href="https://www.instagram.com/nitrogym_reus/" target="_blank" rel="noopener" aria-label="Instagram de NitroGym Reus">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r=".9" fill="url(#gradNitro)" stroke="none"/></svg>
          </a>
          <a href="https://www.tiktok.com/@nitrogym_reus" target="_blank" rel="noopener" aria-label="TikTok de NitroGym Reus">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 4v9.5a3.75 3.75 0 1 1-3.75-3.75"/><path d="M14 4c.4 2.6 2.4 4.4 5 4.7"/></svg>
          </a>
          <a href="https://www.instagram.com/nitrosuplementacion_reus/" target="_blank" rel="noopener" aria-label="Instagram de Nitro Suplementación">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 8h12l-1 13H7zM9 8V6a3 3 0 0 1 6 0v2"/></svg>
          </a>
          <a href="https://nitrosuplementacion.com/" target="_blank" rel="noopener" aria-label="Tienda online Nitro Suplementación">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.4 4 5.6 4 9s-1.5 6.6-4 9c-2.5-2.4-4-5.6-4-9s1.5-6.6 4-9z"/></svg>
          </a>
        </div>
      </div>
      <div>
        <h4>El club</h4>
        <ul>
          <li><a href="#club">Instalaciones</a></li>
          <li><a href="#clases">Clases dirigidas</a></li>
          <li><a href="#tarifas">Tarifas</a></li>
          <li><a href="#tienda">Tienda</a></li>
        </ul>
      </div>
      <div>
        <h4>Contacto</h4>
        <ul>
          <li><a href="https://www.google.com/maps/search/?api=1&query=Carrer+de+Cels+Gomis+i+Mestres+9-11%2C+Reus" target="_blank" rel="noopener">C. Cels Gomis i Mestres, 9-11</a></li>
          <li><a href="#llegar">43204 Reus · Tarragona</a></li>
          <li><a href="#registro">info@nitrogymreus.es</a></li>
        </ul>
      </div>
      <div>
        <h4>Horario</h4>
        <ul>
          <li><a href="#club">365 días al año</a></li>
          <li><a href="#club">Más de 12 h diarias</a></li>
          <li><a href="#registro">Apertura: 01.10.2026</a></li>
        </ul>
      </div>
    </div>
    <div class="pie-legal">
      <span>© 2026 Nitro Fitness Grup, S.L. · NitroGym Reus · Todos los derechos reservados</span>
      <span>
        <a href="#" data-legal="aviso" style="color:var(--texto2)">Aviso legal</a> ·
        <a href="#" data-legal="privacidad" style="color:var(--texto2)">Privacidad</a> ·
        <a href="#" data-legal="cookies" style="color:var(--texto2)">Política de cookies</a> ·
        <a href="#" data-abrir-cookies style="color:var(--texto2)">Configurar cookies</a>
      </span>
    </div>
  </div>
</footer>

<!-- ============ CARRITO LATERAL ============ -->
<div class="velo" id="velo"></div>
<aside class="panel-lateral" id="panel-carro" aria-label="Carrito de compra">
  <div class="panel-cab">
    <h3>Tu carrito</h3>
    <button class="cerrar-x" data-cerrar aria-label="Cerrar carrito">×</button>
  </div>
  <div class="panel-cuerpo" id="carro-cuerpo"></div>
  <div class="panel-pie">
    <div class="carro-total"><span>Total</span><b id="carro-total">0,00 €</b></div>
    <button class="btn btn-nitro" id="btn-pagar" style="width:100%;justify-content:center">Tramitar pedido</button>
    <p style="color:var(--texto2);font-size:.82rem;text-align:center">Recogida en recepción a partir del 1 de octubre. El pago online se activará con la apertura.</p>
  </div>
</aside>

<!-- ============ MODAL CUENTA ============ -->
<div class="modal" id="modal-cuenta">
  <div class="velo on" style="position:absolute" data-cerrar></div>
  <div class="modal-caja">
    <button class="cerrar-x modal-cerrar" data-cerrar aria-label="Cerrar">×</button>
    <div id="vista-login">
      <h3>Área de socios</h3>
      <p class="nota">Accede para reservar clases y guardar tus pedidos.</p>
      <form id="form-login">
        <input type="text" id="log-nombre" placeholder="Tu nombre" required>
        <input type="email" id="log-email" placeholder="tu@correo.com" required>
        <button class="btn btn-nitro" type="submit" style="width:100%;justify-content:center">Entrar</button>
      </form>
      <p class="modal-alt">¿Aún no eres socio? El registro se completa el mismo día con tu primer acceso.</p>
    </div>
    <div id="vista-perfil" style="display:none">
      <h3 id="perfil-hola">Hola</h3>
      <p class="nota">Socio fundador en espera de apertura · Nº <b id="perfil-num">—</b></p>
      <h3 style="font-size:1.05rem;margin-top:8px">Mis reservas</h3>
      <div class="mis-reservas" id="mis-reservas"></div>
      <button class="btn btn-linea" id="btn-salir" style="width:100%;justify-content:center;margin-top:20px">Cerrar sesión</button>
    </div>
  </div>
</div>

<!-- ============ MODAL RESERVA ============ -->
<div class="modal" id="modal-reserva">
  <div class="velo on" style="position:absolute" data-cerrar></div>
  <div class="modal-caja">
    <button class="cerrar-x modal-cerrar" data-cerrar aria-label="Cerrar">×</button>
    <h3>Reservar clase</h3>
    <p class="nota" id="reserva-detalle"></p>
    <button class="btn btn-nitro" id="btn-confirmar-reserva" style="width:100%;justify-content:center">Confirmar reserva</button>
  </div>
</div>

<!-- ============ AVISO DE COOKIES ============ -->
<div class="cookies" id="cookies" role="dialog" aria-label="Aviso de cookies">
  <h4>
    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round"><circle cx="12" cy="12" r="9"/><circle cx="9" cy="10" r=".9" fill="url(#gradNitro)" stroke="none"/><circle cx="14.5" cy="9" r=".9" fill="url(#gradNitro)" stroke="none"/><circle cx="10.5" cy="14.5" r=".9" fill="url(#gradNitro)" stroke="none"/><circle cx="15" cy="14" r=".9" fill="url(#gradNitro)" stroke="none"/></svg>
    Esta web usa cookies
  </h4>
  <p>
    Usamos almacenamiento técnico imprescindible (tu carrito, tus reservas y tu sesión)
    y, solo si lo aceptas, contenido de terceros como el vídeo de portada y las fuentes.
    Más detalle en la <button type="button" data-legal="cookies">política de cookies</button>.
  </p>
  <div class="cookies-botones">
    <button class="btn btn-nitro" id="ck-aceptar" style="padding:12px 22px">Aceptar todas</button>
    <button class="btn btn-linea" id="ck-necesarias" style="padding:12px 22px">Solo necesarias</button>
  </div>
</div>

<!-- ============ PÁGINAS LEGALES ============ -->
<div class="legal" id="legal-aviso" role="dialog" aria-label="Aviso legal">
  <div class="legal-int">
    <button class="btn btn-linea legal-cerrar" data-cerrar-legal>← Volver</button>
    <p class="eyebrow">Legal</p>
    <h2>Aviso legal</h2>
    <h3>1. Titular del sitio web</h3>
    <p>En cumplimiento de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico (LSSI-CE), se informa de que el titular de este sitio web es:</p>
    <ul>
      <li><b style="color:var(--texto)">Razón social:</b> Nitro Fitness Grup, S.L. (nombre comercial: NitroGym Reus)</li>
      <li><b style="color:var(--texto)">NIF/CIF:</b> B27546514</li>
      <li><b style="color:var(--texto)">Actividad (CNAE):</b> Gestión de instalaciones deportivas</li>
      <li><b style="color:var(--texto)">Domicilio:</b> Carrer de Cels Gomis i Mestres, 9 · 43204 Reus (Tarragona)</li>
      <li><b style="color:var(--texto)">Correo electrónico:</b> info@nitrogymreus.es</li>
    </ul>
    <h3>2. Objeto</h3>
    <p>Este sitio web tiene por objeto dar a conocer las instalaciones, servicios, clases y productos de NitroGym Reus, así como permitir la preinscripción de socios, la reserva de clases y la compra de productos para su recogida en el centro.</p>
    <h3>3. Propiedad intelectual e industrial</h3>
    <p>Todos los contenidos de este sitio (textos, diseño, logotipos, iconos e imágenes propias) son titularidad de NitroGym Reus o de sus legítimos propietarios, y están protegidos por la normativa de propiedad intelectual e industrial. Queda prohibida su reproducción sin autorización expresa. El vídeo de portada procede de bancos de recursos con licencia de uso libre.</p>
    <h3>4. Responsabilidad</h3>
    <p>NitroGym Reus no se hace responsable del mal uso que se realice de los contenidos de este sitio web ni de los contenidos de sitios de terceros enlazados (redes sociales, mapas, tienda de suplementación). Los precios y horarios mostrados antes de la inauguración tienen carácter informativo y pueden sufrir cambios.</p>
    <h3>5. Legislación aplicable</h3>
    <p>La relación entre NitroGym Reus y los usuarios se rige por la normativa española. Cualquier controversia se someterá a los Juzgados y Tribunales de Reus, salvo que la normativa de consumidores disponga otro fuero.</p>
  </div>
</div>

<div class="legal" id="legal-privacidad" role="dialog" aria-label="Política de privacidad">
  <div class="legal-int">
    <button class="btn btn-linea legal-cerrar" data-cerrar-legal>← Volver</button>
    <p class="eyebrow">Legal</p>
    <h2>Política de privacidad</h2>
    <h3>1. Responsable del tratamiento</h3>
    <p>Nitro Fitness Grup, S.L. (NitroGym Reus) · CIF B27546514 · Carrer de Cels Gomis i Mestres, 9 · 43204 Reus (Tarragona) · info@nitrogymreus.es</p>
    <h3>2. Qué datos tratamos y para qué</h3>
    <ul>
      <li><b style="color:var(--texto)">Preinscripción y avisos:</b> el correo que nos dejas en el formulario se usa únicamente para avisarte de la apertura de plazas y del día de puertas abiertas.</li>
      <li><b style="color:var(--texto)">Reservas, carrito y sesión:</b> en la versión actual de esta web, estos datos se guardan <b style="color:var(--texto)">solo en tu propio navegador</b> (almacenamiento local) y no se envían a ningún servidor de NitroGym.</li>
      <li><b style="color:var(--texto)">Alta de socio:</b> los datos necesarios para el contrato de socio se recogerán presencialmente o mediante la plataforma de gestión del club a partir de la apertura, con su propia información de privacidad.</li>
    </ul>
    <h3>3. Legitimación</h3>
    <p>La base legal es tu consentimiento (art. 6.1.a RGPD), que puedes retirar en cualquier momento, y, en su caso, la ejecución del contrato de socio (art. 6.1.b RGPD).</p>
    <h3>4. Conservación y destinatarios</h3>
    <p>Los datos se conservarán mientras no solicites su supresión y no se cederán a terceros salvo obligación legal. No se realizan transferencias internacionales de datos.</p>
    <h3>5. Tus derechos</h3>
    <p>Puedes ejercer tus derechos de acceso, rectificación, supresión, oposición, limitación y portabilidad escribiendo a info@nitrogymreus.es. Si consideras que el tratamiento no se ajusta a la normativa, puedes reclamar ante la Agencia Española de Protección de Datos (<a href="https://www.aepd.es" target="_blank" rel="noopener">www.aepd.es</a>).</p>
  </div>
</div>

<div class="legal" id="legal-cookies" role="dialog" aria-label="Política de cookies">
  <div class="legal-int">
    <button class="btn btn-linea legal-cerrar" data-cerrar-legal>← Volver</button>
    <p class="eyebrow">Legal</p>
    <h2>Política de cookies</h2>
    <h3>1. Qué son las cookies</h3>
    <p>Las cookies y tecnologías similares (como el almacenamiento local del navegador) son pequeños ficheros de datos que se guardan en tu dispositivo cuando visitas una web, y que permiten recordar tus preferencias o el estado de tu visita.</p>
    <h3>2. Qué usamos en esta web</h3>
    <div class="tabla-scroll">
      <table>
        <tr><th>Nombre</th><th>Tipo</th><th>Finalidad</th><th>Duración</th></tr>
        <tr><td>ng_carro</td><td>Técnica (propia)</td><td>Recordar los productos de tu carrito</td><td>Hasta que la borres</td></tr>
        <tr><td>ng_reservas</td><td>Técnica (propia)</td><td>Guardar tus reservas de clases</td><td>Hasta que la borres</td></tr>
        <tr><td>ng_usuario</td><td>Técnica (propia)</td><td>Mantener tu sesión de socio iniciada</td><td>Hasta cerrar sesión</td></tr>
        <tr><td>ng_cookies</td><td>Técnica (propia)</td><td>Recordar tu elección sobre cookies</td><td>Hasta que la borres</td></tr>
        <tr><td>Vídeo y fuentes</td><td>Terceros</td><td>El vídeo de portada (Mixkit) y las fuentes (Google Fonts) se cargan de servidores externos que pueden registrar tu IP</td><td>Según el tercero</td></tr>
      </table>
    </div>
    <p>Esta web <b style="color:var(--texto)">no utiliza cookies publicitarias ni de análisis</b>. El almacenamiento técnico propio no sale de tu navegador.</p>
    <h3>3. Cómo cambiar tu elección</h3>
    <p>Puedes reabrir el panel de configuración desde el enlace «Configurar cookies» del pie de página, o borrar los datos guardados desde la configuración de tu navegador (Historial → Borrar datos de navegación → Cookies y datos de sitios).</p>
    <h3>4. Cookies en tu navegador</h3>
    <p>Todos los navegadores permiten bloquear o eliminar cookies: consulta la ayuda de Chrome, Firefox, Safari o Edge para hacerlo. Ten en cuenta que si borras el almacenamiento de esta web perderás tu carrito y tus reservas guardadas.</p>
  </div>
</div>

<div class="toast" id="toast" role="status"></div>

<script>
/* ================= datos ================= */
const CLASES = {
  "Lunes":[
    {h:"07:30",n:"Ciclo Indoor",m:"Sala Ciclo · 45 min · Marta",p:22},
    {h:"09:30",n:"Pilates",m:"Sala 2 · 50 min · Laia",p:18},
    {h:"12:00",n:"HIIT",m:"Sala 1 · 30 min · Aleix",p:20},
    {h:"18:00",n:"Cross Training",m:"Box Nitro · 60 min · Nil",p:16},
    {h:"19:00",n:"Body Pump",m:"Sala 1 · 55 min · Sergi",p:25},
    {h:"20:15",n:"Boxeo",m:"Zona Combate · 60 min · Iván",p:14}
  ],
  "Martes":[
    {h:"07:30",n:"HIIT",m:"Sala 1 · 30 min · Aleix",p:20},
    {h:"10:00",n:"Yoga",m:"Sala Zen · 60 min · Carla",p:20},
    {h:"17:30",n:"Hyrox Prep",m:"Pista Hyrox · 60 min · Nil",p:12},
    {h:"19:00",n:"Zumba",m:"Sala 1 · 50 min · Noelia",p:30},
    {h:"20:30",n:"Ciclo Indoor",m:"Sala Ciclo · 45 min · Marta",p:22}
  ],
  "Miércoles":[
    {h:"07:30",n:"Cross Training",m:"Box Nitro · 60 min · Nil",p:16},
    {h:"09:30",n:"Pilates",m:"Sala 2 · 50 min · Laia",p:18},
    {h:"12:00",n:"Body Pump",m:"Sala 1 · 55 min · Sergi",p:25},
    {h:"18:00",n:"HIIT",m:"Sala 1 · 30 min · Aleix",p:20},
    {h:"19:30",n:"Boxeo",m:"Zona Combate · 60 min · Iván",p:14},
    {h:"20:30",n:"Yoga",m:"Sala Zen · 60 min · Carla",p:20}
  ],
  "Jueves":[
    {h:"07:30",n:"Ciclo Indoor",m:"Sala Ciclo · 45 min · Marta",p:22},
    {h:"10:00",n:"Zumba",m:"Sala 1 · 50 min · Noelia",p:30},
    {h:"17:30",n:"Hyrox Prep",m:"Pista Hyrox · 60 min · Nil",p:12},
    {h:"19:00",n:"Cross Training",m:"Box Nitro · 60 min · Nil",p:16},
    {h:"20:15",n:"Pilates",m:"Sala 2 · 50 min · Laia",p:18}
  ],
  "Viernes":[
    {h:"07:30",n:"HIIT",m:"Sala 1 · 30 min · Aleix",p:20},
    {h:"09:30",n:"Yoga",m:"Sala Zen · 60 min · Carla",p:20},
    {h:"18:00",n:"Body Pump",m:"Sala 1 · 55 min · Sergi",p:25},
    {h:"19:00",n:"Boxeo",m:"Zona Combate · 60 min · Iván",p:14},
    {h:"20:00",n:"Ciclo Indoor",m:"Sala Ciclo · 45 min · Marta",p:22}
  ],
  "Sábado":[
    {h:"09:00",n:"Hyrox Prep",m:"Pista Hyrox · 75 min · Nil",p:12},
    {h:"10:30",n:"Cross Training",m:"Box Nitro · 60 min · Aleix",p:16},
    {h:"11:30",n:"Zumba",m:"Sala 1 · 50 min · Noelia",p:30},
    {h:"12:30",n:"Yoga",m:"Sala Zen · 60 min · Carla",p:20}
  ],
  "Domingo":[
    {h:"09:30",n:"Ciclo Indoor",m:"Sala Ciclo · 45 min · Marta",p:22},
    {h:"10:30",n:"Body Pump",m:"Sala 1 · 55 min · Sergi",p:25},
    {h:"11:30",n:"Pilates",m:"Sala 2 · 50 min · Laia",p:18}
  ]
};

const PRODUCTOS_DEFECTO = [
  {id:"prot",cat:"Suplementación",n:"Proteína Whey Nitro 2 kg",d:"Aislado de suero sabor chocolate. 24 g de proteína por dosis.",pr:44.90,ant:54.90,etq:"Oferta",ico:"bote"},
  {id:"crea",cat:"Suplementación",n:"Creatina Monohidrato 500 g",d:"Creatina micronizada pura. El suplemento más estudiado.",pr:24.90,ico:"bote"},
  {id:"pre",cat:"Suplementación",n:"Pre-entreno Nitro Boost",d:"Energía explosiva con cafeína, beta-alanina y citrulina.",pr:29.90,etq:"Top ventas",ico:"rayo"},
  {id:"barr",cat:"Suplementación",n:"Barritas proteicas (12 uds)",d:"20 g de proteína por barrita. Chocolate y caramelo.",pr:19.90,ico:"barra"},
  {id:"cami",cat:"Equipación",n:"Camiseta oficial NitroGym",d:"Tejido técnico transpirable con el logo del club. Tallas S–XXL.",pr:22.00,etq:"Nuevo",ico:"camiseta"},
  {id:"sud",cat:"Equipación",n:"Sudadera Nitro Heavy",d:"Algodón premium 380 g con capucha. Edición inauguración.",pr:39.90,ico:"camiseta"},
  {id:"shak",cat:"Accesorios",n:"Shaker Nitro 700 ml",d:"Mezclador antigoteo con rejilla y medidor. Libre de BPA.",pr:8.90,ico:"shaker"},
  {id:"bot",cat:"Accesorios",n:"Botella térmica 1 L",d:"Acero inoxidable, frío 24 h. Grabado láser NitroGym.",pr:16.90,ico:"shaker"},
  {id:"toa",cat:"Accesorios",n:"Toalla técnica microfibra",d:"Secado rápido, tamaño entrenamiento, bolsillo con cremallera.",pr:12.90,ico:"toalla"},
  {id:"guan",cat:"Accesorios",n:"Guantes de entrenamiento",d:"Agarre reforzado y muñequera integrada. Tallas S–XL.",pr:14.90,ico:"guante"}
];
/* productos creados en el panel de WordPress; si no hay, se usa el catálogo de ejemplo */
const PRODUCTOS_WP = <?php echo wp_json_encode( ng_productos_para_js() ); ?>;
const PRODUCTOS = (Array.isArray(PRODUCTOS_WP) && PRODUCTOS_WP.length) ? PRODUCTOS_WP : PRODUCTOS_DEFECTO;

const ICONOS = {
  bote:'<svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M8 3h8v3H8zM7 6h10l1 3v11a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 6 20V9z"/><path d="M9 13h6M9 16h6"/></svg>',
  rayo:'<svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 4.5 13.5H11L9.5 22 20 9.5h-6.5L13 2z"/></svg>',
  barra:'<svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="8" rx="2"/><path d="M8 8v8m4-8v8m4-8v8"/></svg>',
  camiseta:'<svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9 4 4 7l2 4 2-1v10h8V10l2 1 2-4-5-3a3 3 0 0 1-6 0z"/></svg>',
  shaker:'<svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9 2h6M8 5h8l-1.2 15a2 2 0 0 1-2 1.8h-1.6a2 2 0 0 1-2-1.8z"/><path d="M8.5 10h7"/></svg>',
  toalla:'<svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M7 3h10v18l-2.5-2-2.5 2-2.5-2L7 21z"/><path d="M7 8h10"/></svg>',
  guante:'<svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M8 11V5a2 2 0 0 1 4 0v5m0-4a2 2 0 0 1 4 0v5m0-2a2 2 0 0 1 4 0v5a8 8 0 0 1-8 8h-1a7 7 0 0 1-7-7v-3a2 2 0 0 1 4 0"/></svg>'
};

/* ================= estado ================= */
const leer=(k,v)=>{try{return JSON.parse(localStorage.getItem(k))??v}catch{return v}};
const guardar=(k,v)=>localStorage.setItem(k,JSON.stringify(v));
let carro=leer("ng_carro",{});
let usuario=leer("ng_usuario",null);
let reservas=leer("ng_reservas",[]);

const $=s=>document.querySelector(s);
const fmt=n=>n.toFixed(2).replace(".",",")+" €";
function toast(msg){
  const t=$("#toast");t.textContent=msg;t.classList.add("on");
  clearTimeout(t._tm);t._tm=setTimeout(()=>t.classList.remove("on"),2600);
}

/* ================= cabecera ================= */
const cab=$("#cabecera");
addEventListener("scroll",()=>cab.classList.toggle("solida",scrollY>40),{passive:true});
$("#abrir-menu").addEventListener("click",e=>{
  const m=$("#menu");m.classList.toggle("abierto");
  e.currentTarget.setAttribute("aria-expanded",m.classList.contains("abierto"));
});
document.querySelectorAll("#menu a").forEach(a=>a.addEventListener("click",()=>$("#menu").classList.remove("abierto")));

/* ================= parallax (scroll + ratón) ================= */
const capas=[...document.querySelectorAll("[data-parallax]")];
const movOk=!matchMedia("(prefers-reduced-motion: reduce)").matches;
const ratonFino=matchMedia("(pointer: fine)").matches;
let rx=0,ry=0;
function pintarParallax(){
  capas.forEach(c=>{
    const r=c.parentElement.getBoundingClientRect();
    if(r.bottom<0||r.top>innerHeight)return;
    const v=parseFloat(c.dataset.parallax);
    const f=parseFloat(c.dataset.raton||0);
    c.style.transform=`translate3d(${(rx*f).toFixed(1)}px,${(r.top*-v+ry*f).toFixed(1)}px,0)`;
  });
}
if(movOk){
  let tick=false;
  const pedir=()=>{if(tick)return;tick=true;requestAnimationFrame(()=>{pintarParallax();tick=false})};
  addEventListener("scroll",pedir,{passive:true});
  if(ratonFino){
    addEventListener("mousemove",e=>{
      rx=e.clientX/innerWidth-.5;
      ry=e.clientY/innerHeight-.5;
      pedir();
    },{passive:true});
  }
}

/* ================= vídeo del hero ================= */
const vid=document.getElementById("video-hero");
if(vid){
  if(movOk){
    vid.addEventListener("canplay",()=>vid.classList.add("listo"));
    new IntersectionObserver(es=>es.forEach(e=>{
      if(e.isIntersecting){vid.play().catch(()=>{})}else{vid.pause()}
    }),{threshold:.05}).observe(vid.parentElement);
  }else{
    vid.removeAttribute("autoplay");vid.pause();
  }
}

/* ================= efectos de botones ================= */
document.addEventListener("click",e=>{
  const b=e.target.closest(".btn,.btn-mini");
  if(!b||b.id==="btn-carro")return;
  const r=b.getBoundingClientRect(),d=Math.max(r.width,r.height);
  const o=document.createElement("span");o.className="onda";
  o.style.cssText=`width:${d}px;height:${d}px;left:${e.clientX-r.left-d/2}px;top:${e.clientY-r.top-d/2}px`;
  b.appendChild(o);
  setTimeout(()=>o.remove(),700);
});
if(movOk&&ratonFino){
  document.querySelectorAll(".hero-cta .btn").forEach(b=>{
    b.addEventListener("mousemove",e=>{
      const r=b.getBoundingClientRect();
      b.style.transform=`translate(${(((e.clientX-r.left)/r.width)-.5)*14}px,${(((e.clientY-r.top)/r.height)-.5)*10}px) scale(1.04)`;
    });
    b.addEventListener("mouseleave",()=>b.style.transform="");
  });
  document.querySelectorAll(".zona").forEach(z=>{
    z.addEventListener("mousemove",e=>{
      const r=z.getBoundingClientRect();
      const gx=((e.clientX-r.left)/r.width)-.5,gy=((e.clientY-r.top)/r.height)-.5;
      z.style.transform=`translateY(-6px) perspective(700px) rotateX(${(-gy*7).toFixed(2)}deg) rotateY(${(gx*7).toFixed(2)}deg)`;
    });
    z.addEventListener("mouseleave",()=>z.style.transform="");
  });
}

/* ================= revelado + contadores ================= */
const io=new IntersectionObserver(es=>es.forEach(e=>{
  if(!e.isIntersecting)return;
  e.target.classList.add("vis");
  e.target.querySelectorAll("[data-contar]").forEach(el=>{
    if(el._hecho)return;el._hecho=true;
    const fin=+el.dataset.contar,t0=performance.now(),dur=movOk?1400:1;
    const paso=t=>{
      const p=Math.min((t-t0)/dur,1);
      el.textContent=Math.round(fin*(1-Math.pow(1-p,3))).toLocaleString("es-ES");
      if(p<1)requestAnimationFrame(paso);
    };
    requestAnimationFrame(paso);
  });
  io.unobserve(e.target);
}),{threshold:.18});
document.querySelectorAll(".reveal,.cifras-grid").forEach(el=>io.observe(el));

/* ================= cuenta atrás ================= */
const APERTURA=new Date("2026-10-01T09:00:00+02:00").getTime();
function cuenta(){
  const d=Math.max(0,APERTURA-Date.now());
  $("#c-dias").textContent=Math.floor(d/864e5);
  $("#c-horas").textContent=String(Math.floor(d/36e5)%24).padStart(2,"0");
  $("#c-min").textContent=String(Math.floor(d/6e4)%60).padStart(2,"0");
  $("#c-seg").textContent=String(Math.floor(d/1e3)%60).padStart(2,"0");
}
cuenta();setInterval(cuenta,1000);

/* ================= clases ================= */
const dias=Object.keys(CLASES);
const hoyIdx=Math.min(Math.max(new Date().getDay()-1,0),6);
let diaActivo=dias[hoyIdx]||"Lunes";
let claseSel=null;

function pintarDias(){
  $("#dias").innerHTML=dias.map(d=>
    `<button class="dia-btn ${d===diaActivo?"activo":""}" role="tab" aria-selected="${d===diaActivo}" data-dia="${d}">${d}</button>`
  ).join("");
}
function claveReserva(dia,c){return `${dia}|${c.h}|${c.n}`}
function pintarClases(){
  $("#clases-lista").innerHTML=CLASES[diaActivo].map((c,i)=>{
    const ya=reservas.some(r=>r.k===claveReserva(diaActivo,c));
    return `<div class="clase">
      <span class="clase-hora">${c.h}</span>
      <span><span class="clase-nombre">${c.n}</span><br><span class="clase-info">${c.m}</span></span>
      <span class="clase-plazas"><b>${c.p}</b> plazas</span>
      <button class="btn-mini ${ya?"btn-cuenta":"btn-carro"}" data-reservar="${i}" ${ya?"disabled":""}>${ya?"Reservada":"Reservar"}</button>
    </div>`;
  }).join("");
}
pintarDias();pintarClases();
$("#dias").addEventListener("click",e=>{
  const b=e.target.closest("[data-dia]");if(!b)return;
  diaActivo=b.dataset.dia;pintarDias();pintarClases();
});
$("#clases-lista").addEventListener("click",e=>{
  const b=e.target.closest("[data-reservar]");if(!b||b.disabled)return;
  if(!usuario){abrirModal("modal-cuenta");toast("Accede para reservar tu clase");return}
  claseSel=CLASES[diaActivo][+b.dataset.reservar];
  $("#reserva-detalle").innerHTML=`<b>${claseSel.n}</b> · ${diaActivo} a las ${claseSel.h}<br>${claseSel.m}`;
  abrirModal("modal-reserva");
});
$("#btn-confirmar-reserva").addEventListener("click",()=>{
  if(!claseSel)return;
  reservas.push({k:claveReserva(diaActivo,claseSel),dia:diaActivo,h:claseSel.h,n:claseSel.n});
  guardar("ng_reservas",reservas);
  cerrarModales();pintarClases();
  toast("Reserva confirmada. ¡Nos vemos el día 1!");
});

/* ================= tienda ================= */
const cats=["Todo",...new Set(PRODUCTOS.map(p=>p.cat))];
let catActiva="Todo";
function pintarFiltros(){
  $("#filtros").innerHTML=cats.map(c=>
    `<button class="dia-btn ${c===catActiva?"activo":""}" data-cat="${c}">${c}</button>`
  ).join("");
}
function pintarProductos(){
  const lista=PRODUCTOS.filter(p=>catActiva==="Todo"||p.cat===catActiva);
  $("#prod-grid").innerHTML=lista.map(p=>`
    <article class="prod">
      <div class="prod-img">${p.etq?`<span class="prod-etq">${p.etq}</span>`:""}${p.img?`<img src="${p.img}" alt="" loading="lazy">`:ICONOS[p.ico]}</div>
      <div class="prod-cuerpo">
        <span class="prod-cat">${p.cat}</span>
        <h3>${p.n}</h3>
        <p>${p.d}</p>
        <div class="prod-pie">
          <span class="prod-precio">${p.ant?`<small>${fmt(p.ant)}</small>`:""}${fmt(p.pr)}</span>
          <button class="btn-mini btn-carro" data-add="${p.id}">Añadir</button>
        </div>
      </div>
    </article>`).join("");
}
pintarFiltros();pintarProductos();
$("#filtros").addEventListener("click",e=>{
  const b=e.target.closest("[data-cat]");if(!b)return;
  catActiva=b.dataset.cat;pintarFiltros();pintarProductos();
});
$("#prod-grid").addEventListener("click",e=>{
  const b=e.target.closest("[data-add]");if(!b)return;
  carro[b.dataset.add]=(carro[b.dataset.add]||0)+1;
  guardar("ng_carro",carro);pintarCarro();
  toast("Añadido al carrito");
});

/* ================= carrito ================= */
function pintarCarro(){
  const ids=Object.keys(carro).filter(id=>carro[id]>0);
  const cuerpo=$("#carro-cuerpo");
  let total=0,unidades=0;
  if(!ids.length){
    cuerpo.innerHTML=`<p class="carro-vacio">Tu carrito está vacío.<br>La tienda te espera más arriba.</p>`;
  }else{
    cuerpo.innerHTML=ids.map(id=>{
      const p=PRODUCTOS.find(x=>x.id===id),q=carro[id];
      total+=p.pr*q;unidades+=q;
      return `<div class="carro-item">
        ${p.img?`<img src="${p.img}" alt="">`:ICONOS[p.ico]}
        <div><h4>${p.n}</h4>
          <div class="cant">
            <button data-q="${id}|-1" aria-label="Quitar una unidad">−</button>
            <span>${q}</span>
            <button data-q="${id}|1" aria-label="Añadir una unidad">+</button>
          </div>
        </div>
        <span class="carro-precio">${fmt(p.pr*q)}</span>
      </div>`;
    }).join("");
  }
  $("#carro-total").textContent=fmt(total);
  const bd=$("#badge-carro");
  bd.textContent=unidades;bd.classList.toggle("on",unidades>0);
}
pintarCarro();
$("#carro-cuerpo").addEventListener("click",e=>{
  const b=e.target.closest("[data-q]");if(!b)return;
  const[id,d]=b.dataset.q.split("|");
  carro[id]=Math.max(0,(carro[id]||0)+ +d);
  if(!carro[id])delete carro[id];
  guardar("ng_carro",carro);pintarCarro();
});
$("#btn-carro").addEventListener("click",()=>{
  $("#panel-carro").classList.add("abierto");$("#velo").classList.add("on");
});
$("#btn-pagar").addEventListener("click",()=>{
  if(!Object.keys(carro).length){toast("El carrito está vacío");return}
  if(!usuario){cerrarPanel();abrirModal("modal-cuenta");toast("Accede para completar tu pedido");return}
  carro={};guardar("ng_carro",carro);pintarCarro();cerrarPanel();
  toast("Pedido registrado. Te avisaremos para la recogida.");
});
function cerrarPanel(){$("#panel-carro").classList.remove("abierto");$("#velo").classList.remove("on")}
$("#velo").addEventListener("click",cerrarPanel);

/* ================= cuenta de socio ================= */
function pintarPerfil(){
  if(usuario){
    $("#vista-login").style.display="none";$("#vista-perfil").style.display="block";
    $("#perfil-hola").textContent=`Hola, ${usuario.nombre}`;
    $("#perfil-num").textContent=usuario.num;
    $("#btn-cuenta").textContent=usuario.nombre.split(" ")[0];
    $("#mis-reservas").innerHTML=reservas.length
      ? reservas.map(r=>`<div class="clase"><span class="clase-hora">${r.h}</span><span><span class="clase-nombre">${r.n}</span><br><span class="clase-info">${r.dia}</span></span><span></span></div>`).join("")
      : `<p style="color:var(--texto2);font-size:.9rem">Aún no tienes reservas. Elige tu clase en el horario.</p>`;
  }else{
    $("#vista-login").style.display="block";$("#vista-perfil").style.display="none";
    $("#btn-cuenta").textContent="Acceder";
  }
}
pintarPerfil();
$("#btn-cuenta").addEventListener("click",()=>{pintarPerfil();abrirModal("modal-cuenta")});
$("#form-login").addEventListener("submit",e=>{
  e.preventDefault();
  usuario={nombre:$("#log-nombre").value.trim(),email:$("#log-email").value.trim(),
           num:"F-"+String(Math.floor(Math.random()*900)+100)};
  guardar("ng_usuario",usuario);
  pintarPerfil();pintarClases();cerrarModales();
  toast(`Bienvenido, ${usuario.nombre.split(" ")[0]}`);
});
$("#btn-salir").addEventListener("click",()=>{
  usuario=null;localStorage.removeItem("ng_usuario");
  pintarPerfil();cerrarModales();toast("Sesión cerrada");
});

/* ================= modales ================= */
function abrirModal(id){$("#"+id).classList.add("on");document.body.style.overflow="hidden"}
function cerrarModales(){
  document.querySelectorAll(".modal").forEach(m=>m.classList.remove("on"));
  document.body.style.overflow="";
}
document.querySelectorAll("[data-cerrar]").forEach(b=>b.addEventListener("click",()=>{cerrarModales();cerrarPanel()}));
addEventListener("keydown",e=>{if(e.key==="Escape"){cerrarModales();cerrarPanel();cerrarLegales()}});

/* ================= cookies y páginas legales ================= */
const cajaCk=$("#cookies");
function activarVideoRemoto(){
  if(!vid||vid.dataset.remotoOk)return;
  let hay=false;
  vid.querySelectorAll("source[data-src]").forEach(s=>{s.src=s.dataset.src;hay=true});
  if(hay){vid.dataset.remotoOk="1";vid.load();if(movOk)vid.play().catch(()=>{})}
}
const eleccionCk=leer("ng_cookies",null);
if(eleccionCk==="todas")activarVideoRemoto();
if(!eleccionCk)setTimeout(()=>cajaCk.classList.add("on"),900);
$("#ck-aceptar").addEventListener("click",()=>{
  guardar("ng_cookies","todas");cajaCk.classList.remove("on");
  activarVideoRemoto();toast("Cookies aceptadas");
});
$("#ck-necesarias").addEventListener("click",()=>{
  guardar("ng_cookies","necesarias");cajaCk.classList.remove("on");
  toast("Solo cookies necesarias");
});
document.querySelectorAll("[data-abrir-cookies]").forEach(b=>b.addEventListener("click",e=>{
  e.preventDefault();cajaCk.classList.add("on");
}));
function cerrarLegales(){
  document.querySelectorAll(".legal").forEach(l=>l.classList.remove("on"));
  document.body.style.overflow="";
  if(!leer("ng_cookies",null))cajaCk.classList.add("on");
}
document.querySelectorAll("[data-legal]").forEach(b=>b.addEventListener("click",e=>{
  e.preventDefault();
  document.querySelectorAll(".legal").forEach(l=>l.classList.remove("on"));
  cajaCk.classList.remove("on");
  const p=document.getElementById("legal-"+b.getAttribute("data-legal"));
  if(p){p.classList.add("on");p.scrollTop=0;document.body.style.overflow="hidden"}
}));
document.querySelectorAll("[data-cerrar-legal]").forEach(b=>b.addEventListener("click",cerrarLegales));

/* ================= newsletter ================= */
$("#form-news").addEventListener("submit",e=>{
  e.preventDefault();
  e.target.reset();
  toast("¡Apuntado! Te avisaremos de la apertura.");
});
</script>
<?php wp_footer(); ?>
</body>
</html>
