


function getfecha(id){
  $.ajax({
      url: 'ajax_getfecha.php',
      type: 'POST',
      data: {id : id},
      dataType: 'html'
  }).done(function(data){
      $('#modal-edit-fecha').html('');
      $('#modal-edit-fecha').html(data);
      $('#modal-edit-fecha').modal('show');
  }).fail(function(xhr, textStatus, errorThrown) {
      console.log(xhr.responseText);
  }).always(function(){
      // console.log('The ajax call ended.');
  });
}

function eliminarfecha(id){
  $.ajax({
      url: 'ajax_eliminarfecha.php',
      type: 'POST',
      data: {id : id},
  }).done(function(data){
        location.reload();
  }).fail(function(xhr, textStatus, errorThrown) {
      console.log(xhr.responseText);
  }).always(function(){
      // console.log('The ajax call ended.');
  });
}









//Cuando se cierran los modales no queden Marcados lo botones
$('#nuevafcha').on('hidden.bs.modal', function () {
  quitarsombrasbotones()
})

function quitarsombrasbotones() {
  $('#boton_nuevo_administrador').css("box-shadow","none");
  $('#boton_nuevo_vendedor').css("box-shadow","none");
    
}

