<?php
include_once 'connDb.php';
include_once 'contactTable.php';

function registerContactos($nombre, $apellido, $telefono, $correo, $mensaje){
    global $conn;

    $sql ="INSERT INTO contact (FirstName, LastName, Email, Phone, Opinion) VALUES (? , ? , ? , ? , ? )";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nombre, $apellido, $correo, $telefono, $mensaje);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
    $stmt->close();
    $conn->close();
}

function Todos_Registrados() : array{
    global $conn,$hostname, $username,$password,$database,$port;
    $conn = new mysqli($hostname, $username,$password,$database,$port);
    $sql = "Select * from contact";
    $result = $conn->query($sql);
    $contacts = [];
    if(!$result) return $contacts;
    while ($row = $result->fetch_assoc()) {
        $contact= new Contact();
        $contact->FirstName = $row['FirstName'];
        $contact->LastName = $row['LastName'];
        $contact->Email = $row['Email'];
        $contact->Phone = $row['Phone'];
        $contact->Opinion = $row['Opinion'];

        $contacts[] = $contact;
    }
    return $contacts;
}

// Verificar si se ha enviado el formulario
if (!empty($_POST["btnRegistrados"])) {
    // Obtener los datos del formulario
    $nombre = $_POST['firstName'];
    $apellido = $_POST['lastName'];
    $correo = $_POST['email'];
    $telefono = $_POST['phone'];
    $mensaje = $_POST['opinion'];

    if(!empty($nombre) && !empty($apellido) && !empty($correo) && !empty($telefono)){
        $resultSuccess = registerContactos($nombre, $apellido, $apellido, $correo, $mensaje);
    }
    header('Location:registrados.php');
    exit();
}


?>