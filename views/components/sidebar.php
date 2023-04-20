<div class="sidebar">
		<div class="logo-details">
			<div class="logo_name"><a href="inicio.view.php"> FluX</a></div>
			<i class="bx bx-menu" id="btn"></i>
		</div>
		<ul class="nav-list">
			<li>
				<a href="lancamento_list.view.php">
					<i class="bx bxs-coin-stack"></i>
					<span class="links_name">Lançamentos</span>
				</a>
				<span class="tooltip">Lançamentos</span>
			</li>
			<li>
				<a href="pagamento_list.view.php">
					<i class='bx bx-dollar-circle'></i>
					<span class="links_name">Pagamentos</span>
				</a>
				<span class="tooltip">Métodos de Pagamentos</span>
			</li>
			<li>
				<a href="categoria_list.view.php">
					<i class='bx bx-category'></i>
					<span class="links_name">Categorias</span>
				</a>
				<span class="tooltip">Categorias</span>
			</li>
			<li class="profile">
				<div class="profile-details">
					<div class="name_job">
						<div class="name"><?= $_SESSION["usuario"] ?></div>
						<div class="job">Desenv. Web Servidor</div>
					</div>
				</div>
				<a href="logout.view.php">
					<i class='bx bx-log-out' id="log_out"></i>
				</a>
			</li>
		</ul>
	</div>