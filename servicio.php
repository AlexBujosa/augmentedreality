
<!DOCTYPE html>
<html>
  <head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <style>
      body {
        font-family: "Times New Roman", Georgia, Serif;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: "Playfair Display";
        letter-spacing: 5px;
      }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar (sit on top) -->
    <?php include_once 'header.php'?>

    <!-- Header -->
    <header
      class="w3-display-container w3-content w3-wide"
      style="max-width: 1600px; min-width: 500px"
      id="home"
    >
      <img
        class="w3-image"
        src="./img/img1 (2).jpg"
        alt="Hamburger Catering"
        width="1600"
        height="800"
      />
      <div class="w3-display-bottomleft w3-padding-large w3-opacity">
        <h1 class="w3-xxlarge">Le Catering</h1>
      </div>
    </header>
    <!-- Page content -->
    <div class="w3-content" style="max-width: 1100px">
        
      <!-- About Section -->
      <div class="w3-row w3-padding-64" id="about">
     
        <div class="w3-col m12 w3-padding-large">
          <h1 class="w3-center">Nuestro Servicios</h1>
          <br />
          <h5 class="w3-center">Lo que ofrecemos</h5>
          <p class="w3-large">
          Ofrecemos una amplia gama de servicios de Realidad Aumentada para satisfacer las necesidades de tu empresa o proyecto. Ya sea que estés en el campo del marketing, la educación, la arquitectura, el entretenimiento o cualquier otra industria, nuestra experiencia en Realidad Aumentada te ayudará a lograr resultados sorprendentes
            
          </p>
          <p class="w3-large w3-text-grey w3-hide-medium">
          La Realidad Aumentada puede aplicarse en una amplia variedad de campos, desde el entretenimiento y los videojuegos hasta la educación, la medicina, la arquitectura, el turismo, la industria manufacturera y más.
          </p>
        </div>
      </div>

      <hr />

      <!-- Menu Section -->
      <div class="w3-row w3-padding-64" id="menu">
        <div class="w3-col l6 w3-padding-large">
          <h1 class="w3-center">Que permite estos servicios?</h1>
          <br />
          <h4>Experiencias interactivas</h4>
          <p class="w3-text-grey">
          Crea experiencias envolventes y atractivas para tus clientes, permitiéndoles interactuar con elementos virtuales superpuestos en el mundo real. Desde juegos y aplicaciones interactivas hasta presentaciones y demostraciones de productos, la Realidad Aumentada hará que tu marca se destaque.
          </p>
          <br />

          <h4>Educación y formación </h4>
          <p class="w3-text-grey">
          Transforma el proceso de aprendizaje con la Realidad Aumentada. Crea contenido educativo interactivo que permita a los estudiantes explorar conceptos complejos de manera visual y práctica. Además, la Realidad Aumentada puede ser una herramienta poderosa para la formación de empleados, facilitando la comprensión de procesos y procedimientos.
          </p>
          <br />

          <h4>Visualización arquitectónica</h4>
          <p class="w3-text-grey">
          Visualiza proyectos arquitectónicos en tiempo real y a escala, permitiendo a los arquitectos, diseñadores y clientes explorar los espacios antes de que se construyan. Con la Realidad Aumentada, podrás visualizar modelos 3D, experimentar con diferentes estilos y materiales, y tomar decisiones informadas.
          </p>
          <br />

          <h4>Marketing y publicidad</h4>
          <p class="w3-text-grey">
          Impulsa tu estrategia de marketing con campañas de Realidad Aumentada que cautiven a tu audiencia. Crea experiencias interactivas en tus puntos de venta, promociones especiales o eventos, brindando a tus clientes una experiencia única que les permita conocer y experimentar tus productos o servicios de manera innovadora.
          </p>
          <br />

          
        </div>

        <div class="w3-col l6 w3-padding-large">
          <img
            src="./img/hombre-vertical.jpg"
            class="w3-round w3-image w3-opacity-min"
            alt="Menu"
            style="width: 100%"
          />
        </div>
      </div>

      

   <?php include_once 'footer.php'?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>