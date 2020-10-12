<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Winkle I Fast build Admin dashboard for any platform</title>
		<meta name="description" content="Winkle is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Winkle Admin, Winkleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="{{ asset('template/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="{{ asset('template/dist/css/style.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper  pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="{{ asset('template/img/logo.png')}}" alt="brand"/>
						<span class="brand-text">SenLavage</span>
					</a>
				</div>
				
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h5 class="text-center txt-dark mb-10">Connectez Vous !!</h5>
											<!-- <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6> -->
										</div>	
										<div class="form-wrap">
											<form action="{{ route('login') }}" method="POST">
												@csrf
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Adresse Email</label>
													<input type="email" name="email"  class="form-control" required="" id="exampleInputEmail_2" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Mot de Passe</label>
													<a class="capitalize-font txt-orange block mb-10 pull-right font-12" href="forgot-password.html">Mot de Passe oublié ?</a>
													<div class="clearfix"></div>
													<input type="password" name="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Mot de Passe">
												</div>
												
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" type="checkbox">
														<label for="checkbox_2"> Se souvenir de moi</label>
													</div>
													<div class="clearfix"></div> 
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-primary  btn-rounded">Se Connecter</button>
												</div>
												<div class="flex items-center justify-end mt-4">
													@if (Route::has('password.request'))
														<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
															{{ __('Mot de passe oublié?') }}
														</a>
													@endif
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="{{ asset('template/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="{{ asset('template/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('template/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="{{ asset('template/dist/js/jquery.slimscroll.js')}}"></script>
		
		<!-- Init JavaScript -->
		<script src="{{ asset('template/dist/js/init.js')}}"></script>
	</body>
</html>
