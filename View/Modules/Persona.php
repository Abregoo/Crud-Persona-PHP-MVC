<?php $personaController = new UsuariosController(); ?>

<?php include("Navbar.php"); ?>

<div class="container">
	<div class="col-lg-10 mx-auto bg-white rounded shadow-lg mt-5 p-4">
		<form method="POST">
			<div class="row">
				<div class="col-lg-4">
					<div class="form-group">
						<label for="nombres_r">Nombres</label>
						<input type="text" name="nombres_r" class="form-control" id="nombres_r" placeholder="Nombres" required autocomplete="off" autofocus>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="form-group">
						<label for="apellidos_r">Apellidos</label>
						<input type="text" name="apellidos_r" class="form-control" id="apellidos_r" placeholder="Apellidos" required autocomplete="off">
					</div>
				</div>

				<div class="col-lg-4">
					<div class="form-group">
						<label for="fecha_nacimiento_r">Fecha Nacimiento</label>
						<input type="date" name="fecha_nacimiento_r" class="form-control" id="fecha_nacimiento_r" required>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="form-group">
						<label for="correo_r">Correo</label>
						<input type="email" name="correo_r" class="form-control" id="correo_r" 
						placeholder="Correo" required autocomplete="off">
					</div>
				</div>

				<div class="col-lg-4">
					<div class="form-group">
						<label for="telefono_r">Telefono</label>
						<input type="text" maxlength="9" pattern="[0-9]{4}-[0-9]{4}" 
						name="telefono_r" class="form-control" id="telefono_r" placeholder="0000-0000" required autocomplete="off">
					</div>
				</div>

				<div class="col-lg-4">
					<div class="form-group">
						<label for="pasatiempo_r">Pasatiempo</label>
						<input type="text" name="pasatiempo_r" class="form-control" id="pasatiempo_r" 
						placeholder="Pasatiempo" required autocomplete="off"
						
						>
					</div>
				</div>

				<div class="col-lg-12">
					<div class="form-group">
						<label for="direccion_r">Direccion</label>
						<input type="text"
						name="direccion_r" class="form-control" id="direccion_r" 
						placeholder="Direccion" required autocomplete="off"
						>
					</div>
				</div>

				<div class="text-center w-100">
					<button type="submit" class="btn btn-success">Registrar</button>
					<?php $request = $personaController->registrarUsuario(); ?>
					<?php if ($request) { ?>
						<script type="text/javascript">
							window.location.href = "Persona";
						</script>
					<?php } ?>
				</div>
			</div>
		</form>
	</div>

	<div class="col-lg-10 mx-auto bg-white rounded shadow-lg mt-5 mb-5 p-4">
		<div class="table-responsive">
			<table class="table table-hover text-center">
				<thead class="thead-dark">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">NOMBRES</th>
						<th scope="col">APELLIDOS</th>
						<th scope="col">FECHA NACIMIENTO</th>
						<th scope="col">CORREO</th>
						<th scope="col">TELÉFONO</th>
						<th scope="col">PASATIEMPO</th>
						<th scope="col">DIRECCIÓN</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php $row = $personaController->buscarUsuario(); $i = 1; ?>
					<?php foreach ($row as $key => $persona) { ?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $persona['nombres']; ?></td>
							<td><?php echo $persona['apellidos']; ?></td>
							<td><?php echo $persona['fecha_nacimiento']; ?></td>
							<td><?php echo $persona['correo']; ?></td>
							<td><?php echo $persona['telefono']; ?></td>
							<td><?php echo $persona['pasatiempo']; ?></td>
							<td><?php echo $persona['direccion']; ?></td>
							<td>
								<button type="button" class="btn btn-danger btnEliminar"
								 data-idpersona="<?php echo $persona['idpersona']; ?>" 
								data-toggle="modal" data-target="#modal_eliminar"><i class="fa fa-trash"></i></button>
							</td>
							<td>
								<button type="button" class="btn btn-warning btnModificar" data-idpersona="<?php echo $persona['idpersona']; ?>" data-toggle="modal" data-target="#modal_modificar"><i class="fa fa-pencil-alt"></i></button>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php include("Modal/PersonaModificar.php"); ?>
<?php include("Modal/PersonaEliminar.php"); ?>