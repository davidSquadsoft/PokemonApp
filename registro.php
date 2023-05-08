<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center d-flex vh-100">
            <div class="col-12 col-sm-10 col-lg-5 text-center">
                    <form action="controllers/registerController" class="form-control pb-3 pt-3 text-start" id="form-register-user" onsubmit="event.preventDefault(); validateRegUserForm();" method='post'>
                        <div class="text-center ">
                            <img src="img/pokemon-logo.png" alt="" id="" class="w-50 mb-3 ">
                            <h2 class="text-center fw-bolder">Registrarse</h2>
                        </div>
                        <label class="form-label" for="userName">Nombre del Jugador</label>
                        <div class="form-floating">
                            <input type="text" class="form-control pt-0 pb-0 "  name="namePlayer" required>
                        </div>
                        <label class="form-label mt-2"  for="userName">Correo</label>
                        <div class="form-floating">
                            <input type="email" class="form-control pt-0 pb-0 " name="email" required>
                        </div>
                        <label class="form-label mt-2" for="userName">Contraseña</label>
                        <div class="input-group ">
                            <div class="form-floating">
                                <input type="password" required class="form-control  pt-0 pb-0" id="pass-input" name="password">
                            </div>
                            <span class="input-group-text pointer-click" id="reveal-pass"><i class="bi bi-eye-fill text-bluelight"></i></span>
                        </div>
                        <label class="form-label mt-2" for="userName">Confirmar Contraseña</label>
                        <div class="input-group ">
                            <div class="form-floating">
                                <input type="password" required class="form-control  pt-0 pb-0" id="pass-validate" name="">
                            </div>
                            <span class="input-group-text" id="reveal-pass"><i class="bi bi-question-lg" id="icon-val-pass"></i></span>
                        </div>
                        <input type="submit" value="Registrarse" name='register-btn' class="form-control mt-3 mb-3 btn btn-success btn-sm fs-5">
                        <div class="d-flex">
                            <a href="#" class=" text-red">Recordar Contraseña</a>
                            <a href="index" class=" text-primary ms-auto">Iniciar Sesion</a>
                        </div>
                    </form>
         
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="scripts/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>\
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>