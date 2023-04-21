$(function (){

    function onSelectCliente() {
        var area_id_sede = $(this).val();

        $.get('https://app.aquitoymensajeria.com/api/sedes/'+area_id_sede+'/selsede', function (data){

            var html_select = '<option value="">Seleccione una sede...</option>'
            for (var  i=0; i<data.length; ++i)
                html_select += '<option value="'+data[i].sede_id+'">'+data[i].sede_nombre+'</option>';

            $('#area_id_sede').html(html_select);
            console.log(data);
            }
        )
    }

    $('#area_id_cliente').on('change', onSelectCliente);
});
