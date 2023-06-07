
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
        src="./img/diferencia-entre-realidad-virtual-y-aumentada (1).jpg"
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
        
     

      <hr />

      <!-- Contact Section -->
      <div class="w3-container w3-padding-64" id="contact">
        <h1>Contactános</h1>
        <br />
        <p>
       Nuestros servicios incluyen la integración de elementos virtuales en el mundo real, la creación de contenido visualmente impactante, la implementación de funciones interactivas y la adaptación de la RA a diferentes industrias, como la publicidad, el turismo, la educación y la medicina. Estamos comprometidos en ofrecer soluciones innovadoras y de calidad que permitan a nuestros clientes aprovechar al máximo los beneficios de la realidad aumentada en sus proyectos y negocios.
        </p>
        <p class="w3-text-blue-grey w3-large">
          <b>Ubicado en Santiago de los caballeros Calle 14 F #26</b>
        </p>
        <p>
          Nos puede contactar también por la siguiente via teléfono: 829-482-4947 o correo electrónico erimeralcantara@gmail.com
        </p>
        <form action="/registrados_action.php" target="_blank" method="post">
          <p>
            <input
              class="w3-input w3-padding-16"
              type="text"
              placeholder="Nombre"
              required
              name="firstName"
            />
          </p>
          <p>
            <input
              class="w3-input w3-padding-16"
              type="text"
              placeholder="Apellido"
              required
              name="lastName"
            />
          </p>
          <p>
            <input
              class="w3-input w3-padding-16"
              type="email"
              placeholder="Correo Electronico"
              required
              name="email"
            />
          </p>
          <p>
            <input
              class="w3-input w3-padding-16"
              required
              name="phone"
              placeholder="829-473-9271"
            />
          </p>
          <p>
            <input
              class="w3-input w3-padding-16"
              type="text"
              placeholder="Mensaje"
              required
              name="opinion"
            />
          </p>
          <p>
            <input class="w3-button w3-light-grey w3-section" name="btnRegistrados" id="btnRegistrados" type="submit" value="Enviar Formulario"/>
           
          </p>
        </form>
      </div>
      <!-- End page content -->

      
    </div>
      

   <?php include_once 'footer.php'?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>