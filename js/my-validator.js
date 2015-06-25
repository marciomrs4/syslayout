/**
 * maxlength( length ): M�ximo de caracteres
rangelength( range ): Faz com que o elemento requer um intervalo de valores dado
max( value ): Valor m�ximo permitido
url( ): URL v�lida
date( ): Data v�lida
dateISO( ): Data ISO v�lida
number( ): Campo num�rico
digits( ): S� aceita d�gitos
creditcard( ): Um n�mero de cart�o de cr�dito
equalTo( other ): igual � um determinado valor
 */


var $valida = jQuery.noConflict();

function submitForm(form){			
	
	$valida("#botaoSave").hide();

    $valida("#imageSave").show();

	form.submit();
	
}


$valida(document).ready( function() 
{
	
	$valida("#usuario").validate({
/*		  REGRAS DE VALIDA��O DO FORMUL�RIO */
		rules:{
            outro:{
				required: true,  /*Campo obrigatório */
				minlength: 5     /*No m�nimo 5 caracteres */
			},
            departamento:{
				required: true
			}
		},
/*		 DEFINI��O DAS MENSAGENS DE ERRO */
		messages:{
            outro:{
				required: "Preencha o campo Email",
				minlength: "O campo deve conter no m�nimo 5 caracteres"
			},
            departamento:{
				required: "Campo Departamento é Obrigadorio"
			}
		},

        submitHandler: function(form){
            submitForm(form);
        }
	});




});