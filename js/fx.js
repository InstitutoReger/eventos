$(document).ready(function(){
  $("#cadInscrito").on('submit', function(e){
    e.preventDefault();
    $("#enviaFrm span").show();

    var form = $(this).serialize();

    $.ajax({
      url: 'ctrl/ctrlSite.php?acao=inscricao',
      data: form,
      type: 'post',
      dataType: 'json',
      success: function(result){
        if(result['tipo'] == 'success'){
          setTimeout(function(){
            $("#enviaFrm span").hide();
            $("#enviaFrm").html(result['msg']);
            document.getElementById("cadInscrito").reset();
          }, 3000)
        } else{
          $("#enviaFrm span").hide();
          alert(result['msg']);
        }
      }
    });
  })

  $("input[type=checkbox]").on('click', function(e){
    var seq = $(this).attr('data-seq');
    var idClicado = $(this).attr('id');
    var idGrupo = $(this).closest('tbody').attr('id');
    var data = $(this).closest('tr').children('.data').html();
    var horario = $(this).closest('tr').children('.horario').html();


    /*
    // se o evento tiver sequencia, então marca a segunda parte do evento
    if(seq != 0){
      if($('#cb'+seq).prop('checked') == true){
        $('#cb'+seq).prop('checked', false);
      } else {
        $('#cb'+seq).prop('checked', true);
      }
    }    
    
    if(seq == 7 || seq == 9){
      if($(this).is(':checked')){
        $('#dia2').find('.cb').not(this).not('.workshop').not('.palestra').prop('disabled', true);
        $('#cb'+seq).prop('disabled', false);
      } else{
        $('#dia2').find('.cb').not(this).not('.workshop').not('.palestra').prop('disabled', false );
      }
    } else if(seq == 6 || seq == 8){
      if($(this).is(':checked')){
        $('#dia1').find('.cb').not(this).not('.workshop').not('.palestra').prop('disabled', true);
        $('#cb'+seq).prop('disabled', false);
      } else{
        $('#dia1').find('.cb').not(this).not('.workshop').not('.palestra').prop('disabled', false );
      }
    }*/
    
    // quando o usuário seleciona um evento em um período, desmarca os outros do mesmo período, evitando inscrição em cursos concomitantes
    $('#'+idGrupo+' tr').each(function(){
      var dataIrmaos = $(this).find('.data').html();
      var horarioIrmaos = $(this).find('.horario').html();
      var idIrmaos = $(this).find('input[type=checkbox]').attr('id');

      if($('#'+idClicado).prop('checked') == true){
        if((idClicado != idIrmaos) && (horarioIrmaos == horario) && (dataIrmaos == data)){
          $('#'+idIrmaos).prop('disabled', true);
        }
      } else {
        if(horarioIrmaos == horario && dataIrmaos == data){
          $('#'+idIrmaos).prop('disabled', false);
        }
      }


      /*if(idClicado == 'cb10' || idClicado == 'cb11' || idClicado == 'cb12' || idClicado == 'cb13'){
        if($('#'+idClicado).prop('checked') == true){
          $('#cb7').prop('disabled', true);
          $('#cb9').prop('disabled', true);
        } else {
          $('#cb7').prop('disabled', false);
          $('#cb9').prop('disabled', false);
        
        }
      }

      
      if(idClicado == 'cb16' || idClicado == 'cb15' || idClicado == 'cb14'){
        if($('#'+idClicado).prop('checked') == true){
          $('#cb6').prop('disabled', true);
          $('#cb8').prop('disabled', true);
        } else {
          $('#cb6').prop('disabled', false);
          $('#cb8').prop('disabled', false);
        
        }
      }*/
    })
    
  })
})


function converteData(data){
  var dia = data.split('-')[2];
  var mes = data.split('-')[1];
  var ano = data.split('-')[0];

  return dia+'/'+mes+'/'+ano;
}


