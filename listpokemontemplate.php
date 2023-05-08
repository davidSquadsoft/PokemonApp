<?php 
$id_pj=$_GET['id']; 
?>
<button class="btn btn-sm text-white bg-red w-100 mb-2" id='btn-new-pj' onclick='formNewPokemon(<?= $id_pj ?>)'>Agregar Nuevo Pokemon <i class="bi bi-plus-lg"></i></button>
<div class="accordion accordion-flush" id="accordionMisPokemon">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed bg-red text-white w-100 mb-2 rounded btn btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Pokemons
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionMisPokemon">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-lg-4 col-4">
                        <img src="img/pokeball.png" class="img-fluid" alt="">
                        <img src="img/pokeball.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-4 col-4">
                        <img src="img/pokeball.png" class="img-fluid" alt="">
                        <img src="img/pokeball.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-4 col-4">
                        <img src="img/pokeball.png" class="img-fluid" alt="">
                        <img src="img/pokeball.png" class="img-fluid" alt="">
                  </div>
                  
                </div>
              </div>
            </div>
          </div>


         </div>