
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
        src="./img/realidadaumenta-1.jpg"
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
        <div class="w3-col m6 w3-padding-large w3-hide-small">
          <img
            src="./img/m.jpg"
            class="w3-round w3-image w3-opacity-min"
            alt="Table Setting"
            width="600"
            height="750"
          />
        </div>

        <div class="w3-col m6 w3-padding-large">
          <h1 class="w3-center">Que es la realidad aumentada?</h1>
          <br />
          <h5 class="w3-center">Padre de la realidad aumentada: Ivan Sutherland</h5>
          <p class="w3-large">
          La Realidad Aumentada es una tecnología innovadora que combina el mundo virtual con el mundo real, permitiendo superponer elementos digitales interactivos sobre el entorno físico. Con la Realidad Aumentada, puedes experimentar una fusión única entre lo real y lo virtual, abriendo infinitas posibilidades en diversas áreas.
            
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
          <h1 class="w3-center">Caracteristicas</h1>
          <br />
          <h4>Superposición de elementos virtuales</h4>
          <p class="w3-text-grey">
          La RA permite superponer objetos virtuales, como imágenes, gráficos, videos o texto, sobre el entorno real captado por un dispositivo, como una cámara o unos anteojos.
          </p>
          <br />

          <h4>Interacción en tiempo real</h4>
          <p class="w3-text-grey">
          La RA tiene la capacidad de reconocer y comprender el entorno físico en el que se encuentra el usuario. Puede utilizar la detección de objetos, el reconocimiento de patrones o la localización geográfica para colocar y anclar los elementos virtuales de manera precisa en el mundo real.
          </p>
          <br />

          <h4>Visualización inmersiva</h4>
          <p class="w3-text-grey">
          La RA proporciona una experiencia visual inmersiva al combinar los elementos virtuales con la visión del mundo real. Esto se puede lograr a través de dispositivos como smartphones, anteojos inteligentes, visores de realidad virtual o pantallas holográficas.
          </p>
          <br />

          <h4>Información contextual</h4>
          <p class="w3-text-grey">
          La RA puede proporcionar información adicional y contextual sobre objetos, lugares o personas en tiempo real. Puede mostrar datos enriquecidos, como descripciones, calificaciones, instrucciones o datos históricos, sobre los elementos del entorno.
          </p>
          <br />

          
        </div>

        <div class="w3-col l6 w3-padding-large">
          <img
            src="./img/realidadaumentada-3.jpg"
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
