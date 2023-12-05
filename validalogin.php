<?php
include 'conexionBD.php';

$email="";
$password="";
$nameErr="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (empty($_POST["email"]))
{
$nameErr = "El correo es requirido";
}
else
{
$email = $_POST["email"];

}
if (empty($_POST["pwd"]))
{
$nameErr = "La contraseña es requirido";
}
else
{
$password $_POST["pwd"];

}

//echo "Si llegan los datos";
///echo "<br>".$email;
//echo "<br>".$pass;
if(strlen($email)<1)
{ 
    echo "el email esta en blanco";
}
else
{

$sql = "SELECT id, nombre FROM usuarios where email='$email' an";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "ha sido conectado";
header("Location: principal.php");
} else { 
    echo "Error en usuario o contraseña";
}
$conn->close();
}
}
else
{
echo "No hay datos";
echo "<a href='login.php'> regresar </a>";
}

?>