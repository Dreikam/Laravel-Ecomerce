function comprar(){
    Swal.fire({
    	title: 'Has comprado con exito!',
    	icon: 'success',

    	backdrop: true,
    	timer: 5000,
    	timerProgressBar: true,

    	allowOutsideClick: false,
    	allowEscapeKey: false,
    	allowEnterKey: false,
    	stopKeydownPropagation: true,

    	showConfirmButton: true,
    	confirmButtonColor: '#6c757d',

    });
}

$('#delete').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
  title: '¿Estas seguro?',
  text: "Esto no se puede revertir!",
  icon: 'error',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Borrar',
  cancelButtonText: 'Cancelar',
  timer: 5000,
  timerProgressBar: true,
  showClass: {
    popup: 'animated fadeInDown faster'
  },
  hideClass: {
    popup: 'animated fadeOutUp faster'
  }

}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Eliminado!',
      'Se ha eliminado el usuario',
      'success',
      5000,
  )
  document.location.href = href;
  }
})
})


$('#compra').on('click', function(e){
    const href = $(this).attr('action');

    Swal.fire({
  title: 'Has comprado el producto!',
  icon: 'success',
  text: 'el vendedor se pondra en contacto pronto',
  showConfirmButton: false,
});
});
