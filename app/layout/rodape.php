<!-- Modal -->
<?php
//Carrega dinamincamente os formularios

$FormRequest = new \Mrs\core\FormController();
$FormRequest->setForm()
            ->getForm();

//Instancia do objeto que mostra os erros da aplicacao
use Mrs\core\Error as M;
$Message = new M();
?>
<div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: <?php $Message->getDisplay(); ?>;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Mensagem</h4>
      </div>
      <div class="modal-body">
           <?php
                //Metodos que se encarregam de mostrar os erros
				$Message->showMessages()
                        ->showErrors()
                        ->clear();
			?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<!-- Inicio Rodap� -->
		<footer>
			<nav class="navbar navbar-default navbar-fixed-bottom"
				role="navigation">
					
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#este">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>


					<p class="navbar-text"><?php echo $configGlobal['tituloRodape']; ?></p>

				</div>
				<div class="nav navbar-right collapse navbar-collapse" id="este">
					<button class="btn btn-default btn-lg">
						<span class="glyphicon glyphicon-user"></span> Usuário
					</button>
				</div>


			</nav>
			<nav class="navbar navbar-default" role="navigation">
			
			</nav>

		</footer>

	</div>
	<script src="../../js/jquery-1.11.3.js"></script>
	<script src="../../js/bootstrap.js"></script>
	<script src="../../js/jquery.dataTables.js"></script>
	<script src="../../js/jquery.validate.js"></script>
	<script src="../../js/my-data-table.js"></script>
	<script src="../../js/my-alert.js"></script>	
	<script src="../../js/my-validator.js"></script>
    <script src="../../js/my-jquery-formload.js"></script>
				
</body>
</html>