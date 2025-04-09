<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>OFICIARG</title>
    <!-- Aquí se encuentra la referencia al icono -->
    <link rel="icon" href="imagenes/ico.ico" type="image/x-icon" />
    
    <link rel="stylesheet" href="estilo.css" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <!-- Menú lateral -->
    <nav class="menu">
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Oficios</a></li>
        <li><a href="#">Localidades</a></li>
        <li><a href="#">Trabaja con nosotros!</a></li>
        <li><a href="#sobre-nosotros">Sobre nosotros</a></li>
      </ul>
    </nav>

    <!-- Contenido principal -->
    <main class="contenido">
      <!-- Sección presentación -->
      <section class="presentacion">
        <h1><span class="azul">OFICI</span><span class="arg-celeste">ARG</span></h1>
        <p class="frase-bonita">Somos una red de trabajadores argentinos comprometidos con brindar oficios de calidad cerca tuyo.</p>
        <a href="#sobre-nosotros" class="btn-conocer">Conocé más</a>
      </section>

      <!-- Banner con soles -->
      <div class="banner-completo">
        <img src="imagenes/sol.png" alt="Sol" class="sol izquierdo">
        
        <div class="banner">
            <img src="imagenes/baner1.jpg" class="baner-img active" alt="Oficio 1" />
            <img src="imagenes/baner2.jpg" class="baner-img" alt="Oficio 2" />
            <img src="imagenes/baner3.jpg" class="baner-img" alt="Oficio 3" />
        </div>

        <img src="imagenes/sol.png" alt="Sol" class="sol derecho">
      </div>

      <!-- Ofertas -->
      <h2 class="titulo-ofertas">OFERTAS DEL DÍA</h2>
      <div class="ofertas-wrapper">
        <div class="ofertas-container" id="ofertas-container"></div>
      </div>

      <!-- Sobre nosotros -->
      <section class="sobre-nosotros" id="sobre-nosotros">
        <h2>Nuestra visión</h2>
        <p>
          Nuestra Visión<br><br>
          En OFICIARG, creemos en el poder del trabajo argentino como motor de cambio y crecimiento. Nuestra misión es conectar a los mejores profesionales de oficios con quienes los necesitan, fomentando una economía local más sólida y dinámica. Buscamos ofrecer soluciones rápidas, confiables y de calidad, garantizando un servicio excelente en cada rincón de la Argentina.<br><br>
          Queremos ser el puente entre quienes brindan sus habilidades con dedicación y quienes buscan un trabajo bien hecho. Nos importa que cada cliente sienta no solo satisfacción, sino también el orgullo de apoyar el desarrollo de nuestra comunidad y economía.<br><br>
          En OFICIARG, creemos en una Argentina más conectada, solidaria y trabajadora, donde cada oficio y cada profesional aporta a un futuro mejor para todos.
        </p>
      </section>
    </main>
  </div>

  <script src="script.js"></script>
</body>
</html>
