$(document).ready(function(){
    $('#estado').change(function(event){
        var id_estado=event.currentTarget.value;
        console.log(id_estado);

        $.post('./auxiliar.php', {id: id_estado}, function(dado){
            $('#cidade').html(dado);
        });
    });
});
