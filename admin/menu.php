<div class="well nav-collapse sidebar-nav">
	<ul class="nav nav-tabs nav-stacked main-menu">
		<li class="nav-header hidden-tablet">Main</li>
		<li><a class="ajax-link" href="inicio.php"><i class="icon-home"></i><span class="hidden-tablet"> Inicio</span></a></li>
		<li><a class="ajax-link" href="perfil.php"><i class="icon-th-list"></i><span class="hidden-tablet"> Perfil</span></a></li>
		<?php if($rol == 1){ ?>
		<li><a class="ajax-link" href="usuarios.php"><i class="icon-user"></i><span class="hidden-tablet"> Usuarios</span></a></li>
		<li><a class="ajax-link" href="crear_cuenta.php"><i class="icon-edit"></i><span class="hidden-tablet"> Crear Usuario</span></a></li>
		<?php } ?>		
		<li><a class="ajax-link" href="reportes.php"><i class="icon-signal"></i><span class="hidden-tablet"> Reportes</span></a></li>
		<li><a class="ajax-link" href="reportes_especialidad.php"><i class="icon-signal"></i><span class="hidden-tablet"> Reportes Especialidad</span></a></li>
		<li><a class="ajax-link" href="graficas.php"><i class="icon-signal"></i><span class="hidden-tablet"> Graficas</span></a></li>
		<li><a href="alumno.php"><i class="icon-user"></i><span class="hidden-tablet"> Alumnos</span></a></li>
		<li><a href="logout.php"><i class="icon-off"></i><span class="hidden-tablet"> Salir</span></a></li>
	</ul>
	
</div><!--/.well -->