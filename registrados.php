
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


    <!-- Page content -->
    <div class="w3-content" style="max-width: 1100px">
        
    <br/>
    <br/>
    <br/>

      <?php 
        include('registrados_action.php');
        $contacts = Todos_Registrados();
        $count = 0;
        if(empty($contacts)){
          echo "There is no table";
        }
        else {

        
      ?>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Opinion</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          
          foreach($contacts as $contact){
            $count++;
          
        ?>
          <tr>
            <th scope="row"><?php echo $count ?></th>
            <td><?php echo $contact->FirstName ?></td>
            <td><?php echo $contact->LastName ?></td>
            <td><?php echo $contact->Email ?></td>
            <td><?php echo $contact->Phone ?></td>
            <td><?php echo $contact->Opinion ?></td>
          </tr>

          <?php 
          }
        ?>
        </tbody>
      </table>
      <?php 
      }
      ?>
      
    </div>
      

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
