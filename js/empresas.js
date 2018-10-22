	

	function init(){

	jQuery(".new-empresa").unbind('click').click(function(e){

		//jQuery('.main-empresas').addClass('d-none');
		//jQuery('.form-empresa').removeClass('d-none');
		jQuery('.form-company').removeClass('d-none');
		jQuery('.section-btn-new').addClass('d-none');

				var fuente='https://demo.sacleg.com/system/empresas/legalix/img/legalix.png';
				var empresa = 'legalix';
				var correo = 'contacto@legalix.com'
				var html = jQuery('<div>',{ 'class' : 'col-md-3 col-sm-12'}).append(
							jQuery('<div>',{ 'class' : 'card mb-3 box-shadow'}).append(
								jQuery('<img>', { 'class' : 'card-img-top img-fluid' , 'alt' : "Thumbnail 100%x150" , 'data-holder-rendered' : 'true' , 'style' : 'height: 150px; width: 100%; display: block;' , 'src' : fuente })).append(
							jQuery('<div>',{ 'class' : 'card-body'}).append(
								jQuery('<div>',{ 'class' : 'container col-md-12 my-2 text-center' , 'style' : 'overflow: auto'}).append(
									jQuery('<h5>').append(empresa).append(
										jQuery('<span>' , { 'class' :  'badge badge-secondary'} ).append(correo))).append(
								jQuery('<ul>' , { 'class' : 'list-group'}).append(
										jQuery('<li>' , { 'class' : 'list-group-item d-flex justify-content-between align-items-center'}).append('Revisión').append(
											jQuery('<span>' , { 'class' : 'badge badge-primary badge-pill'}).append(
													'1'))).append(
								jQuery('<div>' , { 'class' : 'd-flex justify-content-between align-items-center my-3'}).append(
										jQuery('<div>', { 'class' : 'btn-group'}).append(
												jQuery('<button>' , { 'class' : ' btn btn-sm btn-outline-secondary'}).append(
														 'Entrar <i class="fas fa-sign-out-alt"></i>')
												).append(
												jQuery('<button>' , { 'class' : ' btn btn-sm btn-outline-secondary'}).append(
														 'Editar <i class="far fa-edit"></i>'))))))));
				jQuery(".empresas-container").append(html);

					jQuery(".btn-cancel").unbind('click').click(function(e){
						jQuery('.form-company').addClass('d-none');
						jQuery('.section-btn-new').removeClass('d-none');

					});

			});

		jQuery(".btn-cancel").unbind('click').click(function(e){
						jQuery('.section-btn-new').removeClass('d-none');
						jQuery('.form-company').addClass('d-none');

		});
	

	}

	jQuery(document).ready(function() {
		init();
	});

	       /*   <div class="col-md-3 col-sm-12">
	              <div class="card mb-3 box-shadow">
	                <img class="card-img-top img-fluid"  alt="Thumbnail [100%x50]"  data-holder-rendered="true" src="https://demo.sacleg.com/system/empresas/legalix/img/legalix.png" style="height: 150px; width: 100%; display: block;">
	                <div class="card-body">
	                	<div class="container col-sm-12 my-2 text-center"  style="overflow: auto">
	                		<h5> Legalix
	                	<span class="badge badge-secondary  ">contacto@legalix.com</span>
	                	</h5>
	                	</div>
	                	
	                  		<ul class="list-group ">
									<li class="list-group-item  d-flex justify-content-between align-items-center">Revisión
										<span class="badge badge-primary badge-pill">1</span>
									</li>
									<li class="list-group-item justify-content-between d-flex align-items-center">Rechazadas
										<span class="badge badge-primary badge-pill">2</span>
									</li>
								</ul>
	                  <div class="d-flex justify-content-between align-items-center my-3">
	                    <div class="btn-group">
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Entrar <i class="fas fa-sign-out-alt"></i></button>
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Editar <i class="far fa-edit"></i></button>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>*/