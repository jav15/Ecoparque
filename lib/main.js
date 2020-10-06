
jQuery(document).on('submit','#formLg',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'Main_app/login.php',
                type:'POST',
                dataType:'json',
                data: $(this).serialize(),
                beforeSend:function(){
                 $('.botonlg').val('Validando...')
                }
              })
              .done(function(respuesta){
                console.log(respuesta);
                if(!respuesta.error){

                  if(respuesta.tipo == '1'){
                      location.href = 'Main_app/inicio/';
                  }
                }else{
                  $('.error').slideDown('slow');
                  setTimeout(function(){
                      $('.error').slideUp('slox');
                  },3000);
                  $('.botonlg').val('Iniciar Sesión')
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
