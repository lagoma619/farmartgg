$(function (){

    function onSelectCliente() {
        var domicilio_id_cliente = $(this).val();
        //$.get('https://app.aquitoymensajeria.com/api/areas/'+area_id_cliente+'/selcliente', function (data){
        //$.get('http://192.168.1.105/applvl9/public/api/areas/'+domicilio_id_cliente+'/selcliente', function (data){
        $.get('https://app.aquitoymensajeria.com/api/areas/'+domicilio_id_cliente+'/selcliente', function (data){

            var html_select = '<option value="">Seleccione una opción...</option>'
            for (var  i=0; i<data.length; ++i)
                html_select += '<option value="'+data[i].area_nombre+'">'+data[i].area_nombre+'</option>';

            $('#domicilio_origen1').html(html_select);
            $('#domicilio_destino1').html(html_select);
            console.log(data);
            }
        )
    }

    $('#domicilio_id_cliente').on('change', onSelectCliente);
});
