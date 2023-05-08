<?php 
$id_pj=$_GET['id_pj']; 
?>
<form action="controllers/registerNewPj" class="pb-3 pt-3 text-start fs-6 ps-2 pe-2" id="form-register-pj" method='post'>
  <div class="row">
    <div class="col-12 ">
      <div class="text-center ">
        <h6 class="text-start fw-bolder">Agregar Nuevo Pokemon</h6>
      </div>
      <div class="row  shadow-sm bg-body-tertiary  rounded pb-2 border border-1 mb-2">
        <div class="col-lg-6 col-12">
          <label class="form-label mt-2">Apodo </label>
          <input type="text" class="form-control pt-0 pb-0 " value="" id="id-sprite-url-pokemon" name="spriteUrlPokemon" hidden>
          <input type="text" class="form-control pt-0 pb-0 " name="apodo">
          <label class="form-label mt-2">Nombre del Pokemon</label>
          <input type="text" class="form-control pt-0 pb-0 " required name="name" list="list-pokemon" id='selected-pokemon-to-catch'>
          <input type="text" class="form-control pt-0 pb-0 " value="<?= $id_pj ?>" required name="id_pj" list="" id='' hidden>
          <input type="text" class="form-control pt-0 pb-0 "   name="tipoA" list="" id='tipo-a' >
          <input type="text" class="form-control pt-0 pb-0 "   name="tupoB" list="" id='tipo-b' >
          <datalist id="list-pokemon">


          </datalist>
        </div>
        <div class="col-lg-6 col-12 text-center justify-items-center d-grid">
          <img src="" class="m-auto img-fluid" width="130px" id='preview-sprite-pokemon'>
          <div class="form-check d-none" id='is-shinny'>
            <input class="form-check-input text-center float-none" type="checkbox" value="1" name='shinny' id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Es shinny
            </label>
          </div>
        </div>
      </div>
      <div class="row fs-sm">
        <div class="col-lg-4 col-4 align-items-end d-grid  shadow-sm bg-body-tertiary  rounded pb-2 border border-1 ">
          <label class="form-label mt-2" for="userName">Atk Fisico </label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="atkfisico" required>
          <label class="form-label mt-2" for="userName">Atk Especial </label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="atkespecial" required>

        </div>
        <div class="col-lg-4 col-4 align-items-end d-grid  shadow-sm bg-body-tertiary  rounded pb-2 border border-1">

          <label class="form-label mt-2" for="userName">Def Fisica </label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="deffisico" required>
          <label class="form-label mt-2" for="userName">Def Especial </label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="defespecial" required>
        </div>
        <div class="col-lg-4 col-4 align-items-end d-grid  shadow-sm bg-body-tertiary  rounded pb-2 border border-1">
          <label class="form-label mt-2" for="userName">Agilidad </label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="agilidad" required>
          <label class="form-label mt-2" for="userName">Destreza </label>
          <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 " name="destreza" required>
        </div>
        <div class="col-12">
          <!-- MOVE A -->
          <div class="row  shadow-sm bg-body-tertiary  rounded border-1 border pb-2 mt-2">
              <label class="form-label mt-2 mb-0" for=""><img width='64px' src="img/pokeball.png" style="width:20px!important;" id="icon-element-atk-a" /> Ataque 1</label>
              <div class="col-8 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_a_name" placeholder="Nombre del Ataque">
              </div>
              <div class="col-4 col-lg-2 mt-2">
                <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 fs-sm" name="move_a_dmg" placeholder="Dmg">
              </div>
              <div class="col-6 col-lg-2 mt-2">
                <select name="move_a_elemento" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-a-elemento" onchange="addAtkIconElem(event,'icon-element-atk-a')">
                  <option value="">Elemento:</option>
                  <option value="steel">Acero</option>
                  <option value="water">Agua</option>
                  <option value="bug">Bicho</option>
                  <option value="dragon">Dragón</option>
                  <option value="electric">Eléctrico</option>
                  <option value="ghost">Fantasma</option>
                  <option value="fire">Fuego</option>
                  <option value="fairy">Hada</option>
                  <option value="ice">Hielo</option>
                  <option value="fighting">Lucha</option>
                  <option value="normal">Normal</option>
                  <option value="grass">Planta</option>
                  <option value="psychic">Psíquico</option>
                  <option value="rock">Roca</option>
                  <option value="dark">Siniestro</option>
                  <option value="ground">Tierra</option>
                  <option value="poison">Veneno</option>
                  <option value="flying">Volador</option>
                </select>
              </div>
              <div class="col-6 col-lg-2 mt-2 ms-0 me-0">
                <select name="move_a_tipo" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-a-tipo">
                  <option value="">Tipo:</option>
                  <option value="fisico">Fisico</option>
                  <option value="especial">Especial</option>
                </select>
              </div>
              <div class="col-12 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_a_effect" placeholder="Efecto del ataque">
              </div>
          </div>
          <!-- MOVE B -->
          <div class="row  shadow-sm bg-body-tertiary  rounded border-1 border pb-2 mt-2">
              <label class="form-label mt-2 mb-0" for=""><img width='64px' src="img/pokeball.png" style="width:20px!important;" id="icon-element-atk-b" /> Ataque 2</label>
              <div class="col-8 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_b_name" placeholder="Nombre del Ataque">
              </div>
              <div class="col-4 col-lg-2 mt-2">
                <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 fs-sm" name="move_b_dmg" placeholder="Dmg">
              </div>
              <div class="col-6 col-lg-2 mt-2">
                <select name="move_b_elemento" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-b-elemento" onchange="addAtkIconElem(event,'icon-element-atk-b')">
                  <option value="">Elemento:</option>
                  <option value="steel">Acero</option>
                  <option value="water">Agua</option>
                  <option value="bug">Bicho</option>
                  <option value="dragon">Dragón</option>
                  <option value="electric">Eléctrico</option>
                  <option value="ghost">Fantasma</option>
                  <option value="fire">Fuego</option>
                  <option value="fairy">Hada</option>
                  <option value="ice">Hielo</option>
                  <option value="fighting">Lucha</option>
                  <option value="normal">Normal</option>
                  <option value="grass">Planta</option>
                  <option value="psychic">Psíquico</option>
                  <option value="rock">Roca</option>
                  <option value="dark">Siniestro</option>
                  <option value="ground">Tierra</option>
                  <option value="poison">Veneno</option>
                  <option value="flying">Volador</option>
                </select>
              </div>
              <div class="col-6 col-lg-2 mt-2 ms-0 me-0">
                <select name="move_b_tipo" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-b-tipo">
                  <option value="">Tipo:</option>
                  <option value="fisico">Fisico</option>
                  <option value="especial">Especial</option>
                </select>
              </div>
              <div class="col-12 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_b_effect" placeholder="Efecto del ataque">
              </div>
          </div>
          <!-- MOVE C -->
          <div class="row  shadow-sm bg-body-tertiary  rounded border-1 border pb-2 mt-2">
              <label class="form-label mt-2 mb-0" for=""><img width='64px' src="img/pokeball.png" style="width:20px!important;" id="icon-element-atk-c" /> Ataque 3</label>
              <div class="col-8 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_c_name" placeholder="Nombre del Ataque">
              </div>
              <div class="col-4 col-lg-2 mt-2">
                <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 fs-sm" name="move_c_dmg" placeholder="Dmg">
              </div>
              <div class="col-6 col-lg-2 mt-2">
                <select name="move_c_elemento" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-c-elemento" onchange="addAtkIconElem(event,'icon-element-atk-c')">
                  <option value="">Elemento:</option>
                  <option value="steel">Acero</option>
                  <option value="water">Agua</option>
                  <option value="bug">Bicho</option>
                  <option value="dragon">Dragón</option>
                  <option value="electric">Eléctrico</option>
                  <option value="ghost">Fantasma</option>
                  <option value="fire">Fuego</option>
                  <option value="fairy">Hada</option>
                  <option value="ice">Hielo</option>
                  <option value="fighting">Lucha</option>
                  <option value="normal">Normal</option>
                  <option value="grass">Planta</option>
                  <option value="psychic">Psíquico</option>
                  <option value="rock">Roca</option>
                  <option value="dark">Siniestro</option>
                  <option value="ground">Tierra</option>
                  <option value="poison">Veneno</option>
                  <option value="flying">Volador</option>
                </select>
              </div>
              <div class="col-6 col-lg-2 mt-2 ms-0 me-0">
                <select name="move_c_tipo" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-c-tipo">
                  <option value="">Tipo:</option>
                  <option value="fisico">Fisico</option>
                  <option value="especial">Especial</option>
                </select>
              </div>
              <div class="col-12 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_c_effect" placeholder="Efecto del ataque">
              </div>
          </div>
         <!-- MOVE D -->
         <div class="row  shadow-sm bg-body-tertiary  rounded border-1 border pb-2 mt-2">
              <label class="form-label mt-2 mb-0" for=""><img width='64px' src="img/pokeball.png" style="width:20px!important;" id="icon-element-atk-d" /> Ataque 4</label>
              <div class="col-8 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_d_name" placeholder="Nombre del Ataque">
              </div>
              <div class="col-4 col-lg-2 mt-2">
                <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 fs-sm" name="move_d_dmg" placeholder="Dmg">
              </div>
              <div class="col-6 col-lg-2 mt-2">
                <select name="move_d_elemento" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-d-elemento" onchange="addAtkIconElem(event,'icon-element-atk-d')">
                  <option value="">Elemento:</option>
                  <option value="steel">Acero</option>
                  <option value="water">Agua</option>
                  <option value="bug">Bicho</option>
                  <option value="dragon">Dragón</option>
                  <option value="electric">Eléctrico</option>
                  <option value="ghost">Fantasma</option>
                  <option value="fire">Fuego</option>
                  <option value="fairy">Hada</option>
                  <option value="ice">Hielo</option>
                  <option value="fighting">Lucha</option>
                  <option value="normal">Normal</option>
                  <option value="grass">Planta</option>
                  <option value="psychic">Psíquico</option>
                  <option value="rock">Roca</option>
                  <option value="dark">Siniestro</option>
                  <option value="ground">Tierra</option>
                  <option value="poison">Veneno</option>
                  <option value="flying">Volador</option>
                </select>
              </div>
              <div class="col-6 col-lg-2 mt-2 ms-0 me-0">
                <select name="move_d_tipo" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-d-tipo">
                  <option value="">Tipo:</option>
                  <option value="fisico">Fisico</option>
                  <option value="especial">Especial</option>
                </select>
              </div>
              <div class="col-12 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_d_effect" placeholder="Efecto del ataque">
              </div>
          </div>
          
          
          <!-- MOVE E -->
        <div class="row  shadow-sm bg-body-tertiary  rounded border-1 border pb-2 mt-2">
              <label class="form-label mt-2 mb-0" for=""><img width='64px' src="img/pokeball.png" style="width:20px!important;" id="icon-element-atk-e" /> Ataque 5</label>
              <div class="col-8 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_e_name" placeholder="Nombre del Ataque">
              </div>
              <div class="col-4 col-lg-2 mt-2">
                <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 fs-sm" name="move_e_dmg" placeholder="Dmg">
              </div>
              <div class="col-6 col-lg-2 mt-2">
                <select name="move_e_elemento" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-e-elemento" onchange="addAtkIconElem(event,'icon-element-atk-e')">
                  <option value="">Elemento:</option>
                  <option value="steel">Acero</option>
                  <option value="water">Agua</option>
                  <option value="bug">Bicho</option>
                  <option value="dragon">Dragón</option>
                  <option value="electric">Eléctrico</option>
                  <option value="ghost">Fantasma</option>
                  <option value="fire">Fuego</option>
                  <option value="fairy">Hada</option>
                  <option value="ice">Hielo</option>
                  <option value="fighting">Lucha</option>
                  <option value="normal">Normal</option>
                  <option value="grass">Planta</option>
                  <option value="psychic">Psíquico</option>
                  <option value="rock">Roca</option>
                  <option value="dark">Siniestro</option>
                  <option value="ground">Tierra</option>
                  <option value="poison">Veneno</option>
                  <option value="flying">Volador</option>
                </select>
              </div>
              <div class="col-6 col-lg-2 mt-2 ms-0 me-0">
                <select name="move_e_tipo" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-e-tipo">
                  <option value="">Tipo:</option>
                  <option value="fisico">Fisico</option>
                  <option value="especial">Especial</option>
                </select>
              </div>
              <div class="col-12 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_e_effect" placeholder="Efecto del ataque">
              </div>
          </div>
        
        <!-- MOVE F -->
        <div class="row  shadow-sm bg-body-tertiary  rounded border-1 border pb-2 mt-2">
              <label class="form-label mt-2 mb-0" for=""><img width='64px' src="img/pokeball.png" style="width:20px!important;" id="icon-element-atk-f" /> Ataque 6</label>
              <div class="col-8 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_f_name" placeholder="Nombre del Ataque">
              </div>
              <div class="col-4 col-lg-2 mt-2">
                <input type="number" pattern="[1-9]" class="form-control pt-0 pb-0 fs-sm" name="move_f_dmg" placeholder="Dmg">
              </div>
              <div class="col-6 col-lg-2 mt-2">
                <select name="move_f_elemento" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-f-elemento" onchange="addAtkIconElem(event,'icon-element-atk-f')">
                  <option value="">Elemento:</option>
                  <option value="steel">Acero</option>
                  <option value="water">Agua</option>
                  <option value="bug">Bicho</option>
                  <option value="dragon">Dragón</option>
                  <option value="electric">Eléctrico</option>
                  <option value="ghost">Fantasma</option>
                  <option value="fire">Fuego</option>
                  <option value="fairy">Hada</option>
                  <option value="ice">Hielo</option>
                  <option value="fighting">Lucha</option>
                  <option value="normal">Normal</option>
                  <option value="grass">Planta</option>
                  <option value="psychic">Psíquico</option>
                  <option value="rock">Roca</option>
                  <option value="dark">Siniestro</option>
                  <option value="ground">Tierra</option>
                  <option value="poison">Veneno</option>
                  <option value="flying">Volador</option>
                </select>
              </div>
              <div class="col-6 col-lg-2 mt-2 ms-0 me-0">
                <select name="move_f_tipo" class='form-select form-select-sm pb-0 pt-0 fs-sm' id="select-move-f-tipo">
                  <option value="">Tipo:</option>
                  <option value="fisico">Fisico</option>
                  <option value="especial">Especial</option>
                </select>
              </div>
              <div class="col-12 col-lg-3 mt-2">

                <input type="text" class="form-control pt-0 pb-0 fs-sm" name="move_f_effect" placeholder="Efecto del ataque">
              </div>
          </div>
          </div>
        </div>

    
      <div class="col-lg-6 col-12">
        <div class="row">
          <div class="col-lg-6 col-12">


          </div>
          <div class="col-lg-6 col-12">


          </div>
        </div>



      </div>
      <div id='create-new-pj-space-btn' class="d-flex w-100 p-2">
        <div class='bg-truewhite  w-100 d-flex pb-2 pt-2'>
          <button type="submit" class="btn btn-primary mt-3 w-50 m-auto">Guardar Nuevo Pokemon</button>
        </div>

      </div>

    </div>

</form>