<!DOCTYPE html>
<html lang="es">
<head>
    <title>Panel administrativo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/icono.svg">
    <script src="../assets/js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="../assets/css/sweet-alert.css">
    <link rel="stylesheet" href="../assets/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.css">
	
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
	
    
    <script src="../assets/js/modernizr.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/js/main.js"></script>
			<style>
	 .loading  {
		 position: fixed;
		 left: 0px;
		 top: 0px;
		 width: 100%;
		 height: 100%;
		 z-index: 9999;
		 background: url('../assets/images/Loading_2.gif') 50% 50% no-repeat rgb(249,249,249);
		opacity: .8; }
	</style>
	
	
</head>
<body onload="startTime()">
<div class="loading"></div>
<?php
				session_start();

				if(!isset($_SESSION['admin_login']))	
				{
					header("location: ../vista/login.php");  
				}

				if(isset($_SESSION['personal_login']))	
				{
					header("location: ../vista/docente/docente_portada.php");	
				}

				if(isset($_SESSION['usuarios_login']))	
				{
					header("location: ../vista/estudiante/estudiante_portada.php");
				}
				
				if(isset($_SESSION['admin_login']))
				{
				?>
				
						 
				
					
				

    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                FUNDIPG
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="../assets/images/graduation.svg" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">FUNDIPG</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="../vista/admin/admin_portada.php"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>&nbsp;&nbsp; Tablero</a></li>
                    <li><a href="#"><i class="zmdi zmdi-favorite zmdi-hc-fw"></i>&nbsp;&nbsp; Mensajes</a></li>
                    <li><a href="#"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Académico</a></li>-->
					<li><a href="asignacion.php"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Eventos</a></li>
					<li><a href="docente.php"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Instructores</a></li>
					<li><a href="alumnos.php"><i class="zmdi zmdi-dns zmdi-hc-fw"></i>&nbsp;&nbsp; Participantes</a></li>
					<li><a href="../vista/calendario/mostrar.php"><i class="zmdi zmdi-calendar-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Calendario</a></li>
					<li><a href="../vista/reporte/mostrar.php"><i class="zmdi zmdi-sort-amount-desc zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes</a></li>
					<li><a href="#"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i>&nbsp;&nbsp; Contabilidad</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="../assets/images/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles"><?php
						echo $_SESSION['admin_login'];
				}
				?></span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="../vista/cerrar_sesion.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li>
            </ul>
        </nav>
		
		
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">
			  			 <?php 
					$hora= getdate();
					
					
					$a="Buen día";
					$b="Buenas tardes";
					$c="Buenas noches";

					if ($hora<12 =='$a'){
					echo "","<font color='green'>$a</font>";
					}
					
					elseif ($hora >=12 =='$b')
					{
					echo "","<font color='green'>$b</font>";	
					}
					elseif ($hora <=16 =='$b')
					{
					echo "","<font color='green'>$b</font>";	
					}
					
					
					elseif ($hora >=19 =='$c')
					{
					echo "","<font color='green'>$c</font>";	
					}
					elseif ( $hora >=24 =='$c')
					{
					echo "","<font color='green'>$c</font>";	
					}
					
					
					
					?> 
					
					
					
					
					<?php
			
					include_once('../vista/config/db.php');

					$database = new Connection();
					$db = $database->open();
					try{	
						$sql = 'SELECT * FROM mainlogin WHERE id=1 ';
						foreach ($db->query($sql) as $row) {
							?>
						
								
								
							<?php 
						}
					}
					catch(PDOException $e){
						echo "Hubo un problema en la conexión: " . $e->getMessage();
					}

					$database->close();

						?>
					
					<small><?php echo $row['username']; ?>!</small>
					
					</h1>
					
					<h5>
					<strong>Tu último acceso es:</strong>
					<div id="date" style="margin-left:100px; margin-top:-15px;"></div>
					 
					</h5>
					
											<?php

				$user_agent = $_SERVER['HTTP_USER_AGENT'];

				
							
				
            </div>
        </div>
		
		<div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation"><a href="docente.php">Docente</a></li>
              <li role="presentation" class="active"><a href="#">Participantes</a></li>
			  <li role="presentation"><a href="padre.php">Padres</a></li>
          
            </ul>
        </div>
		
		 <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../assets/images/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar un nuevo participante, debes de llenar todos los campos del siguiente formulario para poder registrarlo.
                </div>
            </div>
        </div>
       
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
				  <li class="active">Listado de participantes</li>&nbsp;&nbsp;
				 <li><a href="docente.php?op=nuevo">Nuevo docente</a></li>
				 <a href="../vista/alumnos/nuevo.php">Nuevo participante</a>
				 
				 
				</ol>
			</div>
		</div>
	</div>
	
	
	
			<?php 
	
	if(isset($_SESSION['message'])){
		?>
		
		
		 <div class="col-sm-12">
		 
                <div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong> <?php echo $_SESSION['message']; ?>.</strong> 
        </div> 
            </div>
			
			
		<?php

		unset($_SESSION['message']);
		
	}
	
	if(isset($_SESSION['message'])){
		?>
		<div class="alert alert-info text-center" style="margin-top:20px;">
			<?php echo $_SESSION['message']; ?>
		</div>
		<?php

		unset($_SESSION['message']);
	}
		
	
