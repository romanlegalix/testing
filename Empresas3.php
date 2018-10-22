<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	 <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    <script src="js/empresas.js"></script>
	<title>Document</title>
</head>
<body>
	<main role="main">

	<div class="container main-empresas">

	    <section class="jumbotron text-center bg-white">
	        <div class="container">
	          <h1 class="jumbotron-heading"><i class="fa fa-cube"></i> Empresas </h1>
		          <p class="lead text-muted"> Aquí encontrarás el listado de tus empresas registradas y puedes buscarlas por Nombre de Empresa , Correo Electrónico y Nombre de Usuario.
				  </p>

			  <div class="col-lg-12 col-sm-12">
			    <div class="input-group">
			      <input type="text" class="form-control" placeholder="Empresa de Ejemplo">
			      <span class="input-group-btn">
			        <button class="btn btn-primary" type="button"> Buscar <i class="fa fa-search"></i></button>
			      </span>
			    </div>
			    	<div class="section-btn-new text-center">
						   <section class="col-xs-12 col-md-12 my-5 container">
					      	<button class="col-md-3  col-sm-12 btn btn-primary text-white new-empresa">Crear Nueva Empresa <i class="far fa-plus-square"></i></button>
					      </section>
					</div>
			  </div>
	          </p>
	          	<div class="col-sm-12 col-md-12 row">
			<div class="col-md-10 offset-md-1 my-5 form-company d-none" >
					<div class="card" >
						  <h5 class="card-header">Crear Nueva Empresa</h5>
						  <div class="card-body">
   						<div class="form-group">
						  	<div class="col-md-12 mb-3">
						      <label for="validationServerUsername">Nombre de la empresa</label>
						      <div class="input-group">
						        <div class="input-group-prepend">
						          <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-building"></i></span>
						        </div>
						        <input type="text" class="form-control " id="empresaname" placeholder="Nombre de la Empresa" aria-describedby="inputGroupPrepend3" required="">
						      </div>
						         <small id="empresaname" class="form-text text-muted">Ej: Legalix S.A</small>
						    </div>
						  	<div class="col-md-12 mb-3">
							      <label for="validationServerUsername">Subir una imagen</label>
							      <div class="input-group">
							        <div class="input-group-prepend">
							          <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-image"></i> </span>
							        </div>
							        <input type="text" class="form-control " id="validationServerUsername" placeholder="Logotipo" aria-describedby="inputGroupPrepend3" required="">
							      </div>
						        	 <small id="emailHelp" class="form-text text-muted">150 px de alto x 300 px de ancho</small>
							</div>
						     <div class="col-md-12 mb-3">
							      <label for="validationServerUsername">Correo Eléctrico</label>
							      <div class="input-group">
							        <div class="input-group-prepend">
							          <span class="input-group-text" id="inputGroupPrepends"><i class="fas fa-envelope-square"></i> </span>
							        </div>
							        <input type="text" class="form-control" id="validationServerUsernames" placeholder="Correo Electrónico" aria-describedby="inputGroupPrepend3" required="">
							        <div class="invalid-feedback">
							          Please choose a username.
							        </div>
							      </div>
						    </div>
				  </div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary  create-empresa col-md-3"> Crear nueva Empresa <i class="fas fa-building"></i>
				 		 <button class="btn btn-seconday btn-cancel col-md-3 mx-2">Cancelar</button>
					</div>
  </div>
  </div>
