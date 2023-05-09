
var previousPicked =0
const spaceDashboard= document.querySelector('#space-dashboard-left');
const passInput = document.querySelector('#pass-input')
const btnSelectPj = document.querySelector('#btn-select-pj');
const clearLeftSide=()=>{  spaceDashboard.innerHTML=''}
const whatSprite = Math.floor(Math.random() * (1200 - 1) + 1);
var previewSpritePj
var lastSelected=0;
var pokemonAddedName;
  // const imgTest= document.getElementById('testDrag');
  // imgTest.style.position = 'absolute'
  // clonImg=imgTest.cloneNode(true);
  // draggie=new Draggabilly(clonImg);
  // draggie.setPosition( 0, 0 )
  // document.getElementById('testClon').appendChild(clonImg);


function previewSprite(){
  previewSpritePj = document.getElementById('preview-sprite-pj');
  
  previewSpritePj.src = spritesPjs[whatSprite];
  
  document.getElementById("id-sprite-url").value=spritesPjs[whatSprite]
  

}
function loadingImg(e){
   $(e).html(`<img src="img/pokeball.png" width="100vh" alt="" class="mx-auto d-block loading-img" id='preview-sprite-pj'></img>`);
   
}

async function imgLanding() {
  idForFecth = Math.floor(Math.random() * (905 - 1) + 1);
  let response = await fetch(`https://pokeapi.co/api/v2/pokemon/${idForFecth}`);
  let pokemon = await response.json();
}

// LOGIN SCRIPTS
document.getElementById('reveal-pass')?.addEventListener('click', () => {
  const type = passInput.getAttribute('type') === 'password' ? 'text' : 'password';
  passInput.setAttribute('type', type);
})

// REGISTER SCRIPTS
document.getElementById('pass-validate')?.addEventListener('keyup', () => {
  if (passInput.value !== document.getElementById('pass-validate').value) {
    document.querySelector('#icon-val-pass').classList.remove('bi', 'bi-question-lg', 'text-success');
    document.getElementById('pass-validate').style = 'border-color:#cc0000!important';
    return document.querySelector('#icon-val-pass').classList.add('bi', 'bi-x-lg', 'text-danger');
  }
  document.querySelector('#icon-val-pass').classList.remove('bi', 'bi-x-lg', 'text-danger');
  document.querySelector('#icon-val-pass').classList.add('bi', 'bi-check-lg', 'text-success');
  document.getElementById('pass-validate').style = 'border-color:#008000!important';
})

function validateRegUserForm() {
  passInput.value === document.getElementById('pass-validate').value ? document.getElementById('form-register-user').submit() : '';
}

//DASHBOARD SCRIPTS
document.querySelector('#btn-new-pj')?.addEventListener('click', () => {
  loadingImg(spaceDashboard)
  $(spaceDashboard).load(`newpjtemplate.php`, function(responseTxt, statusTxt, xhr){
    if(statusTxt == "success")
    clearSelectedPj()
    previewSprite();;
    if(statusTxt == "error")
      alert("Error: " + xhr.status + ": " + xhr.statusText);
  });

})


// REGISTER NEW PJ SCRIPTS

const showSprites = () => {
  console.log('click')
  Swal.fire({
    title: 'Selecciona 1',
    html: `<div class="container-fluid" id="space-div-sprites-pj"></div>`,
    width: '98%',
    showConfirmButton: true,
    confirmButtonText: 'Cerrar',
    confirmButtonColor: "#3b4cca",
    showCloseButton:true,
    customClass: {
      closeButton: 'sticky-top',
    }
  })
  let textInner = ''
  let len = spritesPjs.length;
  while (len--) {
    textInner += `<img src="${spritesPjs[len]}" class="pointer-click col-lg-1 col-sm-6 m-1" data-id="${len}" onclick="selectedSprite(event)">`
  }
  document.getElementById('space-div-sprites-pj').innerHTML = textInner
}

function selectedSprite(e){
  idSprite=e.target.getAttribute('data-id');
  urlSprite=e.target.getAttribute('src');
  document.querySelector(`[data-id="${previousPicked}"]`).classList.remove('border','border-success','border-1','rounded-2');
  document.querySelector(`[data-id="${idSprite}"]`).classList.add('border','border-success','border-1','rounded-2');
  previousPicked=idSprite;
  previewSpritePj.src=urlSprite;
  document.getElementById("id-sprite-url").value=urlSprite

}

// SELECT AND PLAY WITH A PJ SCRIPTS
function clearSelectedPj(){
  document.getElementById(`btn-select-pj-${lastSelected}`)?.classList.remove("selectedPj")
}

