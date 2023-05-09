<?php 
$id_pj=$_GET['id']; 
require 'controllers/connection.php';
$sqlPokemons= "SELECT id_pkmn, sprite from pokemon where id_pj=$id_pj and rancho=0";
$sqlPokemonsResult=mysqli_query($mysqli,$sqlPokemons);
$sqlPokemonRows=mysqli_fetch_all($sqlPokemonsResult);

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
                        <img src="<?= $sqlPokemonRows[0][1]; ?>" data-pokemon='<?= $sqlPokemonRows[0][0]; ?>'id="img-pokemon" class="img-fluid" width='200px' alt="" onerror="this.src='img/pokeball.png'">
                        <img src="<?= $sqlPokemonRows[1][1]; ?>" data-pokemon='<?= $sqlPokemonRows[1][0]; ?>'id="img-pokemon" class="img-fluid" width='200px' alt="" onerror="this.src='img/pokeball.png'">
                  </div>
                  <div class="col-lg-4 col-4">
                        <img src="<?= $sqlPokemonRows[2][1]; ?>" data-pokemon='<?= $sqlPokemonRows[2][0]; ?>'id="img-pokemon" class="img-fluid" width='200px' alt="" onerror="this.src='img/pokeball.png'">
                        <img src="<?= $sqlPokemonRows[3][1]; ?>" data-pokemon='<?= $sqlPokemonRows[3][0]; ?>'id="img-pokemon" class="img-fluid" width='200px' alt="" onerror="this.src='img/pokeball.png'">
                  </div>
                  <div class="col-lg-4 col-4">
                        <img src="<?= $sqlPokemonRows[4][1]; ?>" data-pokemon='<?= $sqlPokemonRows[4][0]; ?>'id="img-pokemon" class="img-fluid" width='200px' alt="" onerror="this.src='img/pokeball.png'">
                        <img src="<?= $sqlPokemonRows[5][1]; ?>" data-pokemon='<?= $sqlPokemonRows[5][0]; ?>'id="img-pokemon" class="img-fluid" width='200px' alt="" onerror="this.src='img/pokeball.png'">
                  </div>
                  
                </div>
              </div>
            </div>
          </div>


         </div>

         <script>
          document.querySelectorAll("[data-pokemon]").forEach((e)=>{
            e.addEventListener("click", f =>{
              let id_pkmn = f.target.attributes['data-pokemon'].value;
              loadingImg(spaceDashboard)
                $(spaceDashboard).load(`pokemontemplate.php?id_pkmn=${id_pkmn}`, function(responseTxt, statusTxt, xhr){
                  if(statusTxt == "success")
                  
                  
                  if(statusTxt == "error")
                    alert("Error: " + xhr.status + ": " + xhr.statusText);
                });
              
            })
          })
         </script>