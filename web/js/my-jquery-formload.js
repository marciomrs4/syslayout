$formload = jQuery.noConflict();

$formload(document).on('click','#form1',function(){
//alert('TESTE');
    $formload.get("/layout/web/modulo/demo/forms/formDefault.php",function(data){
        $formload("#demo").html(data);
    });

});

$formload(document).on('click','#botaoSave', function (e){

    e.preventDefault();

    var dados = $formload("#usuario").serialize();

    var icone = $formload('<img src="../../img/241.GIF">');


    $formload.ajax({
        type: "POST",
        url: "action/usuario.php",
        data: dados,

        beforeSend: function()
        {
            //alert('Teste');
            $formload(".btn-primary").hide();
            $formload("#imageSave").html(icone);
            //alert('Teste');
        },

        complete: function()
        {
            //alert('Complete');

        },

        success: function(data)
        {
            //alert('Sucess');

            $formload(icone).remove();
            $formload(".btn-primary").show();
            $formload("#load").html(data);

        },

        error: function(){
            alert("Houve um erro na Requisicao");
        }
    });

    return false;

    alert('Loaded');



});