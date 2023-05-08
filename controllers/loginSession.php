<html>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
<?php
require 'connection.php';


session_start();

$email=$_POST['email'];
$password=$_POST['password'];


$stmtIsLoggin = $mysqli->prepare("SELECT * from `users` where email='$email' AND pass='$password'");
$stmtIsLoggin->execute();
$resultIsLoggin=$stmtIsLoggin->get_result();
$validateUserFound=mysqli_num_rows($resultIsLoggin);
if($validateUserFound===1){
    $rowIsLoggin=$resultIsLoggin->fetch_assoc();

    $_SESSION['id']= $rowIsLoggin["id"];
$_SESSION['email'] = $rowIsLoggin["email"];
$_SESSION['namePlayer'] = $rowIsLoggin["jugador"];
header("location:../dashboard");


}else{
?>
<script>

    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Usuario o Contrasena incorrecta',
  shorConfirmButton:true,
  confirmButtonText:'Cerrar',
  confirmButtonColor:"#3b4cca"
}).then((result) => {
    history.back();
})

</script>

<?php

}



?>