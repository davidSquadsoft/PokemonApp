<?php 
session_start();
require 'controllers/connection.php';
$id=$_SESSION['id'];
$email=$_SESSION['email'] ;
$namePlayer=$_SESSION['namePlayer'] ;
$stmtPjs = $mysqli->prepare("SELECT * from `pj` where id=$id");
$stmtPjs->execute();
$resultPjs=$stmtPjs->get_result();
$validatePjs=mysqli_num_rows($resultPjs);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Mi Perfil</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="p-2">

  <div class="container-fluid fs-5 vh-100">
    <div class="row pt-4">
      <p class="text-center text-white"><?= $namePlayer ?></p>

    </div>
    
    <div class="row justify-content-center pb-3">

      <div class="col-lg-4 col-12 bg-truewhite p-4">
      <P class="fw-bold fs-4 text-start">Personajes</P>
        <button class="btn btn-sm text-white bg-bluedark w-100 mb-2" id='btn-new-pj'>Crear Nuevo Personaje <i class="bi bi-plus-lg"></i></button>
        
        <div class="accordion accordion-flush" id="acordionPjs">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed btn btn-sm text-white bg-bluedark w-100 mb-2 rounded" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Mis Personajes
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#acordionPjs">
                   
        <?php
        if ($validatePjs!==0){
                while($rowPjs = $resultPjs->fetch_assoc()){
                  ?>
                  <button class="btn bg-white d-flex w-100 text-start p-1  fw-light mb-2" id="btn-select-pj-<?= $rowPjs['id_pj']?>" onclick="selectedPj(<?= $rowPjs['id_pj']?>)">
                    <img src="<?= $rowPjs['sprite']?>" alt="">
                    <p class="text-capitalize fs-5 text-dark m-0">
                      <?= $rowPjs['name'] ?> <br>
                      
                      <span class="fs-6 text-secondary">Region: <?= $rowPjs['region'] ?><br>
                       Vida: <?= $rowPjs['vida'] ?><br>
                      Exp: <?= $rowPjs['exp'] ?></span>
                    </p>
                                      </button>

                

                <?php
                }
            }else{
                echo "<span class='text-danger fs-6'>Aun no cuentas con personajes creados</span>"  ;
            }
                ?>
            </div>
          </div>

        </div>
        <div id="space-for-pokemon-list">

        </div>
        


        
      </div>
      <div class="col-lg-7 col-12 bg-truewhite border-start align-items-start d-flex" id='space-dashboard-left'>


      </div>
   


    </div>
  </div>
  <script src="scripts/sprites.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  


  <script src="https://unpkg.com/draggabilly@3/dist/draggabilly.pkgd.min.js"></script>
  
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous" defer></script>
  <script src="scripts/scripts.js?v=1" defer></script>
</body>

</html>