?>

	<div class="container-fluid">
            <h2 class="text-center all-tittles">Listado de participantes</h2>
			
			
			<div class="input-group mb-25" style="margin-right: -10em; min-width: 1000px;">
		  <div class="input-group-prepend">
			<span class="input-group-text" id="basic-addon1"></span>
		  </div>
		  <input id="FiltrarContenido" type="text" class="form-control" placeholder="Buscar participantes" aria-label="Alumnos" aria-describedby="basic-addon1"> 
		</div>
		<button onclick="window.location.href='reportealumno.php'" tooltips-general="PDF" type="button" class="btn btn-secundary" style="margin-top:-60px; margin-left:1000px;"><i class="zmdi zmdi-print zmdi-hc-fw"></i>&nbsp;&nbsp; PDF</button>
		<button onclick="window.location.href='excelalumno.php'" tooltips-general="EXCEL" type="button" class="btn btn-secundary" style="margin-top:-105px; margin-left:1070px;"><i class="zmdi zmdi-print zmdi-hc-fw"></i>&nbsp;&nbsp; EXCEL</button>
		<div class="div-table">
             <table class="table table-striped">
                 
			 <thead>
                          <tr>
                            <th>ID</th>
                            <th>Foto</th>
							<th>Nombre</th>
							<th>Clase</th>
							 <th>          </th>
							<th>Estado</th>
                            
                           
                            <th><center>Acciones</center></th>
                            
                          </tr>
                        </thead>
                        <tbody class="BusquedaRapida">
                          <?php
                          foreach ($dato as $key => $value){
                              foreach ($value as $va) { ?>
                           <tr>
                              <td><?php echo $va['codalum'];?></td>

							<td><?php  echo "<img src='../assets/images/imagenes/".$va['foto']."'width='90'"; ?></td>
                              	

                             
                              <td><?php echo $va ['nombrea'];?> <br> <i class="zmdi zmdi-face"></i>&nbsp;<?php echo $va ['usualu'];?></td>
							  
							   <td><?php echo $va['nomclase'];?></td>
							  
							  
							   <td style="color:#7fb3d5 ;">
							<!--<b> <strong>  <?php echo $va['role'];?></strong></b>-->
							   
							   </td>
							  
						
					<td>
						 <?php    if($va['estado']==1)  { ?> 
						  <form  method="get" action="javascript:activo('<?php echo $va['codalum']; ?>')">
							<button type="submit" class="btn btn-success btn-xs">Activo</button>
						  </form>
						<?php  }   else {?> 

						  <form  method="get" action="javascript:inactivo('<?php echo $va['codalum']; ?>')"> 
							<button type="submit" class="btn btn-danger btn-xs">Inactivo</button>
						  </form>
						<?php  } ?>                         
					</td>
                              



					<td>
			<a href="#ver_<?php echo $va["codalum"]; ?>" title="Ver datos" data-backdrop="false" class="btn btn-primary btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
			<a href="#delete_<?php echo $va["codalum"]; ?>" title="Eliminar" data-backdrop="false" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span></a>
			<?php include('../vista/alumnos/BorrarEditarModal.php'); ?>			
						
						
				<a href="#file_<?php echo $va["codalum"]; ?>" title="Editar" data-backdrop="false" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span></a>
								<?php include('../vista/alumnos/EditarModal.php'); ?>	

					
				<!--<a href="#password_<?php echo $va["codalum"]; ?>" title="Password" data-backdrop="false" class="btn btn-warning btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span></a>-->
				<?php include('../vista/alumnos/Modalpassw.php'); ?>	
						
					</td>
                              </tr>
                              <?php
                              }
                              }
                              ?>
                        </tbody>
						
                      </table>     
            
                
            </div>
        </div>
	
	
		
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">Ayuda del sistema</h4>
                </div>
                <div class="modal-body">
					Elmer José Sut Salvador|
                    Virginia Amarilis Lux Macario|
                    Kan Kenech Federico Hernández Saquic|
                    Dámaris Yulissa Macario Ordóñez
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        
    </div>
	 <script src="../assets/js/reloj.js"></script> 
	 <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
	 
	<script type="text/javascript">
$(document).ready(function () {
   (function($) {
       $('#FiltrarContenido').keyup(function () {
            var ValorBusqueda = new RegExp($(this).val(), 'i');
            $('.BusquedaRapida tr').hide();
             $('.BusquedaRapida tr').filter(function () {
                return ValorBusqueda.test($(this).text());
              }).show();
                })
      }(jQuery));
});
</script> 

 <script>
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      // Asignamos el atributo src a la tag de imagen
      $('#imagenmuestra').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}

// El listener va asignado al input
$("#imagen").change(function() {
  readURL(this);
});
  </script> 
  
  <script>
  function readURL(input) {
  if (input.files && input.files[0]) { //Revisamos que el input tenga contenido
    var reader = new FileReader(); //Leemos el contenido
    
    reader.onload = function(e) { //Al cargar el contenido lo pasamos como atributo de la imagen de arriba
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() { //Cuando el input cambie (se cargue un nuevo archivo) se va a ejecutar de nuevo el cambio de imagen y se verá reflejado.
  readURL(this);
});
  </script>
	 
<!--- -----------------------------------------------------------------------------------------------------> 
	<script>
	function activo(codalum)
{
	var id=codalum;
	$.ajax({
        type:"GET",
		url:"../assets/ajax/editar_estado_activo_alumno.php?id="+id,
    }).done(function(data){
        window.location.href ='../folder/alumnos.php';
    })

}

// Editar estado inactivo
function inactivo(codalum)
{
	var id=codalum;
	$.ajax({
		type:"GET",
		url:"../assets/ajax/editar_estado_inactivo_alumno.php?id="+id,
    }).done(function(data){
        window.location.href ='../folder/alumnos.php';
    })
}

	
	</script>
	 	 	<script>
$(window).on('load', function () {
      setTimeout(function () {
    $(".loading").css({visibility:"hidden",opacity:"0"})
  }, 500);
     
});
</script>
	 <!--- -----------------------------------------------------------------------------------------------------> 
</body>
</html>