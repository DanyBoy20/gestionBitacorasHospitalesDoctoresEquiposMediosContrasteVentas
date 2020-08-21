<header class="encabezado">
	<div class="logo">
		<img src="vista/img/mdkrlogo.svg">
	</div>
	<div class="usuario">
		<input type="checkbox" id="chkusu">
		<label for="chkusu" class="btnusu">	
			<img class="foto" src="vista/img/submenuusu.png">
		</label>
		<p class="datos"><?php echo $_SESSION["nombre"]?>
			<div class="menuusuario">
				<ul>
					<li><a href="inicio">Editar Perfil</a></li>
					<li><a href="salir">Salir</a></li>
				</ul>
			</div>
		</p>
	</div>
</header>