</div>
	</div>
	        </div>
	      </section>





	<div class="col-sm-12 col-md-12 row empresas-container">
	            <div class="col-md-3 col-sm-12">
	              <div class="card mb-3 box-shadow">
	                <img class="card-img-top img-fluid"  alt="Thumbnail [150%x50]"  data-holder-rendered="true" src="https://demo.sacleg.com/system/empresas/legalix/img/legalix.png" style="height: 150px; width: 300px; display: block;">
	                <div class="card-body">
	                	<div class="container col-sm-12 my-1 text-center"  style="overflow: auto">
	                		<h5> Legalix
	                	<span class="badge badge-secondary  ">contacto@legalix.com</span>
	                	</h5>
	                	</div>
	                	
	                  		<ul class="list-group ">
									<li class="list-group-item  d-flex justify-content-between align-items-center">Documentos
										<span class="badge badge-primary badge-pill">1</span>
									</li>
								</ul>
	                  <div class="d-flex justify-content-between align-items-center my-2">
	                    <div class="btn-group">
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Entrar <i class="fas fa-sign-out-alt"></i></button>
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar <i class="far fa-edit"></i></button>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="col-md-3 col-sm-12">
	              <div class="card mb-3 box-shadow">
	                <img class="card-img-top img-fluid"  alt="Thumbnail [150%x50]"  data-holder-rendered="true" src="https://lfbmexico.sacleg.com/system/empresas/lfbmexico/original.jpg"" style="height: 150px; width: 300px; display: block;">
	                <div class="card-body">
	                	<div class="container col-sm-12 my-1 text-center"  style="overflow: auto">
	                		<h5> LFB México
	                	<span class="badge badge-secondary  ">contacto@lfbmexico.com</span>
	                	</h5>
	                	</div>
	                	
	                  		<ul class="list-group ">
									<li class="list-group-item  d-flex justify-content-between align-items-center">Documentos
										<span class="badge badge-primary badge-pill">1</span>
									</li>
								</ul>
	                  <div class="d-flex justify-content-between align-items-center my-2">
	                    <div class="btn-group">
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Entrar <i class="fas fa-sign-out-alt"></i></button>
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar <i class="far fa-edit"></i></button>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="col-md-3 col-sm-12">
	              <div class="card mb-3 box-shadow">
	                <img class="card-img-top img-fluid"  alt="Thumbnail [150%x50]"  data-holder-rendered="true" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5b5PU6lxppiswJ4n-UH3mjKkSWap3h_i8ysHfebM8WlR6UjcO" style="height: 150px; width: 300px; display: block;">
	                <div class="card-body">
	                	<div class="container col-sm-12 my-1 text-center"  style="overflow: auto">
	                		<h5>  Empresa example 
	                	<span class="badge badge-secondary  ">contacto@example.com</span>
	                	</h5>
	                	</div>
	                	
	                  		<ul class="list-group ">
									<li class="list-group-item  d-flex justify-content-between align-items-center">Documentos
										<span class="badge badge-primary badge-pill">1</span>
									</li>
								</ul>
	                  <div class="d-flex justify-content-between align-items-center my-2">
	                    <div class="btn-group">
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Entrar <i class="fas fa-sign-out-alt"></i></button>
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar <i class="far fa-edit"></i></button>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
		            <div class="col-md-3 col-sm-12">
	              <div class="card mb-3 box-shadow">
	                <img class="card-img-top img-fluid"  alt="Thumbnail [150%x50]"  data-holder-rendered="true" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5b5PU6lxppiswJ4n-UH3mjKkSWap3h_i8ysHfebM8WlR6UjcO" style="height: 150px; width: 300px; display: block;">
	                <div class="card-body">
	                	<div class="container col-sm-12 my-1 text-center"  style="overflow: auto">
	                		<h5> Example Company
	                	<span class="badge badge-secondary  ">contacto@example.com</span>
	                	</h5>
	                	</div>
	                	
	                  		<ul class="list-group ">
									<li class="list-group-item  d-flex justify-content-between align-items-center">Documentos
										<span class="badge badge-primary badge-pill">1</span>
									</li>
								</ul>
	                  <div class="d-flex justify-content-between align-items-center my-2">
	                    <div class="btn-group">
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Entrar <i class="fas fa-sign-out-alt"></i></button>
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar <i class="far fa-edit"></i></button>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="col-md-3 col-sm-12">
	              <div class="card mb-3 box-shadow">
	                <img class="card-img-top img-fluid"  alt="Thumbnail [150%x50]"  data-holder-rendered="true" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5b5PU6lxppiswJ4n-UH3mjKkSWap3h_i8ysHfebM8WlR6UjcO" style="height: 150px; width: 300px; display: block;">
	                <div class="card-body">
	                	<div class="container col-sm-12 my-2 text-center"  style="overflow: auto">
	                		<h5> Example Empresa
	                	<span class="badge badge-secondary  ">contacto@example.com</span>
	                	</h5>
	                	</div>
	                	
	                  		<ul class="list-group ">
									<li class="list-group-item  d-flex justify-content-between align-items-center">Documentos
										<span class="badge badge-primary badge-pill">1</span>
									</li>
								</ul>
	                  <div class="d-flex justify-content-between align-items-center my-2">
	                    <div class="btn-group">
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Entrar <i class="fas fa-sign-out-alt"></i></button>
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar <i class="far fa-edit"></i></button>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            
		</div>
	</main>
</body>
</html>