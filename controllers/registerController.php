<html>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
<?php
require 'connection.php';


$namePlayer=$_POST['namePlayer'];
$email=$_POST['email'];
$password=$_POST['password'];


$stmtValidateEmail = $mysqli->prepare("SELECT COUNT(email) AS cantidad from `users` where email='$email'");
$stmtValidateEmail->execute();
$resultValidateEmail=$stmtValidateEmail->get_result();
$rowCantidad=$resultValidateEmail->fetch_assoc();
if ($rowCantidad['cantidad']!==0){
  ?>
<script>

    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Este correo ya esta registrado en la sistema',
  shorConfirmButton:true,
  confirmButtonText:'Cerrar',
  confirmButtonColor:"#3b4cca"
}).then((result) => {
    history.back();
})

</script>
  <?php
}else{
$stmtRegisterUser = $mysqli->prepare("INSERT INTO `users` (`email`, `jugador`, `pass`) VALUES (?, ?, ?)");
$stmtRegisterUser->bind_param("sss",$email,$namePlayer,$password);
$stmtRegisterUser->execute();
$last = mysqli_insert_id($mysqli);
session_start();
$_SESSION['id']= $last;
$_SESSION['email'] = $email;
$_SESSION['namePlayer'] = $namePlayer;
?>
<script>

    Swal.fire({
  icon: 'success',
  title: '',
  text: 'Usuario creado con exito',
  shorConfirmButton:true,
  confirmButtonText:'Cerrar',
  confirmButtonColor:"#3b4cca"
}).then((result) => {
    window.location.href = "../dashboard";
})

</script>
<?php


}
?>
