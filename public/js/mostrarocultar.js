function mostrar() {
  $show=document.getElementById("password")
  $show.type="text";
  $b2=document.getElementById("b2")
  $b2.type="button";
  $b2=document.getElementById("b1")
  $b2.type="hidden";
}
function ocultar() {
  $show=document.getElementById("password")
  $show.type="password";
  $b2=document.getElementById("b2")
  $b2.type="hidden";
  $b2=document.getElementById("b1")
  $b2.type="button";
}

let formu = document.getElementById('formBuscar');
let input = document.getElementById('inputbuscar');

formu.addEventListener('submit', (e) => {
    if (input.value == '' || input.value == false) {
        e.preventDefault();
    } else {
        formu.submit;
    }

});
