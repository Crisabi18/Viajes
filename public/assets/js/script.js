$(function(){
    $('#form').submit(function(){
        var data = $(this).serialize();
        $.post('consulta.php',data,function(respuesta){
             $('#exampleModal').modal('hide');
             $('#Modal2').modal('open');
        });
        return false;
    });
});