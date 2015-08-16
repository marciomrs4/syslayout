var $alert = jQuery.noConflict();

$alert(document).ready(function(){

    //Fecha o modal do erro padrão do sistema
    $alert('.close').click(function(){
		$alert("#myModal").hide(1000);
	});

    //Encolhe os paineis do sistema de forma padrao
    $alert(".panel-heading").click(
        function(){
            $alert(this).next().toggle(1000);
        });


        $alert('.alert-success').parent().parent().parent().parent().hide(3000);

});