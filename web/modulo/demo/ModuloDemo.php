<!-- Inicio do Menu do Modulo -->		

	<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
                        <?php echo $config['moduloName']; ?>
                </h3>
			</div>
			<div class="panel-body">

				<!-- Painel de a��es -->

				<ul class="nav nav-pills">
				
					<li class="dropdown">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">
								<span class="glyphicon glyphicon-plus"></span> Novo
							</button>
							<button type="button" class="btn btn-primary dropdown-toggle"
								data-toggle="dropdown">
								<span class="caret"></span> <span class="sr-only">Toggle
									Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">

								<li><a href="formUsuario.php"><span class="glyphicon glyphicon-plus-sign"></span>
                                        Usuário
									</a>
								</li>


							</ul>
						</div>
					</li>

					<li class="dropdown">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">
								<span class="glyphicon glyphicon-search"></span> Pesquisar
							</button>
							<button type="button" class="btn btn-primary dropdown-toggle"
								data-toggle="dropdown">
								<span class="caret"></span> <span class="sr-only">Toggle
									Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="listarUsuario.php"><span class="glyphicon glyphicon-list-alt">
										</span>
										Usuário
									</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
				
		<!-- Fim Painel de a��es / Painel do Modulo-->