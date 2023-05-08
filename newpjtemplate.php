<form action="controllers/registerNewPj" class="pb-3 pt-3 text-start fs-6" id="form-register-pj"  method='post'>
        <div class="row">
        <div class="col-lg-6 col-12 ">  
          <div class="text-center ">
            <h6 class="text-start fw-bolder">Crear nuevo pj</h6>
          </div>
          <div class="row">
          <div class="col-lg-6 col-12 shadow-sm pb-2">  
          <label class="form-label mt-2" >Nombre </label>
          <input type="text" class="form-control pt-0 pb-0 " value="" id="id-sprite-url"  name="spriteUrl" hidden>
          

          <input type="text" class="form-control pt-0 pb-0 " name="namePj" required>
          <label class="form-label mt-2" for="regionPj">Region </label>
          <select class="form-select"  id="" name="regionPj">
            <option value='Kanto'>Kanto</option>
            <option value='Johto'>Johto</option>
            <option value='Hoenn'>Hoenn</option>
            <option value='Sinnoh'>Sinnoh</option>
            <option value='Teselia'>Teselia</option>
            <option value='Kalos'>Kalos</option>
            <option value='Alola'>Alola</option>
            <option value='Galar'>Galar</option>
            
          </select>
          </div>
          <div class="col-lg-6 col-12 d-grid text-center shadow-sm pb-2"> 
          <label class="form-label mt-2" for="userName">Selecciona un Sprite </label>
          <img src="" class="pointer-click m-auto" id='preview-sprite-pj' onclick="showSprites()">
      </div>
      </div>
          <div class="row">
            <div class="col-lg-6 col-12 shadow-sm pb-2">  
              <label class="form-label mt-2" for="userName">Fuerza </label>
              <input type="number"  pattern="[1-9]" class="form-control pt-0 pb-0 " name="fuerza" required>
              <label class="form-label mt-2" for="userName">Destreza </label>
              <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="destreza" required>
              <label class="form-label mt-2" for="userName">Resistencia </label>
              <input type="number"  pattern="[1-9]" class="form-control pt-0 pb-0 " name="resistencia" required>
              <label class="form-label mt-2" for="userName">Suerte </label>
              <input type="number"  pattern="[1-9]" class="form-control pt-0 pb-0 " name="suerte" required>
            </div>  
            <div class="col-lg-6 col-12 shadow-sm pb-2">
              <label class="form-label mt-2" for="userName">Percepcion </label>
              <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="percepcion" required>
              <label class="form-label mt-2" for="userName">Inteligencia </label>
              <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="inteligencia" required>
              <label class="form-label mt-2" for="userName">Apariencia </label>
              <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="apariencia" required>
              <label class="form-label mt-2" for="userName">Zennys </label>
              <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="zennys" required>
            </div> 
            <div class="col-12 shadow-sm pb-2">
            <label class="form-label mt-2" for="">Inventario </label>
              <textarea name="inventario" id="" class="w-100 form-control border border-success" cols="" rows="10"></textarea>
            </div>
         
          </div>

          </div>
          <div class="col-lg-6 col-12 ">  
          <div class="row">
          <div class="col-lg-6 col-12 shadow-sm pb-2"> 
          <label class="form-label mt-2" for="">Informatica</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="informatica" > 
          <label class="form-label mt-2" for="">Conocimiento Pkn</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="conocimientopkmn" >
          <label class="form-label mt-2" for="">Mecanica</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="mecanica" >
          <label class="form-label mt-2" for="">Pelea</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="pelea" >
          <label class="form-label mt-2" for="">Tecnologia</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="tecnologia" >
          <label class="form-label mt-2" for="">Cultura</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="cultura" >
          <label class="form-label mt-2" for="">Cocina</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="cocina" >
          <label class="form-label mt-2" for="">Supervivencia</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="supervivencia" >
          <label class="form-label mt-2" for="">Cartografia</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="cartografia" >
          <label class="form-label mt-2" for="">Conducir</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="conducir" >
          </div>
          <div class="col-lg-6 col-12 shadow-sm pb-2">  
       
          <label class="form-label mt-2" for="">Investigacion</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="investigacion" >
          <label class="form-label mt-2" for="">Pericias</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="pericias" >
          <label class="form-label mt-2" for="">Subterfugio</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="subterfugio" >
          <label class="form-label mt-2" for="">Sigilo</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="sigilo" >
          <label class="form-label mt-2" for="">Medicina</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="medicina" >
          <label class="form-label mt-2" for="">Interpretacion</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="interpretacion" >
          <label class="form-label mt-2" for="">Ciencias</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="ciencias" >
          <label class="form-label mt-2" for="">Atletismo</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="atletismo" >
          <label class="form-label mt-2" for="">Alerta</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="alerta" >
          <label class="form-label mt-2" for="">Intimidacion</label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="intimidacion" >
          </div>
          </div>

     

          </div>
          <div id='create-new-pj-space-btn' class="d-flex w-100 p-2">
          <div class='bg-truewhite  w-100 d-flex pb-2 pt-2'>
          <button type="submit" class="btn btn-primary mt-3 w-50 m-auto">Guardar Nuevo Pj</button>
</div>
          
          </div>
     
          </div>

        </form> 