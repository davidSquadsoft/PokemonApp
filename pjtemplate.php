<?php 

require 'controllers/connection.php';
$idPj=$_GET['id'];

$stmtPjSelected = $mysqli->prepare("SELECT * from `pj` where id_pj=?");

$stmtPjSelected->bind_param("s", $idPj);
$stmtPjSelected->execute();
$resultPjSelected=$stmtPjSelected->get_result();
$pjSelected=$resultPjSelected->fetch_array(MYSQLI_ASSOC);


?>
<form class="pb-3 pt-3 text-start fs-6" id="form-update-pj">
        <div class="row">
        <div class="col-lg-6 col-12 ">  
     
          <div class="row">
        <div class="col-lg-6 col-12 text-center">  
        <img src="<?= $pjSelected['sprite'] ?>" alt="" class="ms-auto" id=''>
     

    
         </div>
         <div class="col-lg-6 col-12">  
       

          <input type="text" class="form-control pt-0 pb-0 " value="<?= $pjSelected['id_pj'] ?>"  name="id_pj" hidden>

          
          <h5 class="text-start fw-bolder text-capitalize"><?= $pjSelected['name'] ?> </h5>
          <label class="form-label mb-0" for="regionPj">Region: <?= $pjSelected['region'] ?> </label>
          <p class="lh-1">
          <label class="form-label mt-2 text-start text-success fw-bold" for="userName">Experiencia: </label>
        <input type="number" class="form-control pt-0 pb-0 " value="<?= $pjSelected['exp'] ?>"  required name="exp">
        </p>
         </div>
          <div class="col-lg-6 col-12 d-grid text-center"> 
          
         
      </div>
      </div>
          <div class="row">
            <div class="col-lg-6 col-6">  
              <label class="form-label mt-2" for="userName">Fuerza </label>
              <input type="number"  pattern="[1-9]"  class="blocked-input form-control pt-0 pb-0 " name="fuerza" required value="<?= $pjSelected['fuerza'] ?>">
              <label class="form-label mt-2" for="userName">Destreza </label>
              <input type="number" pattern="[1-9]"  class="blocked-input form-control pt-0 pb-0 " name="destreza" required value="<?= $pjSelected['destreza'] ?>">
              <label class="form-label mt-2" for="userName">Resistencia </label>
              <input type="number"  pattern="[1-9]"  class="blocked-input form-control pt-0 pb-0 " name="resistencia" required value="<?= $pjSelected['resistencia'] ?>">
              <label class="form-label mt-2" for="userName">Suerte </label>
              <input type="number"  pattern="[1-9]"  class="blocked-input form-control pt-0 pb-0 " name="suerte" required value="<?= $pjSelected['suerte'] ?>">
            </div>  
            <div class="col-lg-6 col-6">
              <label class="form-label mt-2" for="userName">Percepcion </label>
              <input type="number" pattern="[1-9]"  class="blocked-input form-control pt-0 pb-0 " name="percepcion" required value="<?= $pjSelected['percepcion'] ?>">
              <label class="form-label mt-2" for="userName">Inteligencia </label>
              <input type="number" pattern="[1-9]"  class="blocked-input form-control pt-0 pb-0 " name="inteligencia" required value="<?= $pjSelected['inteligencia'] ?>">
              <label class="form-label mt-2" for="userName">Apariencia </label>
              <input type="number" pattern="[1-9]"  class="blocked-input form-control pt-0 pb-0 " name="apariencia" required value="<?= $pjSelected['apariencia'] ?>">
              <label class="form-label mt-2" for="userName">Zennys </label>
              <input type="number" pattern="[1-9]"  class="blocked-input form-control pt-0 pb-0 " name="zennys" required value="<?= $pjSelected['zenny'] ?>">
            </div> 
            <div class="col-12">
            <label class="form-label mt-2" for="">Inventario </label>
              <textarea name="inventario" id="" class="w-100 form-control border border-success" cols="" rows="10"><?= $pjSelected['inventario'] ?></textarea>
            </div>
         
          </div>

          </div>
          <div class="col-lg-6 col-12">  
          <div class="row">
          <div class="col-lg-6 col-6"> 
          <label class="form-label mt-2" for="">Informatica</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['informatica'] ?>" name="informatica" > 
          <label class="form-label mt-2" for="">Conocimiento Pkn</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['conocimientopkmn'] ?>" name="conocimientopkmn" >
          <label class="form-label mt-2" for="">Mecanica</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['mecanica'] ?>" name="mecanica" >
          <label class="form-label mt-2" for="">Pelea</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['pelea'] ?>" name="pelea" >
          <label class="form-label mt-2" for="">Tecnologia</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['tecnologia'] ?>" name="tecnologia" >
          <label class="form-label mt-2" for="">Cultura</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['cultura'] ?>" name="cultura" >
          <label class="form-label mt-2" for="">Cocina</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['cocina'] ?>" name="cocina" >
          <label class="form-label mt-2" for="">Supervivencia</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['supervivencia'] ?>" name="supervivencia" >
          <label class="form-label mt-2" for="">Cartografia</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['cartografia'] ?>" name="cartografia" >
          <label class="form-label mt-2" for="">Conducir</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['conducir'] ?>" name="conducir" >
          </div>
          <div class="col-lg-6 col-6">  
       
          <label class="form-label mt-2" for="">Investigacion</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['investigacion'] ?>" name="investigacion" >
          <label class="form-label mt-2" for="">Pericias</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['pericias'] ?>" name="pericias" >
          <label class="form-label mt-2" for="">Subterfugio</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['subterfugio'] ?>" name="subterfugio" >
          <label class="form-label mt-2" for="">Sigilo</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['sigilo'] ?>" name="sigilo" >
          <label class="form-label mt-2" for="">Medicina</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['medicina'] ?>" name="medicina" >
          <label class="form-label mt-2" for="">Interpretacion</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['interpretacion'] ?>" name="interpretacion" >
          <label class="form-label mt-2" for="">Ciencias</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['ciencias'] ?>" name="ciencias" >
          <label class="form-label mt-2" for="">Atletismo</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['atletismo'] ?>" name="atletismo" >
          <label class="form-label mt-2" for="">Alerta</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['alerta'] ?>" name="alerta" >
          <label class="form-label mt-2" for="">Intimidacion</label>
          <input type="number" pattern="[1-9]" class="blocked-input form-control pt-0 pb-0 "  value="<?= $pjSelected['intimidacion'] ?>" name="intimidacion" >
          </div>
          </div>

     

          </div>
          <div class="d-flex w-100 p-2" id="update-delete-pj-space-btn">
            <div class='bg-truewhite  w-100 d-flex ps-1 pe-1 pb-2 pt-2'><button type="button" onclick="updatePj()" class="btn btn-primary mt-3">Actualizar Pj</button>
          <button type="button" onclick="deletePj(<?= $pjSelected['id_pj'] ?>)" class="btn btn-danger mt-3 ms-auto">Eliminar Pj</button></div>
          
          </div>
     
          </div>

        </form> 



