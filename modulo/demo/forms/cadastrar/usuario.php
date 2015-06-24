<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Novo Usuário</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" id="usuario" method="post" action="action/usuario.php" role="form">
			<div class="form-group">
				<label for="inputNomeUsuario" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-4">
					<input type="text" name="nomeUsuario" class="form-control"
						id="inputNomeUsuario" placeholder="Nome do Usuário">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-4">
					<input type="email" name="email" class="form-control"
						id="inputEmail" placeholder="Email do Usuário">
				</div>
			</div>
			<div class="form-group">
				<label for="inputRamal" class="col-sm-2 control-label">Ramal</label>
				<div class="col-sm-4">
					<input type="text" name="ramal" class="form-control"
						id="inputRamal" placeholder="Ramal do Usuário">
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-sm-2 control-label">Departamento</label>
				<div class="col-sm-2">
					<?php

                    $FormDepartamento = new \Mrs\form\SelectOption();

                    $UserRepository = new \demo\repository\UsuarioRepository();

                    $FormDepartamento->setStmt($UserRepository->selectStmt())
                                     ->setClass('form-control')
                                     ->setSelectName('departamento')
                                     ->listOption();

                    ?>

				</div>
			</div>
			<div class="form-group">
				<label for="inputLogin" class="col-sm-2 control-label">Login</label>
				<div class="col-sm-4">
					<input type="text" name="login" class="form-control"
						id="inputLogin" placeholder="Login do Usuário">
				</div>
			</div>
			<div class="form-group">
				<label for="inputSenha" class="col-sm-2 control-label">Senha</label>
				<div class="col-sm-4">
					<input type="password" name="senha" class="form-control"
						id="inputSenha" placeholder="Senha do Usuário">
				</div>
			</div>
			<div class="form-group">
				<label for="inputRepetirSenha" class="col-sm-2 control-label">Repetir Senha</label>
				<div class="col-sm-4">
					<input type="password" name="repetirSenha" class="form-control"
						id="inputRepetirSenha" placeholder="Senha do Usuário">
				</div>
			</div>
			
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Inativar</label>
				<div class="col-sm-4">
					<div class="checkbox">
						 <input type="checkbox">
					</div>
				</div>
			</div>
			

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-1">
					<button type="submit" id="botaoSave" class="btn btn-primary">
						<span class="glyphicon glyphicon-floppy-saved"></span> Salvar
					</button>
                    <span id="imageSave" style="display: none;">
                        <img src="../../img/495.GIF"/>
                    </span>
				</div>
			</div>

		</form>
	</div>
</div>