function selectedPj(e){
  
  // document.getElementById('flush-collapseOne').classList.remove('show')
  
   
  $("#flush-collapseOne").collapse('toggle');

  loadingImg(spaceDashboard)
  clearSelectedPj()
  document.getElementById(`btn-select-pj-${e}`).classList.add("selectedPj")
  lastSelected = e
  clearLeftSide();
  $(spaceDashboard).load(`pjtemplate.php?id=${e}`);
  
  $('#space-for-pokemon-list').load(`listpokemontemplate.php?id=${e}`);
}


//UPDATE PJ SHEET
function updatePj(){
formUpdatePj= document.querySelector('#form-update-pj');
      

    $.ajax({
      type: 'post',
      url: 'controllers/updatePj',
      data: $('#form-update-pj').serialize(),
      success: function () {
        Swal.fire({
          title: 'Actualizado',
          text: `Haz guardado los cambios con exito`,
          icon:'success',
          showConfirmButton: true,
          confirmButtonText: 'Cerrar',
          confirmButtonColor: "#3b4cca",
          showCloseButton:true,
          customClass: {
            closeButton: 'sticky-top',
          }
        })
      }
    });
}

function deletePj(idPj){
  Swal.fire({
    title: 'Eliminar',
    text: `Estas seguro que deseas eliminar este personaje`,
    icon:'warning',
    showConfirmButton: true,
    showDenyButton: true,
    confirmButtonText: 'Si',
    denyButtonText: 'Cancelar',
    denyButtonColor: '#3b4cca',
    confirmButtonColor: "#ff0000",
    showCloseButton:true,

    
    customClass: {
      closeButton: 'sticky-top',
    }
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      actualDeletePj(idPj)
    } else if (result.isDenied) {
      
    }
  })


}

function actualDeletePj(idPj){
  $.ajax({
    type: 'post',
    url: 'controllers/deletePj',
    data:{
      id:idPj
    },
    success: function () {
      location.reload()
    }
  });
}

//REGISTER NEW POKEMON SCRIPTS

function catchedPokemon(){
  loadingImg(spaceDashboard)
  clearLeftSide();
  $(spaceDashboard).load(`newpokemontemplate.php`);
}


async function fetchListOfPokemon(){
  let response = await fetch(`https://pokeapi.co/api/v2/pokemon/?limit=1015`);
  let pokemonList = await response.json();
  let textInner = ''
  let len = pokemonList.results.length;

  while (len--) {
    textInner += `<option value="${pokemonList.results[len].name}"/>`
  }
  
  document.querySelector('#list-pokemon').innerHTML=textInner

  pokemonAddedName=document.querySelector('#selected-pokemon-to-catch')
}


function formNewPokemon(e){
  loadingImg(spaceDashboard)
  clearLeftSide();
  $(spaceDashboard).load(`newpokemontemplate.php?id_pj=${e}`, function(responseTxt, statusTxt, xhr){
    if(statusTxt == "success")
    
    fetchListOfPokemon()
    if(statusTxt == "error")
      alert("Error: " + xhr.status + ": " + xhr.statusText);
  });

}




 $(document).on('change', '#selected-pokemon-to-catch', function() {
  
  pickedPokemon=pokemonAddedName.value
  pokemonPickedData(pickedPokemon)

 });



 async function pokemonPickedData(pickedPokemon){

  try{
    const response=await fetch(`https://pokeapi.co/api/v2/pokemon/${pickedPokemon}`)
    const data=await response.json()
    console.log(data)
      let typeA=data?.types[0]?.type.name || ''
      let typeB=data?.types[1]?.type.name || ''
      document.getElementById('tipo-a').value=typeA
      document.getElementById('tipo-b').value=typeB
      document.getElementById('id-api-pokemon').value=data.id
      document.getElementById("flexCheckDefault").checked = false;
      document.getElementById('preview-sprite-pokemon').src=data.sprites.front_default
      document.getElementById('id-sprite-url-pokemon').value=data.sprites.front_default
      document.getElementById('is-shinny').classList.remove('d-none')
      $(document).on('change', '#flexCheckDefault', function(e) {
        if(e.target.checked){
          
            document.getElementById('preview-sprite-pokemon').src=data.sprites.front_shiny
            document.getElementById('id-sprite-url-pokemon').value=data.sprites.front_shiny
  
        }else{
            
            document.getElementById('preview-sprite-pokemon').src=data.sprites.front_default
            document.getElementById('id-sprite-url-pokemon').value=data.sprites.front_default
        }
      });
        
console.log(document.getElementById('id-sprite-url-pokemon').value)
  
  }catch(error){
    console.log(error)
    document.getElementById('id-api-pokemon').value=''
    document.getElementById('is-shinny').classList.add('d-none')
    document.getElementById('preview-sprite-pokemon').src=''
    document.getElementById('id-sprite-url-pokemon').value=''
  }


  
 }

 function addAtkIconElem(e,iconSpace){
  let iconAtkElem=e.target.value;
  
  document.getElementById(`${iconSpace}`).src=`img/icons/${iconAtkElem}.png`
 }